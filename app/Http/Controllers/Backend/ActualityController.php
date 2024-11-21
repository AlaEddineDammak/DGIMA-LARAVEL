<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Models\Actuality;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ActualityController extends Controller
{
    public function AllActualities(){
        $actualities= Actuality::latest()->get();
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('backend.actualities.all_actualities',compact('actualities','profileData'));
    }


    public function AddActualities(){
        $actualities= Actuality::latest()->get();
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('backend.actualities.add_actualities',compact('profileData'));
    }

    public function StoreActualities(Request $request)
{
    $request->validate([
        'title' => 'required|max:200',
        'type' => 'required',
        'description' => 'required',
        'date' => 'required',
        'image' => 'required|image' 
        // Assurez-vous que c'est une image
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/actualities'), $imageName);
    } else {
        // Gérer le cas où aucune image n'est téléchargée
        return redirect()->back()->with('error', 'No image uploaded.');
    }

    Actuality::create([
        'title' => $request->title, 
        'type' => $request->type,
        'description' => $request->description,
        'date' => $request->date,
        'image' => 'images/actualities/'. $imageName,
    ]);

    $notification = [
        'message' => 'Actuality Created Successfully',
        'alert-type' => 'success'
    ];

    return redirect(route('all.actualities'))->with($notification);
}


    public function EditActualities($id){
        $actualities = Actuality::findOrFail($id);
        $id2 = Auth::user()->id;
        $profileData = User::find($id2);
        return view('backend.actualities.edit_actualities', compact('actualities','profileData'));
    }

    public function UpdateActualities(Request $request,)
{
    $request->validate([
        'title' => 'required|max:200',
        'type' => 'required',
        'description' => 'required',
        'date' => 'required',
        'image' => 'image' // Facultatif : Assurez-vous que c'est une image
    ]);
    $pid=$request->id;
    $actuality = Actuality::findOrFail($pid);

    // Mettre à jour les champs
    $actuality->title = $request->title;
    $actuality->type = $request->type;
    $actuality->description = $request->description;
    $actuality->date = $request->date;

    // Mettre à jour l'image si elle est fournie
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/actualities'), $imageName);
        $actuality->image = 'images/actualities/'. $imageName;
    }

    $actuality->save();

    // Redirection avec notification
    $notification = [
        'message' => 'Actuality Updated Successfully',
        'alert-type' => 'success'
    ];

    return redirect(route('all.actualities'))->with($notification);
}

    public function DeleteActualities($id){
        Actuality::findOrFail($id)->delete();

        $notification = [
            'message' => 'Actuality Deleted Successfully',
            'alert-type' => 'success'
        ];
    
        return redirect()->back()->with($notification);
    }

    
}
