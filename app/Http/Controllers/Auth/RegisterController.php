<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function register(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

    }

    /**
     * @return Application|Factory|View
     */
    function show() {
        return view('register');
    }
}
