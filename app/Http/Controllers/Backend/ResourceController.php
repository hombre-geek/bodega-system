<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Models\Backend\Resource;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ResourceStoreRequest;
use App\Http\Requests\Backend\ResourceUpdateRequest;

class ResourceController extends Controller
{
    public function index()
    {
        $CategoryResources = Category::with('resources')->orderBy('created_at')->get();

        return view('backend.resource.index', compact('CategoryResources'));
        
    }

   
    public function create()
    {
        $users = User::where('id','!=',1)->orderBy('created_at', 'DESC')->get();
        $categories = Category::all()->sortByDesc('name');
        $resource = new Resource();
       
        return view( 'backend.resource.create', compact( 'resource', 'categories', 'users' ) );
        
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
        $users = User::where('id','!=',1)->orderBy('created_at', 'DESC')->get();

        
        return view('backend.resource.edit', compact( 'resource','category','categories', 'users' ) );
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
