<?php

namespace App\Services;


use App\Http\Requests\UpdateUserRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

abstract class AbstractService {

    protected $repository;
    public function __construct(BaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(Request $request): \Illuminate\Database\Eloquent\Model
    {
        return $this->repository->create($request->all());
    }

    public function update(Request $request, $id) {
        return $this->repository->updateById($id, $request->all());
    }

    public function delete($id): ?bool
    {
        try {
            return $this->repository->deleteById($id);
        } catch (\Exception $e) {}
    }
}
