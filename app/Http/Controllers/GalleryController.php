<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = auth()->user()->galleries;
        return view('galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'caption' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // if ($request->hasFile('image')) {
        //     Gallery::create([
        //         'user_id' => auth()->id(),
        //         'caption' => $request->input('caption'),
        //         'image' => $request->file('image')->store('galleries', 'public')
        //     ]);
        //     // auth()->user()->galleries->create([
        //     //     'caption' => $request->input('caption'),
        //     //     'image' => $request->file('image')->store('galleries', 'public'),
        //     // ]);
        //     //TODO:SOLVE: create Http/Requests (create, update) for store-like-EventItem-Controller
        //     return to_route('galleries.index');
        // }
        // return back();
        $this->validate($request, [
            'caption' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        
        // if($request->file('image')) {
        // $path = $request->file('image')->store('public/images');
        
        // if ($request->hasFile(key: 'image')) {
        
        //     $img = $request->file(key: 'image')->store(options: 'public');
        // }
        // $gallery = new Gallery([
        //     'caption' => $request->input('caption'),
        //     'desc' => $request->input('desc'),
        //     'image' => $img ??= "jojjo"
        // ]);
        if ($request->hasFile('image')) {
            $img = $request->file('image')->store('galleries', 'public');
        } 
        else {
            $img = 'assets/announcement-default.png'; // replace with your default image path
        }
        
        $gallery = new Gallery([
            'caption' => $request->input('caption'),
            'desc' => $request->input('desc'),
            'image' => $img
        ]);
        
        $request->user()->galleries()->save($gallery);
        return redirect()->route('galleries.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        // $path = $gallery->image;
        $this->validate($request, [
            'caption' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // if($gallery->image) {
            //     Storage::delete($gallery->image);
            // }
            // $img = $request->file('image')->store('galleries', 'public');
            
            if ($request->hasFile('image')) {
                $img = $request->file('image')->store('galleries','public');
            } else {
                $img = $gallery->image; 
            }

            $gallery->update([
                'caption' => $request->input('caption'),
                'desc' => $request->input('desc'),
                'image' => $img
            ]);

            return redirect()->route('galleries.index');
}

        // return to_route('galleries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if($gallery->image) {
            // Storage::delete($gallery->image);
        }
        $gallery->delete();
        return back();
    }
}