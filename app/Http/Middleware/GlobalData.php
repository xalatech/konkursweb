<?php

namespace App\Http\Middleware;

use App\AdvokatFirma;
use Closure;
use Torzer\Awesome\Landlord\Facades\Landlord;
use Illuminate\Database\Eloquent\Builder;

class GlobalData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (auth()->check()) {
            if (auth()->user()->firma_id) {
                Landlord::addTenant('firma_id', \auth()->user()->firma_id);
            }
        }

        return $next($request);
    }


    public function apply(Builder $builder)
    {
        return $builder->where('firma_id', session('tenant'));
    }
}
