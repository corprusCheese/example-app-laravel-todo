<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\AbstractService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

class ApiController extends Controller {
    protected $repository;
    protected $service;

    public function __construct(BaseRepository $repository, AbstractService $service) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(): JsonResponse
    {
        // json что получает все у всех
        return response()->json($this->repository->get());
    }

    public function store(Request $request): JsonResponse
    {
        // после создания положить в базу
        return response()->json($this->service->create($request), 201);
    }

    public function show($id): JsonResponse
    {
        // показать
        return response()->json($this->repository->getById($id));
    }

    public function delete($id): JsonResponse
    {
        return response()->json($this->service->delete($id));
    }

}
