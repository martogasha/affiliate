<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Models\Contact;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        $content = Content::where('placement','one')->latest('id')->first();
        $two = Content::where('placement','two')->latest('id')->first();
        $three = Content::where('placement','three')->latest('id')->first();
        $four = Content::where('placement','four')->latest('id')->first();
        return view('welcome',[
            'content'=>$content,
            'two'=>$two,
            'three'=>$three,
            'four'=>$four
        ]);
    }
    public function add(){
        return view('admin.add');
    }
    public function admin(){
        $contents = Content::latest()->get();
        return view('admin.admin',[
            'contents'=>$contents
        ]);
    }
    public function Products(){
        $contents = Content::latest()->get();
        return view('admin.product',[
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
        return redirect(url('products'))->with('success','Content Posted Success');
    }
    public function edit($id){
        $edit = Content::find($id);
        return view('admin.edit',[
            'edit'=>$edit
        ]);
    }
    public function editBlog($id){
        $edit = \App\Models\Blog::find($id);
        return view('admin.editBlog',[
            'edit'=>$edit
        ]);
    }
    public function eBlog(Request $request){
        $edit = \App\Models\Blog::find($request->id);
        $edit->title = $request->input('title');
        $edit->detail = $request->input('detail');
        $edit->link = $request->input('link');
        $edit->linkName = $request->input('linkName');
        $edit->detailOne = $request->input('detailOne');
        $edit->linkNameOne = $request->input('linkNameOne');
        $edit->linkOne = $request->input('linkOne');
        $edit->quote = $request->input('quote');
        $edit->quoteAuthor = $request->input('quoteAuthor');
        $edit->detailTwo = $request->input('detailTwo');
        $edit->linkNameTwo = $request->input('linkNameTwo');
        $edit->linkTwo = $request->input('linkTwo');
        $edit->detailThree = $request->input('detailThree');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $edit->image = $filename;
        }

        $edit->save();


        return redirect()->back()->with('success','Blog Edited Successfully');

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
        $pictures->product_link = $request->input('product_link');
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
    public function contact(Request $request){
        $output="";
        $add = Contact::create([
           'name'=>$request->input('name'),
           'email'=>$request->input('email'),
        ]);
        return response($output);
    }
    public function signUp(){
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts',[
            'contacts'=>$contacts
        ]);
    }
}
