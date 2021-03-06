<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileFolder extends Model
{
    protected $fillable = [
        'title'
    ];

    public function files()
    {
        return $this->hasMany('App\File');
    }
}
