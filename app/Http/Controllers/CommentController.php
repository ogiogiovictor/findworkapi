<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use Symfony\Component\HttpFoundation\Response;


class CommentController extends Controller
{
    public function addComment(CommentRequest $request){
        
          $json  = [];
          
          $json = [
              'data' => new CommentResource($request->handle()),
              'status' => Response::HTTP_OK,
              'msg' => "Comment Successfully Added"
               ];
          return response()->json($json); 
    }
}
