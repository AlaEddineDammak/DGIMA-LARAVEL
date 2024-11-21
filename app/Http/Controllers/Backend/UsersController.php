<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Models\Actuality;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UsersController extends Controller
{
    public function AllUsers(){
        $users= User::latest()->get();
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('backend.users.all_users',compact('users','profileData'));
    }


    public function AddUsers(){
        $users= User::latest()->get();
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('backend.users.add_users',compact('profileData'));
    }


    public function StoreUsers(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'status'=>'required',
            'photo' => 'required|image',
            
            // Assurez-vous que c'est une image
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('upload/users_images/'), $photoName);
        } else {
            // Gérer le cas où aucune image n'est téléchargée
            return redirect()->back()->with('error', 'No image uploaded.');
        }

        User::create([
            'name' => $request->name, 
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'status' => $request->status,
            'photo' => ''. $photoName,
            'password' => Hash::make('111'),
        ]);

        $notification = [
            'message' => 'User Created Successfully',
            'alert-type' => 'success'
        ];

        return redirect(route('all.users'))->with($notification);
    }
    
    public function EditUsers($id){
        $users = User::findOrFail($id);
        $id2 = Auth::user()->id;
        $profileData = User::find($id2);
        return view('backend.users.edit_users', compact('users','profileData'));
    }

    public function UpdateUsers(Request $request)
{
    $request->validate([
        'name' => 'required|max:200',
        'email' => 'required',
        'phone' => 'required',
        'role' => 'required',
        'status' => 'required',
        'new_password' => 'confirmed',
    ]);

    $pid = $request->id;
    $user = User::findOrFail($pid);

    // Mettre à jour les champs
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->role = $request->role;
    $user->status = $request->status;

    // Mettre à jour l'image si elle est fournie
    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/users_images/'), $imageName);
        $user->photo = ''. $imageName;
    }

    // Mettre à jour le mot de passe s'il est fourni
    if ($request->filled('new_password')) {
        $user->password = Hash::make($request->new_password);
    }

    $user->save();

    // Redirection avec notification
    $notification = [
        'message' => 'User Updated Successfully',
        'alert-type' => 'success'
    ];

    return redirect(route('all.users'))->with($notification);
}

public function DeleteUsers($id){
    User::findOrFail($id)->delete();

    $notification = [
        'message' => 'User Deleted Successfully',
        'alert-type' => 'success'
    ];

    return redirect()->back()->with($notification);
}




}




