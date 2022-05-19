<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\sefty;
use Illuminate\Http\Request;

class SeftyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seaftys = sefty::latest()->get(['id', 'title', 'image', 'status']);
        return view('admin.sefty.index', compact('seaftys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sefty.createOrUpdate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = array();
        if ($request->hasFile('image')) {
            foreach ($request->image as $key => $photo) {
                $path = $photo->store('news/photos');
                array_push($image, $path);
            }
        }

        $seafty = sefty::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => json_encode($image),
        ]);
        return redirect()->route('admin.seafty.index')->with('success', 'Seafty Added SuccessFully..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = sefty::find($id);
        return view('admin.sefty.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $edit = sefty::find($id);
        return view('admin.sefty.createOrUpdate', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = sefty::find($id);
        $update->title = $request->title;
        $update->description = $request->description;
        if($request->image){
            $image = array();
            if ($request->hasFile('image')) {
                foreach ($request->image as $key => $photo) {
                    $path = $photo->store('news/photos');
                    array_push($image, $path);
                }
                $update->image = json_encode($image);
            }
        }else{
            $update->image = $update->image;
        }
        $update->save();
        return redirect()->route('admin.seafty.index')->with('info', 'Seafty Updated SuccessFully..!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sefty::find($id)->delete();
        return redirect()->route('admin.seafty.index')->with('success', 'Seafty Deleted SuccessFully..!');
    }
}
