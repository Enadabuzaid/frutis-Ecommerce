<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $products =Product::all();
        $category =Category::all();
        return view('admin.product')->with('products',$products);
    }

    public function saveproduct(Request $request){

//        $this->validate($request,[
//            'product_name'=>'required',
//            'price'=>'required',
//            'category'=>'required',
//            'image'=>'image|nullable',
//            ]);

        if ($request->input('category')){

            if($request->hasFile('image')){

                $fileNameWithExt = $request->file('image')->getClientOriginalName();

                $fileName= pathinfo( $fileNameWithExt , PATHINFO_FILENAME);

                $extension = $request->file('image')->getClientOriginalExtension();

                $fileNameToStore = $fileName.'_'.time().'.'.$extension;

                $path = $request->file('image')->storeAs('public/product_images',$fileNameToStore);
            } else{
                $fileNameToStore = "noimage.jpg";
            }

            $product = new Product();
            $product->product_name = $request->input('product_name');
            $product->price = $request->input('price');
            $product->category = $request->input('category');
            $product->image = $fileNameToStore;
            $product->status =1 ;

            $product->save();
            return redirect('/addproduct')

                ->with('success', 'The ' .$product->product_name. ' product has been saved successfully');

        } else {
            return redirect()
                ->back()
                ->with('wrong', 'Do select the category');
        }



    }
}
