<?php

namespace App\Repositories;

use App\Models\Record;
use Illuminate\Support\Collection;
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

    public function getUserRecords(int $userId): Collection
    {
        return DB::table('user_records')->select()->where('user_id','=', $userId)->get();
    }

    public function getUserByRecordId(int $recordId): string
    {
        return DB::table('user_records')->select()->where('record_id','=', $recordId)->value('user_id');
    }
}
