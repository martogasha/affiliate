<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        $content = Content::where('placement','one')->first();
        $two = Content::where('placement','two')->first();
        $three = Content::where('placement','three')->first();
        $four = Content::where('placement','four')->first();
        return view('welcome',[
            'content'=>$content,
            'two'=>$two,
            'three'=>$three,
            'four'=>$four
        ]);
    }
    public function add(){
        return view('add');
    }
    public function admin(){
        $contents = Content::all();
        return view('admin',[
            'contents'=>$contents
        ]);
    }
    public function store(Request $request){
        $pictures = new Content();
        $pictures->placement = $request->input('placement');
        $pictures->product_name = $request->input('product_name');
        $pictures->product_desc = $request->input('product_desc');
        $pictures->amazon_link = $request->input('amazon_link');
        $pictures->ebay_link = $request->input('ebay_link');
        $pictures->image_one = $request->input('image_one');
        $pictures->image_two = $request->input('image_two');
        if ($request->image_one) {
            $file = $request->file('image_one');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->image_one = $filename;
        }
        if ($request->image_two) {
            $file = $request->file('image_two');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->image_two = $filename;
        }
        $pictures->save();
        return redirect(url('admin'))->with('success','Content Posted Success');
    }
    public function edit($id){
        $edit = Content::find($id);
        return view('edit',[
            'edit'=>$edit
        ]);
    }
    public function detail($id,$name,$cat){
        $detail = Content::find($id);
        return view('detail',[
            'detail'=>$detail
        ]);
    }
    public function delC(Request $request){
        $delete = Content::find($request->id);
        $delete->delete();
        return redirect()->back()->with('success','Content Deleted Success');
    }
    public function editC(Request $request){
        $pictures = Content::find($request->id);
        $pictures->placement = $request->input('placement');
        $pictures->product_name = $request->input('product_name');
        $pictures->product_desc = $request->input('product_desc');
        $pictures->amazon_link = $request->input('amazon_link');
        $pictures->ebay_link = $request->input('ebay_link');
        if ($request->image_one) {
            $file = $request->file('image_one');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->image_one = $filename;
        }
        if ($request->image_two) {
            $file = $request->file('image_two');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->image_two = $filename;
        }
        $pictures->save();
        return redirect(url('admin'))->with('success','Content Edited Success');
    }
}