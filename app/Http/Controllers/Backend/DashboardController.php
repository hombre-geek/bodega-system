<?php



namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Http\Controllers\Controller;
use App\Models\Backend\Resource;

class DashboardController extends Controller
{
  
    public function index()
    {
        $usersTotal      = User::where('id','!=',1)->count();
        $categoriesTotal = Category::all()->count();
        $resourcesTotal  = Resource::all()->count();
        
        return view('backend.dashboard', compact( 'usersTotal', 'categoriesTotal', 'resourcesTotal' ) );
    }
}
