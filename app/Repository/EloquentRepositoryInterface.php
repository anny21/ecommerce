<?php

namespace App\Repository;


interface EloquentRepositoryInterface
{
    public function create($request);

    public function find($id);

    public function delete($id);

    public function update($id, $request);
}