<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * Respond with a not found error (404).
     *
     * @param  string  $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function notFoundResponse($message = 'Resource not found.')
    {
        return response()->json(['error' => $message], 404);
    }

    /**
     * Respond with an unauthorized error (401).
     *
     * @param  string  $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function unauthorizedResponse($message = 'Unauthorized.')
    {
        return response()->json(['error' => $message], 401);
    }

    // Outros métodos comuns podem ser definidos aqui...
}
