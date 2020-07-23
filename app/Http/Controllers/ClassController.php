<?php

namespace App\Http\Controllers;

use App\Class_;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    function __construct()
    {
        $this->middleware('permission:classes-list|classes-create|classes-edit|classes-delete', ['only' => ['index','show']]);
        $this->middleware('permission:classes-create', ['only' => ['create','store']]);
        $this->middleware('permission:classes-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:classes-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Class_::latest()->paginate(5);
        return view('teacher.classes.index',compact('classes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'cls_name' => 'required',
            'cls_desc' => 'required',
            'cls_address' => 'required',
        ]);

        Class_::create($request->all());

        return redirect()->route('teacher.classes.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Class_  $class_
     * @return \Illuminate\Http\Response
     */
    public function show(Class_ $class_)
    {
        return view('teacher.classes.show',compact('class_'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Class_  $class_
     * @return \Illuminate\Http\Response
     */
    public function edit(Class_ $class_)
    {
        return view('teacher.classes.edit',compact('class_'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Class_  $class_
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Class_ $class_)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $class_->update($request->all());

        return redirect()->route('teacher.classes.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Class_ $class_
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Class_ $class_)
    {
        $class_->delete();

        return redirect()->route('teacher.classes.index')
            ->with('success','Product deleted successfully');
    }
}
