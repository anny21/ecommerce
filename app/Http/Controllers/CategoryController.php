<?php

namespace App\Http\Controllers;
use App\Repository\EloquentRepositoryInterface;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(EloquentRepositoryInterface $eloquentInterface){
        $this->eloquentInterface = $eloquentInterface;
    }
    public function index()
    {
        //return index view
        return view('admin.category.index');
    }

    public function create()
    {
         return $this->eloquentInterface->view;
    }
}
