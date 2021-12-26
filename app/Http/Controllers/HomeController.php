<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Card;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else

        $data=food::all();

        $data2=foodchef::all();
    	return view("home",compact("data","data2"));
    }
    public function redirect()
    {
        $data=food::all();
        $data2=foodchef::all();

    	$usertype = Auth::user()->usertype;

    	if($usertype =='1')
    	{
    		return view('admin.admin');
    	}
    	else
    	{
            $user_id=Auth::id();
            $count=card::where('user_id',$user_id)->count();
    		return view('home',compact("data","data2","count"));
    	}
    }
    public function addcart(Request $request ,$id)
    {
        if(Auth::id())
        {
            $user_id=Auth::id();

            $foodid=$id;
            $quantity = $request->quantity;


            $cart=new card;
            $cart->user_id=$user_id;
            $cart->food_id=$foodid;
            $cart->quantity=$quantity;

            $cart->save();
            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }
    public function showcart(Request $request,$id)
    {
        $count=card::where('user_id',$id)->count();
        if(Auth::id()==$id)
        {


        $data2=card::select('*')->where('user_id','=',$id)->get();
        $data=card::where('user_id',$id)->join('food','cards.food_id','=','food.id')->get();
        return view('showcart',compact('count','data','data2'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function remove($id)
    {
        $data=card::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function orderconfirm(Request $request)
    {
        foreach ($request->foodname as $key =>$foodname) {
            $data = new order;
            $data->foodname = $foodname;
            $data->foodprice = $request->foodprice[$key];
            $data->foodquantity = $request->foodquantity[$key];
            $data->name=$request->name;
            $data->phone=$request->phone;
            $data->address=$request->address;

            $data->save();
        }
        return redirect()->back();
    }

}
