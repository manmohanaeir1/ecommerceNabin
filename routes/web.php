<?php



use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseCurriculumController;
use App\Http\Controllers\DownloadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Route::get('/wlc', function () {
    return view('welcome');
});

Route::group(['middleware' => 'HtmlMinifier'], function () {
    Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');
    Route::get('about-us', [FrontendController::class, 'about'])->name('frontend.about');
    Route::get('shop', [FrontendController::class, 'shop'])->name('frontend.shop');
    Route::get('contact-us', [FrontendController::class, 'contact'])->name('frontend.contact'); 
});




//Category

Route::group(['prefix' => "admin", 'middleware'=>'auth',], function(){

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');    
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/add', [CategoryController::class, 'add'])->name('category.add');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/table', [CategoryController::class, 'dataTable'])->name('category.table');
Route::get('category/show/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

//Tag

Route::get('tag', [TagController::class, 'index'])->name('tag.index');
Route::get('tag/add', [TagController::class, 'create'])->name('tag.add');
Route::post('tag/store', [TagController::class, 'store'])->name('tag.store');
Route::get('tag/show/{tag}', [TagController::class, 'show'])->name('tag.show');
Route::get('tag/edit/{id}', [TagController::class, 'edit'])->name('tag.edit');
Route::post('tag/update/{id}', [TagController::class, 'update'])->name('tag.update');
Route::get('tag/delete/{id}', [TagController::class, 'destroy'])->name('tag.delete');


//Post

Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::get('post/add', [PostController::class, 'create'])->name('post.add');
Route::post('post/store', [PostController::class, 'store'])->name('post.store');
Route::get('post/show/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('post/update/{id}', [PostController::class, 'update'])->name('post.update');
Route::get('post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');

//Course

Route::get('course', [CourseController::class, 'index'])->name('course.index');
Route::get('course/add', [CourseController::class, 'create'])->name('course.add');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/show/{course}', [CourseController::class, 'show'])->name('course.show');
Route::get('course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::post('course/update/{id}', [CourseController::class, 'update'])->name('course.update');
Route::delete('course/delete/{id}', [CourseController::class, 'destroy'])->name('course.delete');

// for productcategory using resource
Route::resource('productcategory', ProductCategoryController::class);

// for product using resource
Route::resource('product', ProductController::class);


// for Photo using resource
    Route::resource('photo', PhotoController::class);  
    
    // for career using resource
    // Route::resource('career', CareerController::class);

// for contact resource
Route::resource('contact', ContactController::class);

     
    
    


    
});





// for frontend blog post /news 

Route::get('blog', [FrontendController::class, 'blog'])->name('pages.blog');
// for download page
Route::get('download', [FrontendController::class, 'download'])->name('pages.download');




require __DIR__.'/auth.php';
