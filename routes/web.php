<?php

use App\Models\Payment;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MemberListController;

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

Route::get('/', function () {
    return view('user.index');
});

Route::get('index', function () {
    return view('user.index');
})->name('index');

Route::get('about-us', function () {
    return view('user.about_us.aboutus');
})->name('aboutus');

Route::get('activities', function () {
    return view('user.activities.activities');
})->name('activities');

Route::get('inneractivities', function () {
    return view('user.inneractivities.inneractivities');
})->name('inneractivities');

Route::get('commitee', [MemberListController::class, 'index'])->name('commitee');

Route::get('executive', function () {
    return view('user.commitee.executive');
})->name('executive');

Route::get('event', function () {
    return view('user.event.event');
})->name('event');

Route::get('gallery', function () {
    return view('user.gallery.gallery');
})->name('gallery');

Route::get('pay-membership', function () {
    return view('user.payment.payment');
})->name('pay-membership');

Route::get('become-a-member', function () {
    return view('user.becomeamember.becomeamember');
})->name('become-a-member');

Route::get('contactus', function () {
    return view('user.contactus.contactus');
})->name('contactus');

Route::get('notice', function () {
    return view('user.notice.notice');
})->name('notice');

Route::get('members', [MembersController::class, 'members'])->name('members');

// Route::get('notice', function () {
//     return view('user.notice.notice');
// })->name('notice');

// Route::get('admin', function () {
//     return view('admin.home');
// })->name('admin');

Route::resource('addmember', MembersController::class);

Route::resource('payment', PaymentController::class);
