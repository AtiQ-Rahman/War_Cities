<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tournament;
use Auth;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('organizer_id',Auth::user()->id)->get();
        return view('admin.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add_user(Request $request)
    {
        $add = new User;
        $add->name = $request->name;
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->password = Hash::make($request->password);
        $add->type = 'user';
        $add->organizer_id = Auth::user()->id;
        $add->save();

        return back();
    }

    public function tournament()
    {
        $data = Tournament::where('organizer_id',Auth::user()->id)->get();
        return view('admin.tournament',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add_tournament(Request $request)
    {
        $add = new Tournament;
        $add->name = $request->name;
        $add->streaming_link = $request->streaming_link;
        $add->organizer_id = Auth::user()->id;
        $add->save();

        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
