<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\Resource;

//class MovieListCollection extends ResourceCollection
class MovieListCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'name' => $this->name,
            'height' => $this->height. "cm",
            'height_conversion' => 0.3937 * $this->height. "inches". "  " . 0.0328 * $this->height. "ft",
            'mass' => $this->mass,
            'skin_color' => $this->skin_color,
            'eye_color' => $this->eye_color,
            'birth_year' => $this->birth_year,
            'gender' => $this->gender,
            'homeworld' => $this->homeworld,
            'films_id' => $this->films_id,
            'total_comment' => $this->comment->count(),
            'comments' => $this->comment->count() > 0 ? $this->comment : 'No Comment',
        
        ];
    }
}
