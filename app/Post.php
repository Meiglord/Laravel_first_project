<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'content',
    ];

    /**
     *  Get the user that owns the phone.
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $table = "posts";
}
