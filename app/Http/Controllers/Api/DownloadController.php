<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Plugin\ListWith;
use Illuminate\Support\Str;

class DownloadController extends Controller
{
    protected $filesystem;
    protected $thumbnail_names;
    protected $directory = '';

    public function __construct()
    {
        $this->filesystem = config('voyager.storage.disk');
    }

    public function index(Request $request)
    {
        $options = $request->details ?? [];
        $thumbnail_names = [];
        $thumbnails = [];
        if (!($options->hide_thumbnails ?? false)) {
            $thumbnail_names = array_column(($options['thumbnails'] ?? []), 'name');
        }
        $this->thumbnail_names = $thumbnail_names;

        $folder = 'download';

        if ($folder == '/') {
            $folder = '';
        }

        $dir = $this->directory.'/'.$folder;

        $files = [];

        $res = $this->getIndex($dir);

        return apiResponse(200,$res);
    }

    private function getIndex($folder){
        $files = [];
        $thumbnails = [];
        $storage = Storage::disk($this->filesystem)->addPlugin(new ListWith());
        $storageItems = $storage->listWith(['mimetype'], $folder);

        foreach ($storageItems as $item) {
            if ($item['type'] == 'dir') {
                $files[] = $this->getFolder($item);
            } else{
                if (empty(pathinfo($item['path'], PATHINFO_FILENAME)) && !config('voyager.hidden_files')) {
                    continue;
                }

                if (Str::endsWith($item['filename'], $this->thumbnail_names)) {
                    $thumbnails[] = $item;
                    continue;
                }

                $files[] = $this->getFiles($item);
            }
        }

        foreach ($files as $key => $file) {
            foreach ($thumbnails as $thumbnail) {
                if ($file['type'] != 'folder' && Str::startsWith($thumbnail['filename'], $file['filename'])) {
                    $thumbnail['thumb_name'] = str_replace($file['filename'].'-', '', $thumbnail['filename']);
                    $thumbnail['path'] = Storage::disk($this->filesystem)->url($thumbnail['path']);
                    $files[$key]['thumbnails'][] = $thumbnail;
                }
            }
        }

        return $files;
    }

    private function getFolder($item){
        return [
            'name'          => $item['basename'],
            'type'          => 'folder',
            'path'          => Storage::disk($this->filesystem)->url($item['path']),
            'relative_path' => $item['path'],
            'items'         => $this->getIndex($item['path'], $this->thumbnail_names),
            'last_modified' => '',
        ];
    }

    private function getFiles($item){
        return [
            'name'          => $item['basename'],
            'filename'      => $item['filename'],
            'type'          => $item['mimetype'] ?? 'file',
            'path'          => Storage::disk($this->filesystem)->url($item['path']),
            'relative_path' => $item['path'],
            'size'          => $item['size'],
            'last_modified' => $item['timestamp'],
            'thumbnails'    => [],
        ];
    }
}
