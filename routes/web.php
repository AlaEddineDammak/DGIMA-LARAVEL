<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\Backend\ActualityController;
use App\Http\Controllers\Backend\UsersController;
use App\Models\User;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $result = DB::table('actuality')->where('id', '<', 7)->get();


    return view('welcome' , ['actuality' => $result]);

    
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/teachers', function () {
    $professors = DB::table('users')->where('role', 'prof')->get();
    return view('teachers', ['professors' => $professors]);
});


Route::get('/actualities', function () {

    $result = DB::table('actuality')->get();

    return view('actualities' , ['actuality' => $result]);
});

Route::get('/cursus', function () {
    return view('cursus');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth' , 'verified'])->name('dashboard');



Route::middleware('auth')->group (function () {
Route::get('/profile', [ProfileController::class, 'edit'])-> name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])
->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'
])->name('profile.destroy');
});

require __DIR__.'/auth.php';


    //Admin Group Middleware

Route::middleware(["auth" , "role:admin"])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])-> name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])-> name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])-> name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])-> name('admin.profile.store');
    
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])-> name('admin.change.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])-> name('admin.update.password');
    
    
});     


    //Prof Group Middleware
Route::middleware(["auth" , "role:prof"])->group(function(){

    Route::get('/prof/dashboard', [ProfController::class, 'ProfDashboard'])-> name('prof.dashboard');

    
}); 

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])-> name('admin.login');




   //Admin Group Middleware

   Route::middleware(["auth" , "role:admin"])->group(function(){

    
    Route::controller(ActualityController::class)->group(function () {
        Route::get('/all/actualities', 'AllActualities')-> name('all.actualities');
        Route::get('/add/actualities', 'AddActualities')-> name('add.actualities');
        Route::post('/store/actualities', 'StoreActualities')-> name('store.actualities');
        Route::get('/edit/actualities/{id}', 'EditActualities')-> name('edit.actualities');
        Route::post('/update/actualities', 'UpdateActualities')-> name('update.actualities');
        Route::get('/delete/actualities/{id}', 'DeleteActualities')-> name('delete.actualities');
    
}); 
}); 


Route::middleware(["auth" , "role:admin"])->group(function(){

    
    Route::controller(UsersController::class)->group(function () {
        Route::get('/all/users', 'AllUsers')-> name('all.users');
        Route::get('/add/users', 'AddUsers')-> name('add.users');
        Route::post('/store/users', 'StoreUsers')-> name('store.users');
        Route::get('/edit/users/{id}', 'EditUsers')-> name('edit.users');
        Route::post('/update/users', 'UpdateUsers')-> name('update.users');
        Route::get('/delete/users/{id}', 'DeleteUsers')-> name('delete.users');
    
}); 
});  