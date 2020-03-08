<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\comments;
use Request;

class CommentRequest extends FormRequest {

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
            'comment' => 'required',
            'episode_id' => 'required',
            'name' => 'required'
        ];
    }

    public function messages() {
        return [
            'episode_id.required' => 'Please Select a Movie!, Just add a number to pass',
        ];
    }

    public function handle() {

        try {

            $createComment = comments::create([
                        'comments' => $this->comment,
                        'name' => $this->name,
                        'episode_id' => $this->episode_id,
                        'ip' => Request::ip(),
            ]);
        } catch (ModelNotFoundException $ex) {
            $createComment = "Error Creating Comment";
        }

        return $createComment;
    }

}
