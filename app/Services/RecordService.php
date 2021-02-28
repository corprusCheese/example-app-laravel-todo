<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecordService extends AbstractService
{
    public function create(Request $request): Model
    {
        $record = parent::create($request);

        // связанная таблица
        $this->createUserRecord(
            $record->id,
            $request->all()['user_id']
        );

        return $record;
    }

    public function update(Request $request, $id)
    {
        return parent::update($request, $id);
    }

    private function createUserRecord($recordId, $userId): bool
    {
        return DB::table('user_records')->insert([
            "user_id" => $userId,
            "record_id" => $recordId
        ]);
    }

    private function deleteUserRecord($recordId): bool
    {
        return DB::table('user_records')->where(
            "record_id", "=", $recordId
        )->delete();
    }

    public function delete($id): ?bool
    {
        $result = parent::delete($id);
        return $result * $this->deleteUserRecord($id);
    }
}
