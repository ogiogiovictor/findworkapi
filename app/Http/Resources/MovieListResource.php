<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
//use Illuminate\Http\Resources\Json\Resource;

class MovieListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       return [
            'name' => $this->name,
            'height' => $this->height,
            'mass' => $this->mass,
            'skin_color' => $this->skin_color,
            'eye_color' => $this->eye_color,
            'birth_year' => $this->birth_year,
            'gender' => $this->gender,
            'homeworld' => $this->homeworld,
            'films_id' => $this->films_id,
            'comment_id' => $this->comment_id,
        
        ];
    }
}
