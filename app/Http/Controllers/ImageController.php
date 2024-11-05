<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layout.admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'image' => 'required|mimes:jpg,jpeg,png,heic,gif|max:10000',
        ]);
        if($request->hasFile('image')){
        $request->file('image')->store('public');
        }
        return redirect()->back()->with('success', 'Upload successful');
    }

   
}
