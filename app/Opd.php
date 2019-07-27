<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Builder;

class Opd extends Model
{
    protected $table= 'opd';
    protected $fillable = ['category_id','user_id','user_opd'];

    public function authorId()
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'author_id', 'id');
    }

    public function categoryId(){
        return $this->belongsTo(Voyager::modelClass('Category'), 'category_id', 'id');
    }

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && app('VoyagerAuth')->user()) {
            $this->author_id = app('VoyagerAuth')->user()->getKey();
        }

        parent::save();
    }

    public function getOpdListByCategory($cat)
    {
        return $this->categoryId()->where('name','DINAS')->first();
    }

    public function scopePublished(Builder $query)
    {
        return $query->where('status','=','PUBLISHED');
    }
}
