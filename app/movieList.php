<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\films;
use App\comments;


class movieList extends Model
{
     protected $fillable = [
    	'name', 'height', 'mass', 'hair_color', 'skin_color', 'eye_color',
        'birth_year', 'gender', 'homeworld', 'films_id', 'comment_id'
    ];
     
   
    public function comment(){
        return $this->hasMany(comments::class, 'movie_id');
    }
    
   
}
