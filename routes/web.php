<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\adminDashboard\adminDashboard;
use App\Livewire\UserDashboard\UserDashboard;
use App\Livewire\UserMedicalConsultationForm\UserMedicalConsultationForm;
use App\Livewire\UserMedicalExaminationForm\UserMedicalExaminationForm;
use App\Livewire\UserDentalConsultationForm\UserDentalConsultationForm;
use App\Livewire\MedicalDispensedForm\MedicalDispensedForm;
use App\Livewire\Inventory\Inventory;
use App\Livewire\Staff\Staff;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('authentication.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['middleware'=>['role:admin|staff', 'auth']],function(){
    Route::get('/adminDashboard', adminDashboard::class)->name('admin.dashboard');
    Route::get('/inventory', Inventory::class)->name('admin.inventory');
    
});
Route::group(['middleware'=>['role:admin', 'auth']],function(){
    Route::get('/staff', Staff::class)->name('admin.staff');   
});

Route::group(['middleware'=>['role:admin|user', 'auth']],function(){
    Route::get('/download/MCF', [FileController::class, 'downloadMCF'])->name('fileMCF.download');
    Route::get('/download/MEF', [FileController::class, 'downloadMEF'])->name('fileMEF.download');
    
});


Route::group(['middleware'=>['role:user', 'auth']],function(){
    Route::get('/userDashboard', UserDashboard::class)->name('user.dashboard');
    Route::get('/userMCF', UserMedicalConsultationForm::class)->name('user.MCF');
    Route::get('/userMEF', UserMedicalExaminationForm::class)->name('user.MEF');
    Route::get('/userDCF', UserDentalConsultationForm::class)->name('user.DCF');
    Route::get('/userMDF', MedicalDispensedForm::class)->name('user.MDF');
    
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware'=>['role:user', 'auth']],function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
