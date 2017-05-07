<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Article extends Eloquent
{
    use SoftDeletes;

    protected $connection = 'mongodb';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'title',
        'content'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
