<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MessageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/projects', [PageController::class, 'projects']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/admin/messages', function () {
    $messages = \App\Models\Message::latest()->get();
    return view('admin.messages', compact('messages'));
})->name('admin.messages');



Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');

Route::get('/projects-cyber', function () {
    return view('projects-cyber');
})->name('projects-cyber');

Route::get('/projects/monitoring-prometheus', function () {
    return view('projects.monitoring-prometheus');
})->name('projects.monitoring-prometheus');


Route::get('/projects/siem-winlogbeat', function () {
    return view('projects.siem-winlogbeat');
})->name('projects.siem-winlogbeat');


Route::get('/security-network', function () {
    return view('security-network');
})->name('security-network');
Route::get('/tools', function () {
    return view('tools');
})->name('tools');
Route::get('/programming', function () {
    return view('programming');
})->name('programming');
Route::get('/reporting', function () {
    return view('reporting');
})->name('reporting');
