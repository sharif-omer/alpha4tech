<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\postController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\aboutController;
use Illuminate\Support\Facades\Auth;

// Route For Both Language Ar , En
Route::get('lang/{locale}', function($locale) {
  if(!in_array($locale, ['en', 'ar'])) {
    abort(400, 'اللغة غير مدعومة');
  }
  session()->put('locale', $locale);

  // app()->setLocale($locale);
  return redirect()->back()->withHeaders([
    'Cache-conrol' => 'no-store, no-cache, must-revalidate'
  ]);
})->name('lang.switch');


Route::get('/', function () {
    return view('frontend/inedx');
});


Route::get('/dashboard', function () {
  $name = Auth::user()->name;
  return view('backend/index', compact('name'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Contact Us All Route
// Route::controller(ContactUsController::class)->group(function(){
//     Route::get('/Contact_us/index', 'index')->name('contact.us');
//     Route::GET('/Contact_us/create', 'create')->name('Contact_us.create');
//     Route::post('/Contact_us/update', 'store')->name('store.contactus');
//     Route::get('/Contact_us/destroy/{id}', 'destroy')->name('delete.contact');

//   });

  /* ======== Conatct Us Route ======== */
Route::resource('/dashboard/contact', ContactUsController::class);


Route::resource('team', OurTeamController::class);
// ->parameters(['our_team' => 'team']);

  // Our Team All Route
// Route::controller(OurTeamController::class)->group(function(){
//   Route::GET('/our_team/index', 'index')->name('our_team.index');
//   Route::GET('/our_team/create', 'create')->name('our_team.create');
//   Route::POST('/our_team', 'store')->name('our_team.store');
//   Route::GET('/our_team/show{id}', 'show')->name('our_team.show');
//   Route::GET('/our_team/edit/{id}', 'edit')->name('our_team.edit');
//   Route::PUT('/our_team/update', 'update')->name('our_team.update');
//   Route::get('/our_team/destroy/{id}', 'destroy')->name('our_team.destroy');
// });


 // Services All Route
 Route::controller(ServicesController::class)->group(function(){
  Route::GET('/services/index', 'index')->name('services.index');
  Route::GET('/services/create', 'create')->name('services.create');
  Route::POST('/services', 'store')->name('services.store');
  Route::GET('/services/show{id}', 'show')->name('services.show');
  Route::GET('/services/edit/{id}', 'edit')->name('services.edit');
  Route::PUT('/services/update', 'update')->name('services.update');
  Route::get('/services/destroy/{id}', 'destroy')->name('services.destroy');
});

  // Posts All Route
  Route::controller(postController::class)->group(function(){
    Route::GET('/posts/index', 'index')->name('post.index');
    Route::GET('/posts/create', 'create')->name('post.create');
    Route::POST('/posts', 'store')->name('post.store');
    Route::GET('/posts/show{id}', 'show')->name('post.show');
    Route::GET('/posts/edit/{id}', 'edit')->name('post.edit');
    Route::GET('/posts/update', 'update')->name('post.update');
    Route::get('/posts/destroy/{id}', 'destroy')->name('post.destroy');
  });

// Admin All Route
Route::middleware(['auth'])->group(function() {

    Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'profile')->name('admin.profile');
    Route::get('/edit/profile', 'Editprofile')->name('edite.profile');
    Route::post('/store/profile', 'storeprofile')->name('store.profile');
  
    Route::get('/change/password', 'changePassword')->name('change.password');
    Route::post('/update/password', 'updatePassword')->name('update.password');
  });
});
  
  // Home All Route
  Route::controller(HomeSliderController::class)->group(function(){
      Route::get('/home/slide', 'HomeSlider')->name('home.slide');
      Route::post('/update/slide', 'updateSlider')->name('update.slider');
    });
  
    // About Page All Route
  Route::controller(aboutController::class)->group(function(){
      Route::get('/about/page', 'aboutPage')->name('about.page');
      Route::post('/update/about', 'updateAbout')->name('update.about');
  
      Route::get('/about', 'homeAbout')->name('home.about');
      Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
  
      Route::post('/store/multi/image', 'storeMultuImage')->name('store.multi.image');
      Route::get('/all/multi/image', 'allMultuImage')->name('all.multi.image');
  
      Route::get('/edit/multi/image/{id}', 'EditMultuImage')->name('edit.multi.image');
  
      Route::post('/update/multi/image', 'UpdateMultiimage')->name('update.multi.image');
      Route::get('/delete/multi/image/{id}', 'DeleteMultuImage')->name('delete.multi.image');
  
    });

    require __DIR__.'/auth.php';
