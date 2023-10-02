<?php

namespace App\Repository\User;

interface InterfaceUserRepository
{
    public function createUser($request);
    public function getAllUser();
    public function editUser($id);
    public function updateUser($id, $data);
    public function deleteUser($id);

}
