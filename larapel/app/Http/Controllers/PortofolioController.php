<?php

namespace App\Http\Controllers;

use App\Models\portofolio;
use Illuminate\Http\Request;



class PortofolioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        $data = portofolio::all();
        return view('portofolios.index',compact('data'));
    }

    public function create(){
        return view('portofolios.create');
    }

    public function show(string $id)
    {
        //
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image_file' => 'required|mimes:png,jpg,jpeg',
            'description' => 'required'
        ]);
        $file_name = $request->image_file->getClientOriginalName();
        $imagePath = $request->image_file->storeAs('uplouds',$file_name);
        // $imagePath = $request->file('image_file')->storeAs('uplouds',$file_name);

        $newPortofolio = new portofolio();
        $newPortofolio->title = $request->title;
        $newPortofolio->description = $request->description;
        $newPortofolio->image_file_url = '/storage/'.$imagePath;
        $newPortofolio->save();

        return redirect()->route('portofolios.index')->with('success','Data Berhasil Ditambahkan');

    }
    
    public function edit(string $id){
        $data = portofolio::findOrFail($id);
        return view('portofolios.edit',compact('data'));
    }
    
    public function update(Request $request, string $id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        $portofolio = portofolio::findOrFail($id);
        $portofolio->title = $request->title;
        $portofolio->description = $request->description;
        $portofolio->save();
        
        return redirect()->route('portofolios.index')->with('success','Data Berhasil ubah');
    }

    public function destroy($id){
        $portofolio = portofolio::findOrFail($id);
        $portofolio->delete();

        return redirect()->route('portofolios.index')->with('success','Data Berhasail dihapus');
        // return response()->json(['status' => 'Data Berhasil di hapus!']);
    }


}
