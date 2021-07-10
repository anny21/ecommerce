<?php

namespace App\Repository\Eloquent;
use App\Repository\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface
{
    public function __construct(Model $model){
        $this->model = $model;
    }


    public function create($request){
        $this->model->create($request);
    }

    public function find($id){
       return $this->model->find($id);
    }

    public function update($id, $request){
       return  $this->find($id)->update($request);
    }

    public function delete($id){
        return $this->find($id)->delete();
    }
}