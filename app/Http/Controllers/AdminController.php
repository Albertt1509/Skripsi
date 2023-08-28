<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.category',compact('data'));
    }
    public function order()
    {
        $order=order::all();
        return view('admin.order',compact('order'));
    }
    public function kirim($id)
    {
        $order=order::find($id);
        $order->delivery_status="Dikirimkan";
        $order->payment_status="Lunas";

        $order->save();

        return redirect()->back();
    }

    public function add_category(Request $request)
    {
        $data = new category;
        $data->category_nama = $request->category;

        if ($data->save()) {
            return redirect()->back()->with('success', 'Kategori Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Kategori Gagal di Input');
        }
    }

        public function delete_category($id)
        {
            $data = Category::find($id);

            if ($data) {
                if ($data->delete()) {
                    return redirect()->back()->with('success', 'Kategori Berhasil Dihapus');
                } else {
                    return redirect()->back()->with('error', 'Kategori Gagal Dihapus');
                }
            } else {
                return redirect()->back()->with('error', 'Kategori Tidak Ditemukan');
            }
        }


    public function view_product(){
        $category=category::all();
        return view ('admin.product',compact('category'));
    }
    public function add_product(Request $request){
        $product = new Product;
        $product->title = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->discount;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('product', $imagename);
            $product->image = $imagename;
        }

        if ($product->save()) {
        return redirect()->back()->with('success', 'Kamar Berhasil Ditambah');
        }
         else {
         return redirect()->back()->with('error', 'Kamar Berhasil Dihapus');
        
        }

       
    }
       public function show_product(){
        $product=product::all();
        return view ('admin.show',compact('product'));
    }
    public function update_produk($id)
    {
        $product = product::find($id);
      
        $category= category:: all();
         return view('admin.update',compact('product','category'));
        
        if ($product->save()) {
            return redirect()->back()->with('success', 'Kamar berhasil diupdate');
        } else {
            return redirect()->back()->with('error', 'Gagal mengupdate Kamar');
        }
    }
    public function delete_product($id)
    {
        $product = Product::find($id);

        
        if ($product->delete()) {
            return redirect()->back()->with('success', 'Kamar berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Gagal mengupdate Kamar');
        }
    }

    
    public function update_produk_confirm(Request $request,$id)
    {
        $product = Product::find($id);

        $product->title=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
      
      
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('product', $imagename);
            $product->image = $imagename;

        }
        $product->image=$imagename;

        $product->category=$request->category;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount;

        
        if ($product->save()) {
            return redirect()->back()->with('success', 'Kamar berhasil diupdate');
        } else {
            return redirect()->back()->with('error', 'Gagal mengupdate Kamar');
        }

        redirect()->route('admin.show');

        
    }

}