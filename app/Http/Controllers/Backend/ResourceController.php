<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Backend\Resource;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ResourceStoreRequest;
use App\Http\Requests\Backend\ResourceUpdateRequest;
use App\Models\Backend\Category;

class ResourceController extends Controller
{
    public function index()
    {
       

        $CategoryResources = Category::with('resources')->orderBy('created_at')->get();

        return view('backend.resource.index', compact('CategoryResources'));
        
    }

   
    public function create()
    {
        $categories = Category::all()->sortByDesc('name');
        $resource = new Resource();
       
        return view('backend.resource.create', compact('resource', 'categories'));
        
    }

    public function store(ResourceStoreRequest $request)
    {
        $valuesToSave = $request->validated(); 

        Resource::create($valuesToSave);

        return redirect()->route('resources.index')->with([
            'type' => 'success',
            'msg' => ' En la Creación de la Nuevo Recurso.',
        ]);
    }
   
    public function edit(Resource $resource,  Category $category)
    {
        

        $categories = Category::all()->sortByDesc('name');
        
        return view('backend.resource.edit', compact( 'resource','categories', 'category' ) );
    }

   
    public function update(Resource $resource, ResourceUpdateRequest $request)
    {
        $valuesToSave = $request->validated(); 

        $resource->update($valuesToSave);

        return redirect()->route('resources.index')->with([
            'type' => 'success',
            'msg' => ' En la Edición del Recurso.',
        ]);

    }

   
    public function destroy(Resource $resource)
    {
        $resource->delete();
        return redirect()->route('recursos.index')->with([
            'type' => 'success',
            'msg' => ' En la Eliminación del Recurso.',
        ]);
    }
}
