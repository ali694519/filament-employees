<?php

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\EmployeeResource;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employees',function() {
    $employees = Employee::orderBy('last_name')->get();
    return EmployeeResource::collection($employees);
});
