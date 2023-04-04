<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    $users = User::orderBy('id', 'desc')->get();
    dd($users->toArray());
});
