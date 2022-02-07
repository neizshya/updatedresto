<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Makanan;
use App\Models\Reservation;
use App\Models\Foodchef;


class AdminController extends Controller
{
    public function index()
    {
        dd('tes');
        return view('admin.adminhome');

    }
    public function user(){
        $data=user::all();
        return view('admin.user',compact("data"));
    }

    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function deletemenu($id){

        $data = makanan::find($id);

        $data->delete();

        return redirect()->back();
    }


    public function menu(){

        $data = makanan::all();
        return view('admin.menu',compact("data"));
    }

    public function tambah(){

        $data = makanan::all();
        return view('admin.tambah',compact("data"));
    }
    public function updateview($id){

        $data=Makanan::find($id);

        return view("admin.updateview",compact("data"));
    }


    public function update(Request $request,$id){

        $data=Makanan::find($id);

        $image=$request->gb_makanan;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->gb_makanan->move('FotoMakanan',$imagename);
        $data->gb_makanan=$imagename;



        $data->nm_makanan=$request->nm_makanan;
        $data->harga=$request->harga;
        $data->deskripsi=$request->deskripsi;

        $data->save();
        return redirect()->back();

    }

    public function upload(Request $request){
        $data = new Makanan;


        $image=$request->gb_makanan;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->gb_makanan->move('FotoMakanan',$imagename);
        $data->gb_makanan=$imagename;



        $data->nm_makanan=$request->nm_makanan;
        $data->harga=$request->harga;
        $data->deskripsi=$request->deskripsi;

        $data->save();
        return redirect()->back();

    }

    public function reservation(Request $request){
        $data = new reservation;


        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();
        return redirect()->back();

    }

    public function viewreservation()
    {
        $data=reservation::all();

        return view("admin.adminreservation",compact("data"));
    }
    public function deletereser($id){

        $data = reservation::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function viewchef()
    {
        $data=foodchef::all();

        return view("admin.adminchef",compact("data"));
    }

    public function uploadchef(Request $request)
    {
        $data=new foodchef;
        $image=$request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('fotochef',$imagename);
        $data->image=$imagename;

        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();

        return redirect()->back();

    }

    public function updatechef($id)
    {
        $data=foodchef::find($id);
        return view("admin.updatechef",compact("data"));
    }

    public function updatefoodchef(Request $request ,$id)
    {
        $data=foodchef::find($id);

        $image=$request->image;

        if ($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('fotochef',$imagename);
            $data->image=$imagename;

        }

        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $data->save();
        return redirect()->back();

    }

    public function deletechef($id)
    {
        $data=foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function tambahchef(){

        $data = foodchef::all();
        return view('admin.tambahchef',compact("data"));
    }
}
