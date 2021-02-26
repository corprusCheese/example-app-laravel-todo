<?php


namespace  App\Services;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserService extends AbstractService {

    public function update(Request $request, $id): ?User
    {
        // обновить
        if ($request->validated()) {
            /** @var User $item */
            $item = $this->repository->getById($id);
            if (Hash::check($request['password'], $item->getAuthPassword())) {
                $data = $request->all();
                $data['password'] = Hash::make($request['password']);
                $item->update($data);
            }
            return $item;
        }

        return null;
    }

    public function search(Request $request) {
        $searchName = $request->all()['name'];
        return $this->repository->where('name', "%".$searchName."%", 'LIKE')->get();
    }
}
