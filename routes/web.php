<?php

use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtwallController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrameAssetsController;
use App\Http\Controllers\FramingController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PrintingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreSessionController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('auth/register', [UserController::class, 'create']);
Route::post('auth/register', [UserController::class, 'store'])->name('register-user');

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

//Admin
Route::get('login-form', [AdminController::class, 'login_form'])->name('admin.login.form');
Route::post('login-functionality', [AdminController::class, 'login'])->name('login.functionality');
Route::group(['middleware' => 'admin'], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/update-password', [AdminController::class, 'updatePassword'])->name('update-password');
    Route::post('check-current-password', [AdminController::class, 'checkCurrentPassword'])->name('checkCurrentPassword');
    Route::get('/view_category', [AdminController::class, 'view_category'])->name('view_category');
    Route::get('logout', [AdminController::class, 'logout'])->name('logout');
});

Route::prefix('admin/categories')->controller(CategoryController::class)->group(function () {
    Route::get('/', 'index')->name('categories.index');
    Route::get('/add', 'AddCategory')->name('categories.add');
    Route::post('/', 'StoreCategory')->name('categories.store');
    Route::get('/edit/{category}', 'EditCategory')->name('categories.edit');
    Route::put('/update/{category}', 'UpdateCategory')->name('categories.update');
    Route::get('/delete/{category}', 'DeleteCategory')->name('categories.delete');
});

Route::get('/admin/all-frame-assets', [FrameAssetsController::class, 'Index'])->name('allframeassets');

Route::controller(ContactController::class)->group(function () {
    Route::get('contact', [ContactController::class, 'contact'])->name('contact');
    Route::post('store-contact', [ContactController::class, 'StoreContact'])->name('contacts.store');
    Route::get('admin/all-contact', [ContactController::class, 'Index'])->name('allcontacts');
    Route::get('/admin/delete-contact/{id}', [ContactController::class, 'DeleteContact'])->name('deletecontact');
});

Route::controller(SubCategoryController::class)->group(function () {
    Route::get('admin/all-subcategory', [SubCategoryController::class, 'Index'])->name('allsubcategory');
    Route::get('admin/add-subcategory', [SubCategoryController::class, 'AddSubCategory'])->name('addsubcategory');
    Route::post('/admin/store-subcategory', [SubCategoryController::class, 'StoreSubCategory'])->name('storesubcategory');
    Route::get('/admin/edit-subcategory/{id}', [SubCategoryController::class, 'EditSubCat'])->name('editsubcat');
    Route::get('/admin/delete-subcategory/{id}', [SubCategoryController::class, 'DeleteSubCat'])->name('deletesubcat');
    Route::post('/admin/update-subcategory', [SubCategoryController::class, 'UpdateSubCat'])->name('updatesubcat');
});

Route::controller(ProductController::class)->prefix('admin/products')->group(function () {
    Route::get('/', 'index')->name('products.index');
    Route::get('/add', 'AddProduct')->name('products.add');
    Route::post('/store', 'store')->name('products.store');
    Route::get('/edit-image/{product}', 'editImage')->name('products.image.edit');
    Route::post('/update-image/{product}', 'updateProductImg')->name('products.image.update');
    Route::get('/edit/{product}', 'editProduct')->name('products.edit');
    Route::put('/{product}', 'update')->name('products.update');
    Route::get('/delete/{product}', 'delete')->name('products.delete');
});
Route::controller(ArtwallController::class)->group(function () {
    Route::get('admin/all-exhibition', [ArtwallController::class, 'Index'])->name('all-exhibition');
    Route::get('admin/add-exhibition', [ArtwallController::class, 'AddExhibition'])->name('addexhibition');
    Route::post('admin/store-exhibition', [ArtwallController::class, 'StoreExhibition'])->name('store-exhibition');
    Route::get('admin/edit-exhibition-img/{id}', [ArtwallController::class, 'EditExhibitionImg'])->name('editexhibitionimg');
    Route::post('admin/update-exhibition-img', [ArtwallController::class, 'UpdateExhibitionImg'])->name('updateexhibitionimg');
    Route::get('admin/edit-exhibition/{id}', [ArtwallController::class, 'EditExhibition'])->name('editexhibition');
    Route::post('admin/update-exhibition', [ArtwallController::class, 'UpdateExhibition'])->name('updateexhibition');
    Route::get('admin/delete-exhibition/{id}', [ArtwallController::class, 'DeleteExhibition'])->name('deleteexhibition');
});

