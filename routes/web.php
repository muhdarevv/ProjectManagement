<?php

use Illuminate\Support\Facades\Route;

/* 
frontend
*/


Route::get('/', function () {
    return view('welcome');
});

/* 
authentication
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('projectleader');

Route::get('/projectmanager/home', [App\Http\Controllers\HomeController::class, 'ProjectManagerHome'])->name('projectmanager.home')->middleware('projectmanager');

/* 
backend project manager
*/



Route::get('/projectmanager/create', [App\Http\Controllers\CreateController::class,'create'])->name('create')->middleware('projectmanager');
Route::post('/projectmanager/create/store', [App\Http\Controllers\CreateController::class,'store'])->name('create.store');
Route::get('/projectmanager/show',  [App\Http\Controllers\ShowController::class,'show'])->name('show')->middleware('projectmanager');
Route::get('/projectmanager/show/member', [App\Http\Controllers\ShowController::class,'showmember'])->name('showmember')->middleware('projectmanager');

/* 
backend project leader
*/

Route::get('/home/project', [App\Http\Controllers\PLController::class, 'show'])->name('home.project')->middleware('projectleader');
Route::get('/home/project/edit/{id}', [App\Http\Controllers\PLController::class, 'edit'])->name('home.project.edit')->middleware('projectleader');
Route::put('/home/project/update/{id}', [App\Http\Controllers\PLController::class, 'update'])->name('home.project.update')->middleware('projectleader');



Route::get('/home/project/member/{id}', [App\Http\Controllers\MemberController::class, 'member'])->name('home.member')->middleware('projectleader','checkid');
Route::post('/home/project/member/store', [App\Http\Controllers\MemberController::class, 'memberstore'])->name('home.memberstore')->middleware('projectleader');
Route::get('/home/project/memberview/{id}', [App\Http\Controllers\MemberController::class, 'memberview'])->name('home.memberview')->middleware('projectleader','checkid');
Route::get('/home/project/memberdelete/{id}', [App\Http\Controllers\MemberController::class, 'memberdelete'])->name('home.memberdelete')->middleware('projectleader');





