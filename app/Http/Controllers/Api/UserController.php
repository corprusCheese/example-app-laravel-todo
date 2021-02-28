<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends ApiController
{

    public function update(UpdateUserRequest $request, $id): JsonResponse
    {
        $updateResult = $this->service->update($request, $id);
        dd($updateResult);
        return response()->json($updateResult, $updateResult ? 200 : 404);
    }

    public function search(Request $request): JsonResponse
    {
        $searchResult = $this->repository->search($request);
        return response()->json($searchResult, $searchResult ? 200 : 404);
    }

    public function store(Request $request): JsonResponse
    {
        // после создания положить в базу
        $createResult = $this->service->create($request);
        return response()->json($createResult, $createResult ? 201 : 400);
    }
}
