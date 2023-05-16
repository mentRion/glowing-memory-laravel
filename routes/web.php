<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
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

/*
Verb	URI	                    Action	        Route Name
GET	    /posts	                index	        posts.index
GET	    /posts/create	        create	        posts.create
POST	/posts	                store	        posts.store
GET	    /posts/{post}	        show	        posts.show
GET	    /posts/{post}/edit	    edit	        posts.edit
PUT     /PATCH	/posts/{post}	update	        posts.update
DELETE	/posts/{post}	        destroy	        posts.destroy
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
// Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
// Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
// Route::get('/tasks/{id}/show', [TaskController::class, 'show'])->name('tasks.show');
// Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
// Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
// Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

Route::group(['prefix' => 'tasks'], function () {

    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');

    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');

    Route::post('/', [TaskController::class, 'store'])->name('tasks.store');

    Route::get('/{id}/show', [TaskController::class, 'show'])->name('tasks.show');

    Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/{id}', [TaskController::class, 'update'])->name('tasks.update');
    Route::put('/{id}/{flag}', [TaskController::class, 'markdone'])->name('tasks.markdone');

    Route::delete('/{id}/delete', [TaskController::class, 'destroy'])->name('task.destroy');
});
