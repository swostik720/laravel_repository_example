<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryRepository->index();
        return view('all-category', compact('categories'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    public function create()
    {
        return view('add-category');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(Request $request)
    {
        $request = request()->validate(['title'=>'required']);

        $this->categoryRepository->store($request);
        return redirect('all-category');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(string $id)
    {
        $categories = $this->categoryRepository->edit($id);
        return view('edit-category', compact('categories'));

    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, string $id)
    {
        //$this->categoryRepository->update($data->all(),$id);
        $request = request()->validate(['title'=>'required']);

        $this->categoryRepository->update($request, $id);
        return redirect('all-category');


    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(string $id)
    {
        $this->categoryRepository->destroy($id);
        
        return redirect('all-category')->with('status',"deleted successfully");

    }
}
