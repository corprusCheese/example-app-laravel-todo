<?php namespace App\Http\Controllers\Api;

use App\Models\Record;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

class RecordController extends ApiController
{
    public function update(Request $request, $id): JsonResponse
    {
        $updateResult = $this->service->update($request, $id);
        return response()->json($updateResult, $updateResult? 200 : 404);
    }

    public function store(Request $request): JsonResponse
    {
        // после создания положить в базу
        $createResult = $this->service->create($request);
        return response()->json($createResult, $createResult ? 201 : 400);
    }
}
