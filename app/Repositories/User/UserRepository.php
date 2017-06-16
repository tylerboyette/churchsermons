<?php

namespace App\Repositories\User;

interface UserRepository
{
    public function getAll();

    public function countAll();

    public function authUser();

    public function getBySlug($slug);

    public function get30Paginated();

    public function create($request);

    public function typeFilter($type);

    public function update($slug, $request);

    public function delete($slug);

    public function changePassword($slug, $request);
}
