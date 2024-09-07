<?php

namespace App\Repository;

use App\Interface\Repository\UserRepositoryInterface;
use App\Models\User;
use App\Models\User_Account;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function findByEmail(string $email)
    {
        return User_Account::where('email', $email)->first();
    }

    public function findOneById(int $id)
    {
        return User_Account::findOrFail($id);
    }

    public function findMany()
    {
        return User_Account::paginate(10);
    }

    public function create(object $payload)
    {
        $user = new User_Account();
        $user->email = $payload->email;
        $user->last_name = $payload->last_name;
        $user->first_name = $payload->first_name;
        $user->middle_name = $payload->middle_name;
        $user->password = Hash::make($payload->password);
        $user->status_id = $payload->status_id;
        $user->save();

        return $user->fresh();

    }

    public function update(object $payload, int $id)
    {
        $user = User_Account::findOrFail($id);
        $user->email = $payload->email;
        $user->last_name = $payload->last_name;
        $user->first_name = $payload->first_name;
        $user->middle_name = $payload->middle_name;
        $user->password = Hash::make($payload->password);
        $user->status_id = $payload->status_id;
        $user->save();

        return $user->fresh();
    }

    public function delete(int $id)
    {
        $user = User_Account::findOrFail($id);
        $user->delete();

        return response()->json([
            'message' => 'Success'
        ], Response::HTTP_OK);
    }

}
