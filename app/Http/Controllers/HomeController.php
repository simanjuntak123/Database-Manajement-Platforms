<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
class HomeController extends Controller



{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function list()
    {
      $datasets = DB::select('select * from datasets');
      return view('home', ['datasets' => $datasets]);
    }

    public function upload()
    {
      return view('home');
    }

    public function UploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

        if($request->hasFile('filename')){
            $request->filename->store('public');

        }
    }
}
