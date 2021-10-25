<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Backend\Resource;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AssigmentStoreRequest;
use App\Models\Backend\Assigment;
use Carbon\Carbon;
use PhpParser\Node\Expr\Assign;

class AssigmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userResources = User::with('resources')->orderBy('created_at')->get();

        return view('backend.operation.assigments.index', compact('userResources') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user      = new User();
        $users     = User::where('id','!=',1)->orderBy('created_at', 'DESC')->get();
        $resources = Resource::where('user_id', NULL)->orderBy('created_at', 'DESC')->get();

        return view('backend.operation.assigments.create', compact( 'user', 'users', 'resources' ) );
    }

   
    public function store(AssigmentStoreRequest $request)
    {
       if ($request->resourcesArray) {
            $resourcesIds = array_unique($request->resourcesArray);                 
            foreach ($resourcesIds as $id) {
                $resource = Resource::findOrFail($id);                
                $resource->update([
                                    'user_id' => $request->user_id,
                                    'note'    => $request->note,
                                    'asigned_at' =>  Carbon::now()
                                 ]);
            }
       }

       return redirect()->route('assigments.index')->with([
           'type' => 'success',
           'msg' => ' En la creación de la Asigación.',
       ]);
    }

   

    
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
