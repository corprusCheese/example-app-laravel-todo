<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

class ApiController extends Controller {
    private $repository;

    public function __construct(BaseRepository $repository) {
        $this->repository = $repository;
    }

    public function index()
    {
        // json что получает все у всех
        return $this->repository->get();
    }

    public function store(Request $request): JsonResponse
    {
        // после создания положить в базу
        return response()->json($this->repository->create($request->all()), 201);
    }

    public function show($id)
    {
        // показать
        return $this->repository->getById($id);
    }

    public function update(Request $request, $id): JsonResponse
    {
        // обновить
        try {
            $item = $this->repository->getById($id);
            $item->update($request->all());
        } catch (\Exception $e) {
            $item = null;
        } finally {
            $result = null;
            if ($item) {
                $result = response()->json($item, 201);
            } else {
                $result = response()->json(null, 404);
            }

            return $result;
        }
    }

    public function delete($id): JsonResponse
    {
        // удалить
        try {
            $item = $this->repository->getById($id);
            $item->delete();
            $result = response()->json(null, 204);
        } catch (\Exception $e) {
            $result = response()->json(null, 404);
        } finally {
            return $result;
        }
    }
}
