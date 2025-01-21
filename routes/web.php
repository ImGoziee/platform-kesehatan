<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Masters\Users;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dashboard', [AdminController::class, 'index']);

// Users
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', [Users::class, 'index'])->name('users.index'); // Tampilkan halaman users
    Route::post('/users', [Users::class, 'store'])->name('users.store'); // Tambah user baru
    Route::get('/users/{user}/edit', [Users::class, 'edit'])->name('users.edit'); // Form edit user (opsional jika pakai modal)
    Route::put('/users/{id}', [Users::class, 'update'])->name('users.update'); // Update user
    Route::delete('/users/{id}', [Users::class, 'destroy'])->name('users.destroy'); // Hapus user

    
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Halaman login
Route::post('/login', [AuthController::class, 'login'])->name('login');       // Proses login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');   // Logout


require __DIR__.'/auth.php';