Route::get('/cart-product', [ProductController::class, 'cart'])->name('cart');
Route::get('/add-to-cart-product{id}', [ProductController::class, 'AddToCart'])->name('addtocartpro');

//User Panel
Route::get('/index', [AuthManager::class, 'index'])->name('index');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::group(['middleware' => 'auth'], function () {
    Route::get('userprofile', [AuthManager::class, 'userprofile'])->name('userprofile');
});

Route::get('/framing', [PagesController::class, 'framing'])
    ->name('pages.framing');
Route::get('/home', [PagesController::class, 'home'])->name('home');
//Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/instore', [PagesController::class, 'instore']);
Route::get('/activities', [PagesController::class, 'activities']);
Route::get('/activities/{id}', [PagesController::class, 'SingleActivity'])->name('singleactivity');
Route::get('/printing', [PagesController::class, 'Printing'])->name('printing');
Route::get('/activities-art-fairs', [PagesController::class, 'ArtFairs'])->name('artfairs');
Route::get('/activities-festival-event', [PagesController::class, 'FestivalEvent'])->name('festival.event');
Route::get('/activities-exhibition', [PagesController::class, 'Exhibition'])->name('exhibition');

Route::get('/framingsingle', [PagesController::class, 'framingsingle']);
Route::get('/wandh', [PagesController::class, 'wandh']);
Route::get('/artworks', [PagesController::class, 'filter'])->name('artworks.filter');
Route::get('/product-details/{id}/{slug}', [PagesController::class, 'SingleProduct'])->name('singleproduct');
Route::get('/add-to-cart', [PagesController::class, 'AddToCart'])->name('addtocart');
Route::post('/add-product-to-cart{id}', [PagesController::class, 'AddProductToCart'])->name('addproducttocart');
Route::post('/checkout', [PagesController::class, 'Checkout'])->name('checkout');
// Product and Users
//Route::get('/product/index', [ProductController::class, 'index']);
Route::resource('user', UserController::class);
Route::get('user-index', [UserController::class, 'index'])->name('userindex');

//Display CMS Pages (CRUD - READ)
Route::get('cms_pages', [CmsController::class, 'index']);
Route::post('update-cms-status', [CmsController::class, 'update']);

//Category Routes
//Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
//Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
//Route::get('admin/category/list', [CategoryController::class, 'list']);
//Route::get('admin/category/add', [CategoryController::class, 'add']);
//Route::post('admin/category/add', [CategoryController::class, 'insert']);
//Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit']);
//Route::post('admin/category/edit/{id}', [CategoryController::class, 'update']);
//Route::get('admin/category/delete/{id}', [CategoryController::class, 'delete']);

//Framing Controllers

Route::controller(FramingController::class)->group(function () {

    Route::get('framing', [FramingController::class, 'Framing'])->name('framing');
    Route::get('framing/physical', [FramingController::class, 'Physical'])->name('physical');
    Route::get('store-framing', [FramingController::class, 'FramingStore'])->name('framingstore');
    Route::get('physical', [FramingController::class, 'PhysicalFraming'])->name('physicalframing');
    Route::get('/upload', [FramingController::class, 'upload'])->name('uploadimage');
    //Route::get('/upload-image', [FramingController::class, 'UploadImg'])->name('uploadimg');
    Route::post('/upload-image-framing', [FramingController::class, 'UploadImgFraming'])->name('uploadimgframing');
    Route::get('/upload-image-framing', [FramingController::class, 'UploadImgFraming'])->name('uploadimgframing');
    Route::post('/information-framing', [FramingController::class, 'StoreFraming'])->name('storeframing');
    Route::get('admin/all-framing', [FramingController::class, 'FramigList'])->name('framelist');
    Route::get('/admin/delete-framing/{id}', [FramingController::class, 'DeleteFraming'])->name('deleteframing');
});

