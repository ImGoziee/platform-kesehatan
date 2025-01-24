<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Masters\Ahlis;
use App\Http\Controllers\Masters\Artikel;
use App\Http\Controllers\Masters\Penyakits;
use App\Http\Controllers\Masters\Users;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Masters\Obats;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', [Penyakits::class, 'homepage'])->name('homepage');

Route::get('/artikel', function () {
    return view('artikelpage');
});
Route::get('/penyakit', function () {
    return view('detailpage.detailPenyakit');
});
Route::get('/obat', function () {
    return view('detailpage.detailObat');
});

// Route::prefix('/admin')->middleware(['auth', 'verified', 'user'])->group(function () {
    // Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('user.dashboard');
// });

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
    Route::get('/obat', [Obats::class, 'index'])->name('admin.obat.index');
    Route::post('/obat', [Obats::class, 'store'])->name('admin.obat.store');
    Route::get('/obat/{user}/edit', [Obats::class, 'edit'])->name('admin.obat.edit');
    Route::put('/obat/{id}', [Obats::class, 'update'])->name('admin.obat.update');
    Route::delete('/obat/{id}', [Obats::class, 'destroy'])->name('admin.obat.destroy');

    // artikel
    Route::get('/artikel', action: [Artikel::class, 'index'])->name('admin.artikel.index');
    Route::post('/artikel', [Artikel::class, 'store'])->name('admin.artikel.store');
    Route::get('/artikel/{user}/edit', [Artikel::class, 'edit'])->name('admin.artikel.edit');
    Route::put('/artikel/{id}', [Artikel::class, 'update'])->name('admin.artikel.update');
    Route::delete('/artikel/{id}', [Artikel::class, 'destroy'])->name('admin.artikel.destroy');

    // penyakit
    Route::get('/penyakit', [Penyakits::class, 'index'])->name('admin.penyakit.index');
    Route::post('/penyakit', [Penyakits::class, 'store'])->name('admin.penyakit.store');
    Route::get('/penyakit/{id}/edit', [Penyakits::class, 'edit'])->name('admin.penyakit.edit');
    Route::put('/penyakit/{id}', [Penyakits::class, 'update'])->name('admin.penyakit.update');
    Route::delete('/penyakit/{id}', [Penyakits::class, 'destroy'])->name('admin.penyakit.destroy');

    // ahli
    Route::get('/ahli', [Ahlis::class, 'index'])->name('admin.ahli.index');
    Route::post('/ahli', [Ahlis::class, 'store'])->name('admin.ahli.store');
    Route::get('/ahli/{user}/edit', [Ahlis::class, 'edit'])->name('admin.ahli.edit');
    Route::put('/ahli/{id}', [Ahlis::class, 'update'])->name('admin.ahli.update');
    Route::delete('/ahli/{id}', [Ahlis::class, 'destroy'])->name('admin.ahli.destroy');
})->name('admin.');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Halaman login
Route::post('/login', [AuthController::class, 'login'])->name('login');       // Proses login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');   // Logout



require __DIR__.'/auth.php';
