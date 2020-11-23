<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;

class ResponseHandler
{
    public function __construct(ResponseFactory $factory)
    {
        $this->factory = $factory;
    }

    public function handle($request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');

        $response = $next($request);

        if ($response instanceof JsonResponse) {
            $response = $this->factory->json([
                'data' => $response->getData(),
                'status' => $response->status(),
                ]
            );
        }
        return $response;
    }
}
