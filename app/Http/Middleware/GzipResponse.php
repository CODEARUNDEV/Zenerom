<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GzipResponse
{
    public function handle(Request $request, Closure $next): Response
    {
        /** @var Response $response */
        $response = $next($request);

        if (
            extension_loaded('zlib') &&
            str_contains($request->header('Accept-Encoding', ''), 'gzip') &&
            !$response->headers->has('Content-Encoding') &&
            !$response->isRedirection() &&
            method_exists($response, 'getContent')
        ) {
            $content = $response->getContent();
            if (is_string($content) && strlen($content) > 1024) {
                $compressed = gzencode($content, 6);
                if ($compressed !== false) {
                    $response->setContent($compressed);
                    $response->headers->set('Content-Encoding', 'gzip');
                    $response->headers->set('Content-Length', (string) strlen($compressed));
                    $response->headers->set('Vary', 'Accept-Encoding');
                }
            }
        }

        return $response;
    }
}
