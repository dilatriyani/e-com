<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category()
    {
        $data= Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
       $data=new Category;
       $data->category_name=$request->category;

       $data->save();
       
       return back()->with('message', 'Category Added successfuly');
       
    }

    public function destroy($id)
    {
        $data = Category::where("id", $id)->first();
        $data->delete();
    
        return back()->with('message','Category Deleted Successfully');
    }

    public function view_product()
    {
        $category=category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        $product=new Product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->dis_price;
        $product->category=$request->category;
       
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
        $product->save;

        
        return back();
    }
}
