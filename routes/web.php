<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\OkgController;
use App\Http\Controllers\Backend\EntryController;
// use App\Http\Controllers\Backend\AuthenticatedSessionController;
use App\Http\Middleware\Role;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [OkgController::class, 'Index'])->name('/');
Route::get('/about', [OkgController::class, 'About'])->name('about');
Route::get('/FrequentlyAskedQuestions', [OkgController::class, 'FAQ'])->name('faq');
Route::get('/TermsAndCondition', [OkgController::class, 'TNC'])->name('TNC');
Route::get('/PrivacyPolicy', [OkgController::class, 'PrivacyPolicy'])->name('privacy.policy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php'; 

//PROTECT ADMIN DASHBOARD
Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('admin/password', [AdminController::class, 'AdminPassword'])->name('admin.password');
    Route::post('admin/change/pass', [AdminController::class, 'AdminChangePass'])->name('admin.change.pass');
    Route::post('update/staff/status', [AdminController::class, 'UpdateStaffStatus'])->name('update.staff.status');

    Route::controller(EntryController::class)->group(function(){
        Route::get('all/Entries', 'allEntriesView')->name('all.Entries');

        Route::post('entry/Status', 'entryStatus')->name('entry.Status');

        Route::get('delete/all', 'DeleteAll')->name('delete.All');
    });



    // CATEGORIES ROUTES
// Route::controller(categoryController::class)->group(function(){
//     Route::get('all/Categories', 'categoryView')->name('all.Categories');
//     Route::get('add/Category', 'addCategoryView')->name('add.Category');
//     Route::Post('add/New/Category', 'addNewCategory')->name('add.New.Category');
//     Route::get('edit/Category/{id}', 'editCategoryView')->name('edit.Category');
//     Route::post('update/Category', 'UpdateCategory')->name('update.Category');
//     Route::get('delete/Category/{id}', 'DeleteCategory')->name('delete.Category');

// });
    // SUB CATEGORY
    // Route::get('all/Sub/categories', 'subCategoryView')->name('all.Sub.Categories');
    // Route::get('add/Sub/Category', 'addSubCategoryView')->name('add.Sub.Category');
    // Route::Post('add/New/Sub/Category', 'addNewSubCategory')->name('add.New.Sub.Category');
    // Route::get('edit/Sub/Category/{id}', 'editSubCategoryView')->name('edit.Sub.Category');
    // Route::post('update/Sub/Category', 'UpdateSubCategory')->name('update.Sub.Category');
    // Route::get('delete/Sub/Category/{id}', 'DeleteSubCategory')->name('delete.Sub.Category');

});

//END
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/become/staff', [AdminController::class, 'BecomestaffView'])->name('become.staff');
Route::post('/register/staff', [AdminController::class, 'Registerstaff'])->name('register.staff');


//PROTECT staff DASHBOARD
Route::middleware(['auth', 'role:staff'])->group(function(){
    Route::get('/staff/dashboard', [staffController::class, 'staffDashboard'])->name('staff.dashboard');
    Route::get('/staff/logout', [staffController::class, 'staffLogout'])->name('staff.logout');
    Route::get('staff/profile', [staffController::class, 'staffProfile'])->name('staff.profile');
    Route::post('staff/profile/store', [staffController::class, 'staffProfileStore'])->name('staff.profile.store');
    Route::get('staff/password', [staffController::class, 'staffPassword'])->name('staff.password');
    Route::post('staff/change/pass', [staffController::class, 'staffChangePass'])->name('staff.change.pass');

        // ENTRIES ROUTES
Route::controller(EntryController::class)->group(function(){
    Route::get('add/Entry', 'addEntryView')->name('add.Entry');
    Route::Post('add/New/Entry', 'addNewEntry')->name('add.New.Entry');
    Route::get('edit/Entry/{id}', 'editEntryView')->name('edit.Entry');
    Route::post('update/Entry', 'UpdateEntry')->name('update.Entry');
    Route::get('delete/Entry/{id}', 'DeleteEntry')->name('delete.Entry');

});
});
    Route::get('/staff/login', [staffController::class, 'staffLogin'])->name('staff.login');


