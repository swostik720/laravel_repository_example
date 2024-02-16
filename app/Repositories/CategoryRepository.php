<?php
namespace App\Repositories;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface{
  public function index(){
    return Category::all();
  }
  // public function create(){

  // }
  public function store($request){
      Category::create($request); //Create method of laravel
  }

  public function edit($id){
    return Category::find($id);
  }

  public function update($request,$id){
    $categories=Category::find($id);
    $categories->title = $request['title']; //Update method of laravel
    $categories->save();
  }

  public function destroy($id){
    $categories = Category::find($id);
    $categories->delete();
  }
}