<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\movieList;

class MovieListRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required',
            'height' => 'required',
            'mass' => 'required',
            'skin_color' => 'required',
            'eye_color' => 'required',
            'birth_year' => 'required',
            'gender' => 'required',
            'homeworld' => 'required',
           
        ];
    }

    public function handle() {

        try {

            $createMove = movieList::create([
                        'name' => $this->name,
                        'height' => $this->height,
                        'mass' => $this->mass,
                        'skin_color' => $this->skin_color,
                        'eye_color' => $this->eye_color,
                        'birth_year' => $this->birth_year,
                        'gender' => $this->gender,
                        'homeworld' => $this->homeworld,
                        'films_id' => $this->films_id,
                        'comment_id' => $this->comment_id
            ]);
        } catch (ModelNotFoundException $ex) {
            $createMove = "Error Creating Movie";
        }

        return $createMove;
    }

}
