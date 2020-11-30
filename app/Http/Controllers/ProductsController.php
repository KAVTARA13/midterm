<?php

namespace App\Http\Controllers;
use App\Products;
use App\Comments;
use App\Message;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
    	$products=Products::get();
    	return view("guest.index",["products"=>$products]);

    }
    public function product()
    {
    	$products=Products::get();
    	return view("guest.product",["products"=>$products]);

    }
    public function single($id)
    {
    	$products=Products::where('id',$id)->firstOrFail();
        $comments=Comments::where('product_id',$id)->get();
    	return view("guest.single",["products"=>$products,"comments"=>$comments]);

    }
     public function comment(Request $request)
    {
        Comments::create([
            "product_id"=>$request->input("product_id"),
            "name"=>$request->input("name"),
            "comment"=>$request->input("comment")
        ]);
        return redirect()->back();
    }

    public function message(Request $request)
    {
        Message::create([
            "name"=>$request->input("name"),
            "surname"=>$request->input("surname"),
            "mail"=>$request->input("mail"),
            "text"=>$request->input("text")
        ]);
        return redirect()->back();
    }

    public function adminIndex()
    {
        $products=Products::get();
        $message=Message::get();
        return view("admin.index",["products"=>$products,"message"=>$message]);
    }
    public function adminStore(Request $request)
    {
        Products::create([
            "img"=>$request->input("img"),
            "title"=>$request->input("title"),
            "price"=>$request->input("price"),
            "inStock"=>$request->input("inStock"),
            "code"=>$request->input("code"),
            "brand"=>$request->input("brand"),
            "type"=>$request->input("type"),
            "model"=>$request->input("model"),
            "caliber"=>$request->input("caliber"),
            "weight"=>$request->input("weight"),
            "length"=>$request->input("length"),
            "cartridgeNumber"=>$request->input("cartridgeNumber"),
            "manufacturer"=>$request->input("manufacturer"),
            "tight"=>$request->input("tight")
        ]);
        return redirect()->route("admin");
    }
    public function delete(Request $request)
    {
        Products::where('id',$request->input('id'))->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $products=Products::where('id',$id)->firstOrFail();
        return view('admin.edit',['products'=>$products]);
    }
    public function update(Request $request)
    {
        Products::where('id',$request->input('id'))->update([
            "title"=>$request->input("title"),
            "price"=>$request->input("price"),
            "inStock"=>$request->input("inStock"),
            "code"=>$request->input("code"),
            "brand"=>$request->input("brand"),
            "type"=>$request->input("type"),
            "model"=>$request->input("model"),
            "caliber"=>$request->input("caliber"),
            "weight"=>$request->input("weight"),
            "length"=>$request->input("length"),
            "cartridgeNumber"=>$request->input("cartridgeNumber"),
            "manufacturer"=>$request->input("manufacturer"),
            "tight"=>$request->input("tight")
        ]);
        return redirect()->route("admin");
    }
}
