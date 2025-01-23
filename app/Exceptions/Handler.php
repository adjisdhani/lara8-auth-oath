<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register_old()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function register()
    {
        // Tangani TokenExpiredException
        $this->renderable(function (TokenExpiredException $e, $request) {
            return response()->json([
                'error' => 'Token expired',
                'message' => 'Please refresh your token to continue.'
            ], 401);
        });

        // Tangani AuthenticationException
        $this->renderable(function (AuthenticationException $e, $request) {
            return response()->json([
                'error' => 'Invalid token',
                'message' => 'Please provide a valid token.'
            ], 401);
        });
    }
}
