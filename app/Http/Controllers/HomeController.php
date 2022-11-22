<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celebrity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->get('keyword') != null)
        {
            $keyword = $request->get('keyword');
            $celebrities = Celebrity::where('star', 'LIKE', '%' .$keyword. '%')->paginate(5);
        }
        else
        {
            $celebrities = Celebrity::paginate(5);
        }
        return view('home', compact('celebrities'));
    }
}
