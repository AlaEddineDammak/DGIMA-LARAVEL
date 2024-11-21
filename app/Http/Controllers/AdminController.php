<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function AdminDashboard() {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.index',compact('profileData'));

    }


    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin\login');
    }

    public function AdminLogin ()
    {
        
        return view('admin.admin_login');
    }

    public function AdminProfile ()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view' , compact('profileData'));
    }

    public function AdminProfileStore (Request $request)
    {
        $id= Auth::user()->id;
        $data=User::find($id);
        $data->name = $request->name;
        $data->email =$request->email ;     
        $data->phone=$request->phone;    
        
       if ($request ->file('photo')){
        $file= $request->file('photo'); 
        @unlink(public_path('upload/admin_images/' . $data->photo));
        $filename= date('YmdHis'). $file ->getClientOriginalExtension() ;  
        $file->move(public_path('upload/admin_images'),$filename);
        $data['photo']=$filename ;
       }

       $data->save();

       $notification = array(
        'message' => 'Admin  Profile Updated Successfully',
        'alert-type' => 'success'
       );
       return Redirect()->back()->with($notification);
    }


    public function AdminChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password',compact('profileData'));
    }

    public function AdminUpdatePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'

        ]);

        if(!Hash::check($request->old_password, auth::user()->password)){
           $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
                );
               return back()->with($notification);  
        }
    $userId = auth()->user()->id;
    User::whereId($userId)->update(['password' => Hash::make($request->new_password)]);
    $notification = [
        'message' => 'Password Changed Successfully',  
        'alert-type' => 'success'
    ];

    // Utilisez la méthode with() pour transmettre la notification à la vue
    return back()->with($notification);
    }

}



