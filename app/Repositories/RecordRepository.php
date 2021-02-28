<?php

namespace App\Repositories;

use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class RecordRepository.
 */
class RecordRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model(): string
    {
        return Record::class;
    }

    public function getUserIdByRecordId(int $recordId) :string
    {
        return Record::find($recordId)->users()->get()->all()[0]->id;
    }

    public function getRecordsByUserId(int $userId): array
    {
        return User::find($userId)->records()->get()->all();
    }

    public function search(Request $request): \Illuminate\Database\Eloquent\Collection
    {
        $searchText = $request->all()['text'];

        return $this->where('text', "%".$searchText."%", 'LIKE')->get();
    }
}
