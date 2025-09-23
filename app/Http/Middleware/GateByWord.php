<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GateByWord
{
    private array $words = ['alpha','bravo','charlie','delta','echo'];
    public function handle(Request $request, Closure $next, $index): Response
    {
        $key = $request->query('key');
        $i = (int)$index;

        if (!isset($this->words[$i]) || $key !== $this->words[$i]) {
            abort(403, 'Forbidden');
        }

        return $next($request);
    }
}
