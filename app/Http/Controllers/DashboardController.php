<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function viewDashboard(Request $request)
    {
        $user = $request->user();
        $role = $user->roles()->first();
        $links = [];
        if ($role->name == 'admin') {
            $links[] = ['name' => 'Add Services','icon'=>'fe fe-plus', 'url' => route('add.services')];
            $links[] = ['name' => 'Update Services','icon'=>'fe fe-edit', 'url' => route('update.services')];
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
            $links[] = ['name' => 'Delete Services','icon'=>'fe fe-trash', 'url' => route('delete.services')];
        } elseif ($role->name == 'worker') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        } elseif ($role->name == 'client') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        }
        return view('dashboard', compact('links'));
    }
    public function addServices(Request $request)
    {
        $user = $request->user();
        $role = $user->roles()->first();
        $links = [];
        if ($role->name == 'admin') {
            $links[] = ['name' => 'Add Services','icon'=>'fe fe-plus', 'url' => route('add.services')];
            $links[] = ['name' => 'Update Services','icon'=>'fe fe-edit', 'url' => route('update.services')];
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
            $links[] = ['name' => 'Delete Services','icon'=>'fe fe-trash', 'url' => route('delete.services')];
        } elseif ($role->name == 'worker') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        } elseif ($role->name == 'client') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        }
        
        return view('services.AddServices', compact('links'));
    }
    public function updateServices(Request $request)
    {
        $user = $request->user();
        $role = $user->roles()->first();
        $links = [];
        if ($role->name == 'admin') {
            $links[] = ['name' => 'Add Services','icon'=>'fe fe-plus', 'url' => route('add.services')];
            $links[] = ['name' => 'Update Services','icon'=>'fe fe-edit', 'url' => route('update.services')];
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
            $links[] = ['name' => 'Delete Services','icon'=>'fe fe-trash', 'url' => route('delete.services')];
        } elseif ($role->name == 'worker') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        } elseif ($role->name == 'client') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        }
        $services = services::All();
        return view('services.UpdateServices', compact('links'),compact('services'));
    }
    public function viewServices(Request $request)
    {
        $user = $request->user();
        $role = $user->roles()->first();
        $links = [];
        if ($role->name == 'admin') {
            $links[] = ['name' => 'Add Services','icon'=>'fe fe-plus', 'url' => route('add.services')];
            $links[] = ['name' => 'Update Services','icon'=>'fe fe-edit', 'url' => route('update.services')];
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
            $links[] = ['name' => 'Delete Services','icon'=>'fe fe-trash', 'url' => route('delete.services')];
        } elseif ($role->name == 'worker') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        } elseif ($role->name == 'client') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        }
        $services = services::All();
        return view('services.ViewServices', compact('links'),compact('services'));
    }
    public function deleteServices(Request $request)
    {
        $user = $request->user();
        $role = $user->roles()->first();
        $links = [];
        if ($role->name == 'admin') {
            $links[] = ['name' => 'Add Services','icon'=>'fe fe-plus', 'url' => route('add.services')];
            $links[] = ['name' => 'Update Services','icon'=>'fe fe-edit', 'url' => route('update.services')];
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
            $links[] = ['name' => 'Delete Services','icon'=>'fe fe-trash', 'url' => route('delete.services')];
        } elseif ($role->name == 'worker') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        } elseif ($role->name == 'client') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        }
        $services = services::All();
        return view('services.DeleteServices', compact('links'),compact('services'));
    }
    public function edit(Request $request , $id){
        $user = $request->user();
        $role = $user->roles()->first();
        $links = [];
        if ($role->name == 'admin') {
            $links[] = ['name' => 'Add Services','icon'=>'fe fe-plus', 'url' => route('add.services')];
            $links[] = ['name' => 'Update Services','icon'=>'fe fe-edit', 'url' => route('update.services')];
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
            $links[] = ['name' => 'Delete Services','icon'=>'fe fe-trash', 'url' => route('delete.services')];
        } elseif ($role->name == 'worker') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        } elseif ($role->name == 'client') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
        }
        $services = services::findOrFail($id);
        return view('services.EditService', compact('links'),['services'=>$services]);
      }
      public function store(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'about' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new instance of the Service model
        $service = new Services();
        // Assig the validated data to the model instance
        $service->service_name = $request->input('name');
        $service->service_detail= $request->input('about');
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext;
        $image->move(public_path('styles/img/services'),$imageName);
        $service->service_img =$imageName;

        // Save the model instance to the database
        $service->save();

        // Redirect to a success page or display a success message
        return redirect(route('view.services'))->with('success',"service added successfully.");
    }

public function storeupdate(Request $request,$id)
{
    $service = services::findOrFail($id);
    // Validate the form data
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'about' => 'required|string|max:255',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    
    // Check if validation fails
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    
    // Assig the validated data to the model instance
    $service->service_name = $request->input('name');
    $service->service_detail= $request->input('about');
   

    // Save the model instance to the database
    $service->save();
    if( $request->file('image') !=""){
        File::delete(public_path('styles/img/services').$service->service_img);
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext;
        $image->move(public_path('styles/img/services'),$imageName);
        $service->service_img =$imageName;
        $service->save();
    }

    // Redirect to a success page or display a success message
    return redirect(route('update.services'))->with('success',"service updated successfully.");
}
public function destroy($id)
{
    $service = services::findOrFail($id);
    File::delete(public_path('styles/img/services').$service->service_img);
    $service->delete();
    return redirect(route('delete.services'))->with('success',"service deleted successfully.");

}
}















