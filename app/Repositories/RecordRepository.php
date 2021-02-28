<?php

namespace App\Repositories;

use App\Models\Record;
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

    public function getAllFromUserRecordsByUserId(int $userId): Collection
    {
        return DB::table('user_records')->select()->where('user_id','=', $userId)->get();
    }

    public function getUserByRecordId(int $recordId): string
    {
        return DB::table('user_records')->select()->where('record_id','=', $recordId)->value('user_id');
    }

    public function getUserRecordsByUserId(int $userId): array
    {
        $userRecords = $this->getAllFromUserRecordsByUserId($userId)->all();
        $recordIds = array_column($userRecords,'record_id');

        return $this->whereIn('id',$recordIds)->get()->all();
    }

    public function search(Request $request): \Illuminate\Database\Eloquent\Collection
    {
        $searchText = $request->all()['text'];

        return $this->where('text', "%".$searchText."%", 'LIKE')->get();
    }
}
