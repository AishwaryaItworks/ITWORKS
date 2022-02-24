<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $products=ProductCategory::get();
        return view('product',compact('products'));
    }
    //

    public function store(Request $request)
    {
            $values=$request->all();

            //for validation
            $this->validate($request,[
                'product_category_name'=>'required'
                
            ]);
            //end of validation
            $product=ProductCategory::create($values);
            //  dd($product);
            if($product)
            {
                toastr()->success('Record is added');
                return redirect('product');
            }
    }

    public function edit($id)
    {
        $product=ProductCategory::findorfail($id);
        return view('edit_product_category',compact('product'));
    }

    public function update(Request $request)
    {
        $input=$request->all();
        $searchInput['product_category_id']=$input['product_category_id'];
        ProductCategory::updateorcreate($searchInput,$input);
        toastr()->success('Record is updated');
        return redirect('product');

    }

    public function destroy($id)
    {
        ProductCategory::where('product_category_id',$id)->delete();
        toastr()->error('Record is deleted');
        return redirect('product');
        // dd($id);
    }
}
