<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WorkController;
use Illuminate\Queue\WorkerOptions;

Route::get("/",[WorkController::class,"index"])->name("homepage");
Route::get("/update/{id}",[WorkController::class,"done"])->name("done");
Route::get("/remove/{id}",[WorkController::class,"remove"])->name("remove");
Route::post("/store",[WorkController::class,"store"])->name("store");
