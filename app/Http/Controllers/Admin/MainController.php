<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function index(){
        // $tag = new Tag();
        // $tag->title='Привет beer!';
        // $tag->save();
        // $f = new Category();
        // $f->title='жопы деньги два хуя';
        // $f->save();
        return view('admin.index');
    }
}
