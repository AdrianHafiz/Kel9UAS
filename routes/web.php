<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware("auth")->group(function(){
    Route::view("/", "welcome")->name("home");
});

Route::get('/css/app.css', function () {
    $path = resource_path('css/app.css');

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::post("/login", [AuthController::class, "loginPost"])->name("login.post");
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get("/register", [AuthController::class, "register"])->name("register");
Route::post("/register", [AuthController::class, "registerPost"])->name("register.post");
Route::get('/movie/mov1', [MovieController::class, 'mov1'])->name('movie.mov1');
Route::get('/movie/mov2', [MovieController::class, 'mov2'])->name('movie.mov2');
Route::get('/movie/mov3', [MovieController::class, 'mov3'])->name('movie.mov3');
Route::get('/movie/mov4', [MovieController::class, 'mov4'])->name('movie.mov4');
Route::get('/movie/mov5', [MovieController::class, 'mov5'])->name('movie.mov5');
