<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFoundException;
use Bican\Roles\Exceptions\RoleDeniedException;
use Bican\Roles\Exceptions\PermissionDeniedException;
use Bican\Roles\Exceptions\LevelDeniedException;
use Symfony\Component\Debug\Exception\FatalErrorException as FatalErrorException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if ($e instanceof RoleDeniedException || $e instanceof PermissionDeniedException || $e instanceof LevelDeniedException) {
        
            abort('403');
        
        } else if ($e instanceof FatalErrorException) {

            if (app()->environment() == 'production') {
                return response()->view('errors.500', [], 500);
            }

        } else if ($e instanceof ModelNotFoundException) {

            if (app()->environment() == 'production') {
                abort('404');
            }

        }

        return parent::render($request, $e);
    }
}
