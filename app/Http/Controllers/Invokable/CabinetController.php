<?php

namespace App\Http\Controllers\Invokable;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CabinetController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View|Response
     */
    public function __invoke(Request $request, $id)
    {
        $cabinetUser = User::findOrFail($id);
        if ($cabinetUser) {
            return view('cabinet', ["cabinetUser" => $cabinetUser]);
        } else {
            return view('error');
        }
    }
}
