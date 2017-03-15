<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use League\CommonMark\CommonMarkConverter;

class Comment extends Model
{
	protected $fillable = ['body'];
	
    public function cats() {
    	return $this->belongsTo(Cat::class);
    }

    public function htmlDescription() {
        $converter = new CommonMarkConverter();
        $safe = htmlspecialchars($this->body);
        return $converter->convertToHtml($safe);
    }
}
