<?php

namespace App\Http\Controllers;

use App\Category;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    //
    public function index(){

        return view('admin.settings.index');
    }
    public function categories(){
        $categories = Category::orderBy('id','desc')->get();
        return view('admin.settings.category.index',compact('categories'));
    }
    public function create_category(){
        return view('admin.settings.category.create');
    }
    public function store_category(Request $request){

        request()->validate([
            'category_name' => 'required',
        ]);
        Category::create([
            'name' => $request->category_name,
        ]);
        return redirect()->route('settings.categories');
    }
}
