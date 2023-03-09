<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Testimony;
use App\Models\Webinar;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    public function home()
    {
        $category = Category::with('webinar')->get();
        $testimony = Testimony::limit(10)->get();

        return view('welcome', compact('category', 'testimony'));
    }

    public function search(Request $request)
    {
        $keywors = $request->input('keywords');
        $webinar = Webinar::where('title', 'like', "%title%")->limit(10)->get();
    }
}
