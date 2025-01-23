<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Masters\Ahli;
use App\Http\Controllers\Masters\Artikel;
use App\Http\Controllers\Masters\Penyakit;
use App\Http\Controllers\Masters\Users;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Masters\Obat;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('homepage');
// });
Route::get('/artikel', function () {
    return view('artikelpage');
});

Route::prefix('/')->middleware(['auth', 'verified', 'user'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('user.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin
Route::prefix('admin')->middleware(['admin'])->group(function () {
    // dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');;

    // users
    Route::get('/users', [Users::class, 'index'])->name('admin.users.index'); // Tampilkan halaman users
    Route::post('/users', [Users::class, 'store'])->name('admin.users.store'); // Tambah user baru
    Route::get('/users/{user}/edit', [Users::class, 'edit'])->name('admin.users.edit'); // Form edit user (opsional jika pakai modal)
    Route::put('/users/{id}', [Users::class, 'update'])->name('admin.users.update'); // Update user
    Route::delete('/users/{id}', [Users::class, 'destroy'])->name('admin.users.destroy'); // Hapus user

    // obat
    Route::get('/obat', [Obat::class, 'index'])->name('admin.obat.index');
    Route::post('/obat', [Obat::class, 'store'])->name('admin.obat.store');
    Route::get('/obat/{user}/edit', [Obat::class, 'edit'])->name('admin.obat.edit');
    Route::put('/obat/{id}', [Obat::class, 'update'])->name('admin.obat.update');
    Route::delete('/obat/{id}', [Obat::class, 'destroy'])->name('admin.obat.destroy');

    // artikel
    Route::get('/artikel', action: [Artikel::class, 'index'])->name('admin.artikel.index');
    Route::post('/artikel', [Artikel::class, 'store'])->name('admin.artikel.store');
    Route::get('/artikel/{user}/edit', [Artikel::class, 'edit'])->name('admin.artikel.edit');
    Route::put('/artikel/{id}', [Artikel::class, 'update'])->name('admin.artikel.update');
    Route::delete('/artikel/{id}', [Artikel::class, 'destroy'])->name('admin.artikel.destroy');

    // penyakit
    Route::get('/penyakit', [Penyakit::class, 'index'])->name('admin.penyakit.index');
    Route::post('/penyakit', [Penyakit::class, 'store'])->name('admin.penyakit.store');
    Route::get('/penyakit/{user}/edit', [Penyakit::class, 'edit'])->name('admin.penyakit.edit');
    Route::put('/penyakit/{id}', [Penyakit::class, 'update'])->name('admin.penyakit.update');
    Route::delete('/penyakit/{id}', [Penyakit::class, 'destroy'])->name('admin.penyakit.destroy');

    // ahli
    Route::get('/ahli', [Ahli::class, 'index'])->name('admin.ahli.index');
    Route::post('/ahli', [Ahli::class, 'store'])->name('admin.ahli.store');
    Route::get('/ahli/{user}/edit', [Ahli::class, 'edit'])->name('admin.ahli.edit');
    Route::put('/ahli/{id}', [Ahli::class, 'update'])->name('admin.ahli.update');
    Route::delete('/ahli/{id}', [Ahli::class, 'destroy'])->name('admin.ahli.destroy');
})->name('admin.');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Halaman login
Route::post('/login', [AuthController::class, 'login'])->name('login');       // Proses login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');   // Logout



require __DIR__.'/auth.php';
