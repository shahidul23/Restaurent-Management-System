<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Reservation;

use App\Models\Foodchef;

use App\Models\Order;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function user()
    {
         
        if(Auth::id())
        {
        $data = user::all();

    	return view("admin.user",compact("data"));

        }
        else
        {
            return redirect('login');
        }
    }
    public function deleteuser($id)
    {
        if(Auth::id())
        {
        $data = user::find($id);
        $data ->delete();

        return redirect()->back();
    }
    else
    {
        return redirect('login');
    }
    }
    
    public function food()
    {
        if(Auth::id())
        {
        $data=food::all();
    	return view("admin.food",compact("data"));
    }
    else
    {
        return redirect('login');
    }
    }
    public function deletemanu($id)
    {
        if(Auth::id())
        {
        $data = food::find($id);
        $data ->delete();

        return redirect()->back();
    }
    else
    {
        return redirect('login');
    }
    }
    public function updatemanu($id)
    {
        if(Auth::id())
        {
        $data = food::find($id);
        return view("admin.updateview",compact("data"));
         }
         else
         {
            return redirect('login');
         }
    }
    public function updatefood(Request $request,$id)
    {
        if(Auth::id())
        {
        $data=food::find($id);
        $image=$request->image;
        if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Food_Image',$imagename);
        $data->image=$imagename;
        }
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();
    }
    else
    {
        return redirect('login');
    }
    }
    public function uplode(Request $request)
    {
        if(Auth::id())
        {
        $data= new food;
        $image=$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Food_Image',$imagename);
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();
    }
    else
    {
        return redirect('login');
    }
    }

    public function chefs()
    {
        if(Auth::id())
        {
        $data=foodchef::all();
    	return view("admin.chefs",compact("data"));
    }
    else
    {
        return redirect('login');
    }
    }
    public function uplodechef(Request $request)
    {
        if(Auth::id())
        {
        $data= new foodchef;
        $image=$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;

        $data->name = $request->name;
        $data->speciality = $request->specilaty;

        $data->save();

        return redirect()->back();
    }

    else
    {
        return redirect('login');
    }

    }
    public function chefpudate($id)
    {
        if(Auth::id())
        {
        $data=foodchef::find($id);
        return view("admin.chefupdateview",compact("data"));
    }
    else
    {
        return redirect('login');
    }
    }
    public function updatechef(Request $request, $id)
    {
        if(Auth::id())
        {
        $data = foodchef::find($id);
        $image = $request->image;
        if($image){
         $imagename = time().'.'.$image->getClientOriginalExtension();
         $request->image->move('chefimage',$imagename);
         $data->image=$imagename;   
        }
        

        $data->name = $request->name;
        $data->speciality=$request->specilaty;

        $data->save();
        return redirect()->back();
    }
    else
    {
        return redirect('login');
    }
    }
    public function chefdelete($id)
    {
        if(Auth::id())
        {
        $data=foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }
    else
    {
       return redirect('login');   
    }
    }

    public function reservations()
    {
        if(Auth::id())
        {
        $data=reservation::all();
    	return view("admin.reservations",compact("data"));
    }
    else
    {
        return redirect('login');
    }
    }
    public function talbereservations(Request $request)
    { 
        if(Auth::id())
        {
        $data = new reservation;
        $data->name=$request->name;
        $data->email = $request->email;
        $data->phone=$request->phone;
        $data->guest= $request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();
        return redirect()->back();
    }
    else
    {
        return redirect('login');
    }
    }
    public function deleteorder($id)
    {
        if(Auth::id())
        {
        $data=reservation::find($id);
        $data->delete();

        return redirect()->back();
    }
    else
        return redirect('login');
    }

    public function orders()
    {
        if(Auth::id())
        {
        $data = order::all();
       return view("admin.orders",compact("data"));
   }
   else
   {
    return redirect('login');
   }
    }

    public function search(Request $request)
    {
     if(Auth::id())
     {
        $search = $request->search;
        $data=order::Where('name','like','%'.$search.'%')->orWhere('foodname','like','%'.$search.'%')->orWhere('phone','like','%'.$search.'%')
        ->get();

        return view("admin.orders",compact("data"));
    }
    else
    {
        return redirect('login');
    }
    }

    public function deletefoodorder($id)
    {
        if(Auth::id())
        {
        $data=order::find($id);
        $data->delete();
        return redirect()->back();
    }
    else
    {
        return redirect('login');
    }
    }
}
