<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model(): string
    {
        return User::class;
    }
    public function search(Request $request): \Illuminate\Support\Collection
    {
        $searchName = $request->all()['name'];
        return $this->where('name', trim(strtolower("%".$searchName."%")), 'LIKE')->get();
    }
}
