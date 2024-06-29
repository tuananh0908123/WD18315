<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\sinhVien;

///GET, POST , PUT ,PATCH, DELETE (method htpp) 
/// Base url :http://127.0.0.1:8000/
        // Dat ten : danh-sach-san-pham
Route::get('test',function(){
    echo '123';
});
Route::get('/',function(){
    echo 'Trang chu';
});
Route::get('list-products', [ProductController::class,'showProduct']);
Route::get('get-product/{id}/{name?}',[ProductController::class,'getProduct']);
Route::get('update-product',[ProductController::class,'updateProduct']);
Route::get('thongtinsv', [SinhVien::class, 'showStudentInfo']);