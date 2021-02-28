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
        return response()->json($this->service->update($request, $id), $this->service->update($request, $id)? 200 : 404);
    }
}
