<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resource = "Categories";
        
        $action = $pageTitle = "All Categories";
        $categories = Category::all()->sortBy('category_name');
        return view('admin.category.index',compact('categories','pageTitle','resource','action'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Create Category";
        return view('admin.category.create',compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'string|required|unique:categories'
        ]);

        $data = [
            'category_name'=>$request->category_name,
            'status'=>$request->status,
            'uniqueid'=>str()->random(7),
            'created_by'=>auth()->user()->id
        ];

        if(Category::create($data)){
            $message = ['message'=>'Category Created Successfully','type'=>'success'];    
            return redirect()->route('admin.category.list')->with($message);
        }
        else{
            $message = ['message'=>'An Error Occured','type'=>'error'];
            return back()->with($message);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if($category->delete()){
            return redirect(route('admin.category.list'))->with(['message'=>'Category Deleted Successfully','type'=>'success']);
        }
        else{
            return back()->with(['message'=>'An Error Occured Please try again','type'=>'error']);
        }
    }
}
