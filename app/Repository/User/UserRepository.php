<?php
namespace App\Repository\User;

use App\Models\FrontUser;
use App\Models\User;


class UserRepository implements InterfaceUserRepository
{
    public function createUser($request)
    {
        Try{
            FrontUser::insert([
                'name'    => $request->name,
                'email'   => $request->email,
                'mobile' => $request->mobile,
                'dob'    => $request->dob,
                'gender' => $request->gender,
            ]);
            return true;
        }
        Catch(\Exception $th){
            return false;
        }
    }
    public function getAllUser()
    {
        return FrontUser::all();
    }

    public function editUser($id)
    {
        // TODO: Implement editUser() method.
        return FrontUser::find($id);
    }
    public function updateUser($id, $request)
    {
        // TODO: Implement updateUser() method.

        $user           = FrontUser::find($id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->mobile   = $request->mobile;
        $user->dob      = $request->dob;
        $user->gender   = $request->gender;
        $user->save();
        return true;
    }

    public function deleteUser($id)
    {
        $user = FrontUser::find($id);
        $user->delete();
        return true;
    }
}
