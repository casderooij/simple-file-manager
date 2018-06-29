<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'title', 'sub_text', 'name', 'location', 'file_extension', 'file_folder_id'
    ];

    public function file()
    {
        return $this->belongsTo('App\FileFolder');
    }
}
