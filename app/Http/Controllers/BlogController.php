<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Content;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $blogs = Blog::latest()->paginate(3);
        $recents = Blog::all();
        return view('blog',[
            'blogs'=>$blogs,
            'recents'=>$recents->shuffle(),

        ]);
    }
    public function blogDetail($id, $name){
        $detail = Blog::find($id);
        $recents = Blog::where('id','!=',$id)->get();
        return view('blogDetail',[
            'detail'=>$detail,
            'recents'=>$recents->shuffle(),
        ]);
    }
    public function addBlog(){
        return view('admin.addBlog');
    }
    public function adminBlog(){
        $contents = Blog::latest()->paginate(6);
        return view('admin.blog',[
            'contents'=>$contents
        ]);
    }
    public function storeBlog(Request $request){
        $pictures = new Blog();
        $pictures->title = $request->input('title');
        $pictures->detail = $request->input('detail');
        $pictures->link = $request->input('link');
        $pictures->linkName = $request->input('linkName');
        $pictures->detailOne = $request->input('detailOne');
        $pictures->linkNameOne = $request->input('linkNameOne');
        $pictures->linkOne = $request->input('linkOne');
        $pictures->quote = $request->input('quote');
        $pictures->quoteAuthor = $request->input('quoteAuthor');
        $pictures->detailTwo = $request->input('detailTwo');
        $pictures->linkNameTwo = $request->input('linkNameTwo');
        $pictures->linkTwo = $request->input('linkTwo');
        $pictures->detailThree = $request->input('detailThree');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->image = $filename;
        }

        $pictures->save();


        return redirect()->back()->with('success','Blog Added Successfully');
    }
}
