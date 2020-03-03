<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof \Illuminate\Validation\ValidationException) {
              parent::report($exception);
            //$this->convertValidationExceptionToResponse($exception, $request);
        }
        if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
            $modelName = $exception->getModel();

            return response()->json([
                'error' => 'The entity can not be found in the database, you sent the wrong parameter',
                'status' => 422
            ], 422);
        }
        if ($exception instanceof \Illuminate\Auth\Access\AuthorizationException) {

            return response()->json([
                'error' => 'You dont have the authorization to make this request',
                'status' => 422
            ], 422);
        }

        return parent::render($request, $exception);
        
    }
}
