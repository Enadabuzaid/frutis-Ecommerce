<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categroy(){
        $categories = Category::get();
        return view('admin.category')->with('categories',$categories);
    }


    public function saveCategory(Request $request)
    {
        $this->validate($request,['category_name'=>'required']);

        $checkcat = Category::where('category_name', $request->input('category_name'))->first();
        $category=new Category();
        if (!$checkcat){
            $category->category_name = $request->input('category_name');
            $category->save();
            return redirect()
                ->back()
                ->with('success', 'The ' .$category->category_name. ' category has been saved successfully');
        } else{
            return redirect()
                ->back()
                ->with('wrong', 'The ' .$request->input('category_name'). ' already exist');
        }
    }


    public function edit($id){
            $category= Category::find($id);
            return view('admin.editcategory')->with('category',$category);
    }

    public function updateCategory(Request $request){
        $category=Category::find($request->input('id'));

        $category->category_name = $request->input('category_name');
        $category->update();
        return redirect()
            ->back()
            ->with('success', 'The ' .$category->category_name. ' category has been updated successfully');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()
            ->back()
            ->with('success', 'The ' .$category->category_name. ' category has been deleted successfully');

    }
}
