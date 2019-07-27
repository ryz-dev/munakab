<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = ['user_id', 'description', 'title','image'];

    public function userId()
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'user_id', 'id');
    }

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->user_id && app('VoyagerAuth')->user()) {
            $this->user_id = app('VoyagerAuth')->user()->getKey();
        }

        parent::save();
    }

}
