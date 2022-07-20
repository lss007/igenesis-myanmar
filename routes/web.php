<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Backend\BlogController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'homepage')->name('front.homepage');
    // about_us
    Route::get('/about-us', 'aboutUs')->name('front.about.us');
    // services 
    Route::get('/services', 'services')->name('front.services');
    // whatarewe
    Route::get('/whatare', 'whatare')->name('front.whatare');
    // lifeatGenesis
    Route::get('/lifeatgenesis', 'lifeatGenesis')->name('front.lifeat.Genesis');
    // contact
    Route::get('/contact', 'contactUs')->name('front.contact');
    // storecontact
    Route::post('/store-contact', 'storecontact')->name('front.storecontact');
// blog page 
    Route::get('/view-blog', 'viewBlog')->name('front.view.blogs');

    

});
Route::middleware([
    'auth:sanctum',config('jetstream.auth_session'), 'verified'
])->group(function () {
    
    Route::get('/dashboard', function () {
        // return view('dashboard');
        return view('frontend.dashboard.index');
    })->name('dashboard');
    
});



// =========================

    Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('backend.index');
    })->name('dashboard')->middleware('auth:admin');
});

Route::get('logout',[AdminController::class,'destroy'])->name('admin.logout')->middleware('auth:admin');
Route::get('/logout/user', [AdminController::class,'Logout'])->name('user.logout');
//  ============================= Start slider routes =======================
Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
Route::prefix('admin')->group(function(){
Route::controller(SliderController::class)->group(function () {
Route::get('/viewsliders','viewslider')->name('admin.homeslider');
// Manage slider 
Route::get('/addsliders','add_slider')->name('admin.addslider');
// store slider 
Route::post('/store-slider','store_slider')->name('admin.store.slider');
// edit.slider
Route::get('/edit-slider/{id}','edit_slider')->name('admin.edit.slider');
// update slider 
Route::post('/update-slider/{id}','update_frontend_slider')->name('admin.update.slider');
// inactive slider 
Route::get('/inactive-slider/{id}','inactive_frontend_slider')->name('admin.inactive.slider');
// Active slider 
Route::get('/active-slider/{id}','active_frontend_slider')->name('admin.active.slider');
//delete slider 
Route::get('/delete-slider/{id}','delete_frontend_slider')->name('admin.delete.slider');

});
//  ============================= end slider routes =======================
//  ============================= endcontact =======================
Route::prefix('contact')->group(function(){
    Route::controller(ContactController::class)->group(function () {
// contact message 
Route::get('/messages','contactMessages')->name('contact.messages');
//view message 
Route::get('/view-messages/{id}','viewMessages')->name('view.contact.messages');

// admin.delete.contact
Route::get('/delete-messages/{id}','deleteMessages')->name('delete.contact.messages');

});
});

//===================== Blog post by admin routes start =====================
Route::prefix('blog/')->group(function(){
    Route::controller(BlogController::class)->group(function () {
    Route::get('/add','addPost')->name('admin.blogpost');
    // my blogs 
    Route::get('/myblogs','viewmyblogs')->name('admin.view.myblog');
    // add blog post 
    Route::post('/publish','publishPost')->name('user.publish.post');
    // edit blog 
    Route::get('/edit/{id}','editPost')->name('user.edit.post');
    //update blog post 
    Route::post('/update/{id}','updatepost')->name('user.update.post');
    // delete post 
    Route::get('/delete/{id}','deletepost')->name('user.delete.post');   
});
});
//===================== Blog post by admin routes start  =====================

//  ============================= end contact=======================

//  ============================= CategoryController =======================
Route::prefix('category')->group(function(){
Route::controller(CategoryController::class)->group(function () {
Route::get('/view','viewCategory')->name('view.blog.category');
// add category 
Route::post('/add','addCategory')->name('add.blog.category');
Route::get('/edit/{id}','editCategory')->name('edit.blog.category');
// update 
Route::post('/update/{id}','updateCategory')->name('update.blog.category');
//Delete category 
Route::get('/delete/{id}','deleteCategory')->name('delete.blog.category');
// approvedpost  
Route::get('/approved/{id}','approvedpost')->name('user.approved.post');
// approvedpost  
Route::get('/rejected/{id}','rejectedpost')->name('user.rejected.post');

Route::get('/deleteblog/{id}','removeblog')->name('user.remove.blog');



    });
    });



// ========== admin prefix ===========
    });
// ==========admin prefix ===========
});
//  ============================= CategoryController =======================

 
