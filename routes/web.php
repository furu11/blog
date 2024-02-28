<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AdminController;

Route::get('/', [ViewController::class, 'index'])->name('views.index');
Route::post('/', [ViewController::class, 'index'])->name('views.index');

Route::get('/mypage', [ViewController::class, 'mypage'])->name('views.mypage');

Route::get('/contact.blade.php', [ContactController::class, 'showContactForm'])->name('contact.form');
Route::post('/confirm.blade.php', [ContactController::class, 'processContactForm'])->name('contact.confirm');
Route::post('/complete.blade.php', [ContactController::class, 'complete'])->name('contact.complete');



 // 編集画面
 Route::get('/edit.blade.php{id}', [PostController::class, 'edit'])->name('admin.post.edit');
 
 Route::post('/edit_done.blade.php/{id}', [PostController::class, 'editPost'])->name('admin.post.update');

 // 削除
Route::get('/delete.blade.php{id}', [PostController::class, 'destroy'])->name('admin.post.delete');


Route::get('/adminpass',  [UserController::class, 'adminpass'])->name('adminpass');
Route::post('/adminpass',  [UserController::class, 'adminpass'])->name('adminpass');
Route::get('/admin',  [UserController::class, 'admin'])->name('admin');
Route::post('/admin',  [UserController::class, 'admin'])->name('admin');


Route::get('/register',[UserController::class,'showRegister'])->name('register');
Route::post('/register',[UserController::class,'register'])->name('register');

Route::middleware('auth')->group(function (){
    Route::get('/profile',[UserController::class,'profile'])->name('profile');
});

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/logout', [UserController::class, 'logout']);


Route::get('/login',[UserController::class,'showLogin']);
Route::post('/login',[UserController::class,'login'])->name('login');


// web.php

Route::post('/like',[LikeController::class,'store'])->name('like');
Route::delete('/unlike', [LikeController::class, 'destroy'])->name('unlike');


// パスワードリセット関連
Route::prefix('password_reset')->name('password_reset.')->group(function () {
    Route::prefix('email')->name('email.')->group(function () {
        // パスワードリセットメール送信フォームページ
        Route::get('/', [PasswordController::class, 'emailFormResetPassword'])->name('form');
        // メール送信処理
        Route::post('/', [PasswordController::class, 'sendEmailResetPassword'])->name('send');
        // メール送信完了ページ
        Route::get('/send_complete', [PasswordController::class, 'sendComplete'])->name('send_complete');
    });
    // パスワード再設定ページ
    Route::get('/edit', [PasswordController::class, 'edit'])->name('edit');
    // パスワード更新処理
    Route::post('/update', [PasswordController::class, 'update'])->name('update');
    // パスワード更新終了ページ
    Route::get('/edited', [PasswordController::class, 'edited'])->name('edited');

});