<?php


namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CategoryStoreRequest;
use App\Http\Requests\Backend\CategoryUpdateRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all()->sortByDesc('created_at');
        return view('backend.category.index', compact('categories'));
    }

   
    public function create()
    {
        $category = new Category();
       
        return view('backend.category.create', compact('category'));
        
    }

    public function store(CategoryStoreRequest $request)
    {
        $valuesToSave = $request->validated(); 

        Category::create($valuesToSave);

        return redirect()->route('categories.index')->with([
            'type' => 'success',
            'msg' => ' En la Creación de la Nueva Categoría.',
        ]);
    }
   
    public function edit(Category $category)
    {
        return view('backend.category.edit', compact('category') );
    }

   
    public function update(Category $category, CategoryUpdateRequest $request)
    {
        $valuesToSave = $request->validated(); 

        $category->update($valuesToSave);

        return redirect()->route('categories.index')->with([
            'type' => 'success',
            'msg' => ' En la Edición de la Categoría.',
        ]);

    }

   
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with([
            'type' => 'success',
            'msg' => ' En la Eliminación dela Categoría.',
        ]);
    }
}
