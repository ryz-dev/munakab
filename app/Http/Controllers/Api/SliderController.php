<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Plugin\ListWith;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $options = $request->details ?? [];

        $thumbnail_names = [];
        $thumbnails = [];
        if (!($options->hide_thumbnails ?? false)) {
            $thumbnail_names = array_column(($options['thumbnails'] ?? []), 'name');
        }
        $filesystem = config('voyager.storage.disk');

        $folder = 'slider';

        if ($folder == '/') {
            $folder = '';
        }

        $dir = ''.$folder;

        $files = [];
        $storage = Storage::disk($filesystem)->addPlugin(new ListWith());
        $storageItems = $storage->listWith(['mimetype'], $dir);

        foreach ($storageItems as $item) {
            if (empty(pathinfo($item['path'], PATHINFO_FILENAME)) && !config('voyager.hidden_files')) {
                continue;
            }
            // Its a thumbnail and thumbnails should be hidden
            if (Str::endsWith($item['filename'], $thumbnail_names)) {
                $thumbnails[] = $item;
                continue;
            }
            $files[] = [
                'name'          => $item['basename'],
                'filename'      => $item['filename'],
                'type'          => $item['mimetype'] ?? 'file',
                'path'          => Storage::disk($filesystem)->url($item['path']),
                'relative_path' => $item['path'],
                'size'          => $item['size'],
                'last_modified' => $item['timestamp'],
                'thumbnails'    => [],
            ];
        }

        foreach ($files as $key => $file) {
            foreach ($thumbnails as $thumbnail) {
                if ($file['type'] != 'folder' && Str::startsWith($thumbnail['filename'], $file['filename'])) {
                    $thumbnail['thumb_name'] = str_replace($file['filename'].'-', '', $thumbnail['filename']);
                    $thumbnail['path'] = Storage::disk($filesystem)->url($thumbnail['path']);
                    $files[$key]['thumbnails'][] = $thumbnail;
                }
            }
        }

        return apiResponse(200,$files);
    }
}
