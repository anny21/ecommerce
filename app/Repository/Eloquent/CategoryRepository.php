<?php 

namespace App\Repository\Eloquent;
use App\Models\Category;

class CategoryRepository extends BaseRepository
{
    public function __construct(Category $category){
        parent::__construct($category);
    }

    public function view(){
        return view('admin.category.create');
     }
}