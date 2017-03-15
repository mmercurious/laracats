<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use League\CommonMark\CommonMarkConverter;

class Cat extends Model
{
    protected $fillable = ['name', 'description', 'creator'];

    public function comments() {
    	return $this->hasMany(Comment::class);
    }

    public function addComment($body) {
    	$this->comments()->create(['body' => $body]);
    }

    public function user() {
    	return $this->belongsTo(User::class, 'creator');
    }

    public function htmlDescription() {
        $converter = new CommonMarkConverter();
        $safe = htmlspecialchars($this->description);
        return $converter->convertToHtml($safe);
        
    }
}
