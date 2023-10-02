<?php

namespace App\Http\Controllers;


use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\FrontUser;
use App\Repository\User\InterfaceUserRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $user, $users, $name;

    public function __construct(InterfaceUserRepository $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('web.user.create');
    }

    public function createUser(StoreRequest $request)
    {
        if ($this->user->createUser($request)){
            Toastr::success('User added successfully', 'Success');
            return redirect()->route('user.manage');
        }
        else{
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back();
        }

    }

    public function manageUser()
    {
        $users = $this->user->getAllUser();
        return view('web.user.manage', compact('users'));

    }

    public function editUser($id)
    {
        $user = $this->user->editUser($id);
        return view('web.user.edit', compact('user'));
//        ->with('users', $users)
    }

    public function updateUser(UpdateRequest $request, $id)
    {
        if ($this->user->updateUser($id, $request)){
            Toastr::success('User Update successfully', 'Success');
            return redirect()->route('user.manage');
        }
        else{
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back();
        }

    }

    public function deleteUser($id)
    {
        if ($this->user->deleteUser($id)){
            Toastr::success('User delete Successfully', 'Success');
            return redirect()->route('user.manage');
        }
        else{
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back();
        }

    }
}
