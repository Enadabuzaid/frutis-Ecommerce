<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view('admin.product');
    }

    public function saveproduct(Request $request){
        $this->validate($request,[
            'product_name'=>'required',
            'price'=>'required',
            'category'=>'required',
            'image'=>'image|nullable',
            'status'=>'required',
            ]);

        
            if($request->hasFile('image')){
                $fileNameWithExt = $request->file('image')->getClientOriginalName();          
                $fileName= pathinfo( $fileNameWithExt , PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'.time().'_'.$extension;
                $path = $request->file('image')->storeAs('publice/product_images',$fileNameToStore);
            } else{
                $fileNameToStore = "noimage.jpg";
            }

            $product = new Product();
            $product->product_name = $request->input('product_name');
            $product->price = $request->input('price');
            $product->category = $request->input('category');
            $product->product_name = $request->input('image');
            if($request->input('status')){
                $product->status = 1;
            }  else{
                $product->status = 0;
            }
           
            $product->save();
            return redirect()
                ->back()
                ->with('success', 'The ' .$product->product_name. ' product has been saved successfully');

       
    }
}
