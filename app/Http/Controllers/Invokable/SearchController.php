<?php

namespace App\Http\Controllers\Invokable;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
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
     * @param UserRepository $repository
     * @return Application|Factory|View|Response
     */
    public function __invoke(Request $request, UserRepository $repository)
    {
        //
        $searchUsers = $repository->search($request)->forPage(1, 5);
        return view('search', ["users"=>$searchUsers]);
    }
}
