<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class CommentResource extends JsonResource
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
            'comments' => str_limit($this->comments, 500),
            'movie_id' => $this->movie_id,
            'ip' => $this->ip,
            'created_at' => $this->created_at
            
        ];

    }
}
