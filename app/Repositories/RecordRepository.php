<?php

namespace App\Repositories;

use App\Models\Record;
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
}
