<?php

namespace App\Http\Controllers;
use App\Models\Work;
use Illuminate\Http\Request;

class Workcontroller extends Controller
{
    //

    public function index(){
        return view("home",["work"=> Work:: all()]);
    }

    public function store(Request $req){
        $req->validate([

        ]);

        $work = new Work();
        $work->title = $req->title;
        $work->save();
        return redirect()->route('homepage');   

    }
    public function done($id){
        $work = Work::find($id);
        $work->status = false;
        $work->save();
        return redirect()->back();
    }
    public function remove($id){
        $work = Work::find($id);
        $work->status = false;
        $work->delete();
        return redirect()->back();
    }
}
