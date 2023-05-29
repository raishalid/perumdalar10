<?php

use App\Models\Sector;
use App\Models\Product;
use App\Models\Service;
use App\Models\SectorCategory;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BelajarPermissionController;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Http\Controllers\AdminUserController;

// belajar permission
use App\Http\Middleware\BelajarMiddleware;
use App\Http\Controllers\BelajarController;
use App\Http\Livewire\ContohKomponen;
use App\Http\Livewire\Agents;
// Route::get('/contoh', ContohKomponen::class);


Route::get('/', function () {

    return view('index');
});
// rute awal pada dashboard
Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');



// routes berkaitan berita :
Route::get('/berita', [BeritaController::class, 'daftarBerita'])->name('berita.daftarberita');
Route::get('/berita/{slug}', [BeritaController::class, 'isiBerita'])->name('berita.isiberita');
Route::get('/berita/kategori/{slug}', [BeritaController::class, 'beritaPerKategori'])->name('berita.beritaperkategori');
Route::get('/arsipberita', [BeritaController::class, 'arsipBerita'])->name('arsip-berita');

// routes berkaitan Sector : Masih menangani sebagian controlling di routes seharusnya di controller saja

Route::get('/sector', function () {
    $sectors = App\Models\Sector::with('sectorCategory')->get();
    $sector_categories = App\Models\SectorCategory::with('sectors')->get();
    return view('sectors.sectors', ['sectors' => $sectors, 'sector_categories' => $sector_categories]);
})->name('sectors_services');

Route::get('/sectors/{slug}', [SectorController::class, 'showSector'])->name('sectors.showSector');

// routes dibawah ini berkaitan dengan PROJECT
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{slug}', [ProjectController::class, 'detail'])->name('projects.detail');
Route::get('/project-files/{fileId}/download', [ProjectController::class, 'download'])->name('project-files.download');

// Routes dibawah ini berkaitan dengan Jet Stream


// Route::get('/dashboard', function () {
//     $user = Auth::user();

//     $roles = $user->roles;

//     return view('dashboard')->with('roles', $roles);
// })->middleware(['auth', 'role:admin,journalist'])->name('dashboard');

// dashboard utama
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//selling dashboard
Route::get('/dashboardsell', function () {
    return view('dashboardsell');
})->middleware(['auth', 'verified'])->name('dashboardsell');
//selling dashboard
Route::get('/dashboardpurc', function () {
    return view('dashboardpurc');
})->middleware(['auth', 'verified'])->name('dashboardpurc');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/updateagent', function () {
    return view('updateagent');
})->middleware(['auth', 'verified'])->name('updateagent');


Route::middleware(['auth', 'verified'])->get('/agents', function () {
    return view('livewire.agent');
})->name('agents');

// Routes terkait Ecommerce

Route::get('/productcatalog', function () {
    return view('ecommerce.productcatalog');
})->middleware(['auth', 'verified'])->name('productcatalog');


require __DIR__ . '/auth.php';
