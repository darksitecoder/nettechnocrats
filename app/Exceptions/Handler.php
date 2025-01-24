<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            // Add custom reporting logic if needed
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        // Check if it's a 404 error (NotFoundHttpException)
        if ($exception instanceof NotFoundHttpException) {
            \Log::info('Custom 404 handler reached');
    
            // Return the custom 404 page
            return response()->view('errors.custom404', [], 404);
        }
    
        // Call the parent render method for all other exceptions
        return parent::render($request, $exception);
    }
    
}