//Printing controllers
Route::controller(PrintingController::class)->group(function () {
    Route::get('printing/single', [PrintingController::class, 'printing'])->name('printing-single');
    Route::get('/upload-printing', [PrintingController::class, 'UploadPrinting'])->name('upload-printing');
    Route::post('/upload-image-printing', [PrintingController::class, 'UploadImgPrinting'])->name('uploadimgprinting');
    Route::get('/upload-image-printing', [PrintingController::class, 'UploadImgPrinting'])->name('uploadimgprinting');
    Route::post('/information-printing', [PrintingController::class, 'StorePrinting'])->name('storeprinting');
    Route::get('admin/all-printing', [PrintingController::class, 'PrintingList'])->name('allprinting');
    Route::get('printing/framing', [PrintingController::class, 'PrintingList'])->name('allprinting');

    Route::get('/admin/delete-printing/{id}', [PrintingController::class, 'DeletePrinting'])->name('deleteprinting');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('blog/single/{id}', [BlogController::class, 'Blog_single'])->name('blog-single');
    Route::get('blogs', [BlogController::class, 'Blogs'])->name('blogs');
    Route::get('admin/all-blogs', [BlogController::class, 'Index'])->name('all_blogs');
    Route::get('admin/add-blog', [BlogController::class, 'AddBlog'])->name('add_blogs');
    Route::post('admin/store-blogs', [BlogController::class, 'BlogStore'])->name('blog_store');
    Route::get('admin/edit-blog-img/{id}', [BlogController::class, 'EditBlogImg'])->name('edit_blog_img');
    Route::post('admin/update-blog-img', [BlogController::class, 'UpdateBlogImg'])->name('update_img_blog');
    Route::get('admin/edit-blog/{id}', [BlogController::class, 'EditBlog'])->name('edit_blog');
    Route::post('admin/update-blog', [BlogController::class, 'UpdateBlog'])->name('update_blog');
    Route::get('/admin/delete-blog/{id}', [BlogController::class, 'DeleteBlog'])->name('delete_blog');
});

Route::post('store/mycart', [StoreSessionController::class, 'store_from_framing'])->name('mycart');
Route::post('store/mycart-print', [StoreSessionController::class, 'store_from_printing'])->name('mycart-printing');
Route::get('store/duplicate-cart/{id}', [StoreSessionController::class, 'dublicate_store_item'])->name('duplicateStoreItem');
Route::get('store/delete-cart/{id}', [StoreSessionController::class, 'delete_store_item'])->name('deleteStoreItem');
Route::get('store/edit-cart/{id}', [StoreSessionController::class, 'edit_store_item'])->name('editStoreItem');

Route::get('checkout-transactions', [StoreSessionController::class, 'store_session_data']);

Route::get('assets/frames', [FrameAssetsController::class, 'getList']);

//artists
Route::prefix('admin/artists')->controller(ArtistController::class)->group(function () {
    Route::get('/', 'index')->name('admin.artists.index');
    Route::post('/', 'store')->name('admin.artists.store');
    Route::get('/add', 'create')->name('admin.artists.add');
    Route::get('/{artist}/edit', 'edit')->name('admin.artists.edit');
    Route::put('/{artist}', 'update')->name('admin.artists.update');
    Route::get('/{artist}', 'delete')->name('admin.artists.delete');
});

//artists
Route::prefix('admin/services')->controller(ServiceController::class)->group(function () {
    Route::get('/', 'index')->name('admin.services.index');
    Route::post('/', 'store')->name('admin.services.store');
    Route::get('/add', 'create')->name('admin.services.add');
    Route::get('/{service}/edit', 'edit')->name('admin.services.edit');
    Route::post('/{service}', 'update')->name('admin.services.update');
    Route::get('/{service}', 'delete')->name('admin.services.delete');
});
