<?php

namespace App\Http\Controllers\Invokable;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @param UserService $service
     * @return Application|Factory|View|Response
     */
    public function __invoke(Request $request, UserService $service)
    {
        //
        $searchUsers = $service->search($request)->forPage(1, 5);
        return view('search', ["users"=>$searchUsers]);
    }
}
