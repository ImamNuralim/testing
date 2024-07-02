<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StatController;
use App\Livewire\User\Video\Show;
use App\Http\Controllers\KitabController;
use App\Http\Controllers\DashboardController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Home;
use App\Livewire\User\Answer\AnswerIndex;
use App\Livewire\User\Profile\ProfileIndex;
use App\Livewire\User\Question\QuestionIndex;
use App\Livewire\User\Stat;


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

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/stats', [StatController::class, 'index'])->name('stats.index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/answers', AnswerIndex::class)->name('answer.index');
    Route::get('/{question:title_slug}', QuestionIndex::class)->name('question.index');
    Route::get('/profile/{user:username_slug}', ProfileIndex::class)->name('profile.index');
    Route::get('/video', Show::class)->name('video');
});



// Route::get('/materivideo', function() {
//     dd('Route works');
// })->name('materivideo.index');

Route::get('/test-route', function() {
    return 'Test route works!';
});

// //dashboard
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::get('/dashboard', function() {
//     dd('Route works');
// });

// //ustaz

// // Route::get('/dashboard/ustaz', [UstazController::class, 'index'])->name('dashboard.ustaz');

// //kitab
// Route::get('/kitab', [KitabController::class, 'index'])->name('kitab.index');
// Route::get('/surah', [QuranController::class, 'quran'])->name('kitab.surah');
// Route::get('/hadith', [HadithController::class, 'hadith'])->name('hadith');


