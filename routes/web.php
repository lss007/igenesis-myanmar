<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminPasswordController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CategoryController;

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CustomersConstroller;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ManageCvController;
use App\Http\Controllers\Backend\ManageTeamController;
use App\Http\Controllers\Backend\ServicesConstoller;
use App\Http\Controllers\Backend\SocialController;

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
    // our_people
    Route::get('/our-people', 'ourPeople')->name('front.our.people');
    // our_people
    Route::get('/quality-health-safety', 'qualityHealth')->name('front.quality.health');    
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

    Route::get('/join-us', 'joinUs')->name('front.view.joinUs');
    //submit resume 
    Route::post('/submit-resume', 'submitResume')->name('front.submitResume');

    


    

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
    Route::get('admin/forget-password', [AdminPasswordController::class, 'getEmail'])->name('reset_admin_password');
    Route::post('admin/forget-password', [AdminPasswordController::class, 'postEmail'])->name('send_admin_reset_link');
    Route::get('/admin-reset-password/{token}', [AdminPasswordController::class, 'getPassword'])->name('admin_getPassword');
    Route::post('/admin-reset-password', [AdminPasswordController::class, 'updatePassword'])->name('admin_updatePassword');
  
});

Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('backend.index');
    })->name('dashboard')->middleware('auth:admin');
});

    Route::get('logout',[AdminController::class,'destroy'])->name('admin.logout')->middleware('auth:admin');
    Route::get('/logout/user', [AdminController::class,'Logout'])->name('user.logout');
    // change password 
    Route::get('change/admin-password',[AdminController::class,'admin_change_password'])->name('admin.change.password');
    // update.admin.password
    Route::post('update/admin-password',[AdminController::class,'admin_update_password'])->name('update.admin.password');

//  ============================= Start slider routes =======================
Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
Route::prefix('admin')->group(function(){
    // Manage CV controoler 
    Route::controller(ManageCvController::class)->group(function () {
    Route::get('/manage-resume','manageResume')->name('admin.manageResume');
    Route::get('/delete-resume/{id}','deleteResume')->name('admin.deleteResume');

    });

    // ProfileController
Route::controller(ProfileController::class)->group(function () {
    Route::get('/edit-profile','editAdminProfile')->name('admin.editAdminProfile');
    Route::post('/update-profile','updateAdminProfile')->name('admin.updateAdminProfile');

    });

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
        // admin delete contact
        Route::get('/delete-messages/{id}','deleteMessages')->name('delete.contact.messages');
        // view contact address
        Route::get('/view-address','view_address')->name('view_contact_address');

        Route::get('/add-address','add_address')->name('add_contact_address');

        Route::post('/store-address','store_address')->name('store_contact_address');
        // contact address active
        Route::get('/active/{id}','address_active')->name('contact_address_active'); 
        // contact address inactive
        Route::get('/inactive/{id}','address_inactive')->name('contact_address_inactive');
        // edit address
        Route::get('/edit/{id}','address_edit')->name('contact_address_edit');
        Route::post('/update/{id}','update_address')->name('update_contact_address');

        Route::get('/delete/{id}','address_delete')->name('contact_address_delete');
 
});

Route::DELETE('/delete_all-messages', [ContactController::class, 'allmessagesDelete'])->name('all.delete.messages');
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


    Route::prefix('our-team')->group(function(){
        Route::controller(ManageTeamController::class)->group(function () {
            Route::get('/view','view_team')->name('view_our_team');
            Route::get('/add','add_team')->name('add_our_team');
            Route::post('/store','store_team')->name('store_our_team');
            Route::get('/active/{id}','team_active')->name('our_team_active'); 
            Route::get('/inactive/{id}','team_inactive')->name('our_team_inactive');
            Route::get('/delete/{id}','team_delete')->name('our_team_delete');
            Route::get('/edit/{id}','team_edit')->name('our_team_edit');
            Route::post('/update/{id}','update_team')->name('update_our_team');

        });
    });

    Route::prefix('our-services')->group(function(){
        Route::controller(ServicesConstoller::class)->group(function () {
            Route::get('/view','view_services')->name('view_our_services');
            Route::get('/add','add_services')->name('add_our_services');
            Route::post('/store','store_services')->name('store_our_services');
            Route::get('/active/{id}','services_active')->name('our_services_active'); 
            Route::get('/inactive/{id}','services_inactive')->name('our_services_inactive');
            Route::get('/delete/{id}','services_delete')->name('our_services_delete');
            Route::get('/edit/{id}','services_edit')->name('our_services_edit');
            Route::post('/update/{id}','update_services')->name('update_our_services');

            
        });
    });
    // getcustomer

    Route::prefix('our-customer')->group(function(){
        Route::controller(CustomersConstroller::class)->group(function () {
            Route::get('/view','view_customer')->name('view_our_customer');
            Route::get('/add','add_customer')->name('add_our_customer');
            Route::post('/store','store_customers')->name('store_our_customers');
            Route::get('/active/{id}','active_customers')->name('our_active_customers'); 
            Route::get('/inactive/{id}','inactive_customers')->name('our_inactive_customers');
            Route::get('/delete/{id}','delete_customers')->name('delete_our_customers');
            Route::get('/edit/{id}','edit_customers')->name('edit_our_customers');
            Route::post('/update/{id}','update_customers')->name('update_our_customers');
            Route::post('post-sortable','update_order')->name('updateArticle');
        });
        Route::DELETE('/alldelete', [CustomersConstroller::class, 'allDelete'])->name('all.delete');

    });

    

    Route::prefix('Mange-sociallink')->group(function(){
        Route::controller(SocialController::class)->group(function () {
            Route::get('/view','view_social')->name('view_social_link');
            Route::post('/store','store_link')->name('store_social_link');
            Route::get('/active/{id}','link_active')->name('link_active'); 
            Route::get('/inactive/{id}','link_inactive')->name('link_inactive');
            Route::get('/delete/{id}','delete_link')->name('delete_social_link');
            Route::get('/edit/{id}','edit_link')->name('edit_social_link');
            Route::post('/update/{id}','update_link')->name('update_social_link');
        });

    });


    // industries 
    Route::prefix('Current-industries')->group(function(){
        Route::controller(ManageCvController::class)->group(function () {
            Route::get('/view','view_industries')->name('view_current_industries');
            Route::post('/store','store_industries')->name('store_current_industries');

            Route::get('/approved/{id}','active')->name('approved.industries');
            // approvedpost  
            Route::get('/rejected/{id}','inactive')->name('rejected.industries');
            Route::get('/delete/{id}','delete_industries')->name('delete_industries');
            Route::get('/edit/{id}','update_industries')->name('update_current_industries');
            // Route::post('/update/{id}','update_link')->name('update_social_link');
        });

    });
// ========== admin prefix ===========
    });
// ==========admin prefix ===========
});
//  ============================= CategoryController =======================




