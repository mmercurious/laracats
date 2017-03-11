<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Cat extends Model
{
    protected $fillable = ['name', 'description'];

    public function comments() {
    	return $this->hasMany(Comment::class);
    }

    public function addComment($body) {
    	$this->comments()->create(['body' => $body]);
    }
}
