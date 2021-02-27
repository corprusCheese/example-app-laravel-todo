<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecordService extends AbstractService {
    public function create(Request $request): Model {
        $record = parent::create($request);
        // связанная таблица
        $this->createUserRecord(
            $record,
            User::query()->findOrFail(Auth::id())
        );

        return $record;
    }

    public function search(Request $request) {

    }

    private function createUserRecord($record, $user): bool {
        return DB::table('user_records')->insert([
            "user_id" => $user->id,
            "record_id" => $record->id
        ]);
    }
}
