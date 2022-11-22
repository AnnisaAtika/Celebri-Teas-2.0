<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Celebrity;

class CelebrityController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

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

        return view('celebrities.index', compact('celebrities'));
    }

    public function create()
    {
        return view('celebrities.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'star' => 'required',
            'attachment1' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'attachment2' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'attachment3' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'attachment4' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'attachment5' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',

        ]);

        $celebrity = auth()->user()->celebrity()->create($request->only('star',
                                        'title1', 'body1',
                                        'title2', 'body2',
                                        'title3', 'body3',
                                        'title4', 'body4'));
        //TITLE 1
        if($request->file('attachment1')){
            $file=$request->file('attachment1');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $celebrity->attachment1=$filename;

        }

        if($request->file('attachment2')){
            $file=$request->file('attachment2');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $celebrity->attachment2=$filename;
        }

        //TITLE 2
        if($request->file('attachment3')){
            $file=$request->file('attachment3');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $celebrity->attachment3=$filename;
        }

        if($request->file('attachment4')){
            $file=$request->file('attachment4');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $celebrity->attachment4=$filename;
        }

        //TITLE 3
        if($request->file('attachment5')){
            $file=$request->file('attachment5');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $celebrity->attachment5=$filename;
        }

        $celebrity->save();

        //return to index
        return redirect()->route('celebrities:index')->with('status', 'New data created sucessfully!');
    }

    public function show(Celebrity $celebrity)
    {
        return view('celebrities.show', compact('celebrity'));
    }

    public function display(Celebrity $celebrity)
    {
        return view('celebrities.display', compact('celebrity'));
    }

    public function edit(Celebrity $celebrity)
    {
        
        return view('celebrities.edit', compact('celebrity'));
    }

    public function update(Request $request, Celebrity $celebrity)
    {

        $validated = $request->validate([
            
            'attachment1' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'attachment2' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'attachment3' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'attachment4' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'attachment5' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',

        ]);

        $celebrity->update($request->only('star',
                                        'title1', 'body1',
                                        'title2', 'body2',
                                        'title3', 'body3',
                                        'title4', 'body4'));
        
        //TITLE 1
        if($request->file('attachment1')){
            $file=$request->file('attachment1');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $celebrity->attachment1=$filename;

        }

        if($request->file('attachment2')){
            $file=$request->file('attachment2');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $celebrity->attachment2=$filename;
        }

        //TITLE 2
        if($request->file('attachment3')){
            $file=$request->file('attachment3');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $celebrity->attachment3=$filename;
        }

        if($request->file('attachment4')){
            $file=$request->file('attachment4');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $celebrity->attachment4=$filename;
        }

        //TITLE 3
        if($request->file('attachment5')){
            $file=$request->file('attachment5');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $celebrity->attachment5=$filename;
        }

        $celebrity->save();

        //return to index
        return redirect()->route('celebrities:index')->with('status', 'Data updated sucessfully!');
    }

    public function delete(Celebrity $celebrity)
    {
        $celebrity->delete();
        return redirect()->route('celebrities:index')->with('status', 'Data deleted successfully');
    }

}
