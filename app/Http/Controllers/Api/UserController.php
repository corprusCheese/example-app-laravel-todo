<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use PHPUnit\Exception;
use function PHPUnit\Framework\throwException;

class UserController extends ApiController
{
    public function update(UpdateUserRequest $request, $id)
    {
        return response()->json($this->service->update($request, $id), $this->service->update($request, $id)? 200 : 404);
    }

    public function store(Request $request): JsonResponse
    {
        parent::store($request);
    }

    public function search(Request $request): JsonResponse
    {
        return response()->json($this->service->search($request), $this->service->search($request)? 200 : 404);
    }
}
