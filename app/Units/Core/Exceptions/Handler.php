<?php

namespace CoreApp\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\App;

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
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Throwable $e
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $e)
    {
        if ($e instanceof AuthorizationException) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Unauthorized.'], 403);
            }

            // Redirect user from here whatever the route you want.
            return redirect('/');
        }

        if ($e instanceof ModelNotFoundException) {
            return $this->renderErrorView(404);
        }

        if ($this->isHttpException($e)) {
            if ($e->getStatusCode() == 404) {
                return $this->renderErrorView(404);
            }

            if ($e->getStatusCode() == 503) {
                if (App::environment('staging')) {
                    return redirect(config('app.production_url'), 301);
                }

                return $this->renderErrorView(503);
            }
        }

        // this will still show the error if there is any in your code
        return parent::render($request, $e);
    }

    /**
     * @param int $error
     * @return \Illuminate\Http\Response
     */
    public function renderErrorView($error = 404){
        return response()->view('portal::errors.' . $error, [], $error);
    }
}
