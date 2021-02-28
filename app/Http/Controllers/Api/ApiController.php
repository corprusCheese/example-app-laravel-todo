<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\AbstractService;
use App\Services\RecordService;
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

    // через di в каждом апи контроллере будут свои репозитории сервисы

    public function index(): JsonResponse
    {
        // json что получает все у всех
        return response()->json($this->repository->get());
    }

    public function show($id): JsonResponse
    {
        // показать
        return response()->json($this->repository->getById($id));
    }

    public function destroy($id): JsonResponse
    {
        return response()->json($this->service->delete($id));
    }

    // здесь объявлены методы, что не требуют Http\Request
}
