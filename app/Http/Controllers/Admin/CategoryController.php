<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.Category.index');
        }
    public function createform(){
        return view('admin.Category.create');
    }
}
