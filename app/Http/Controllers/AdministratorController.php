<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.config.adm',[
            'title' => 'Administrator',
            'active' => 'user',
            'user' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        dd($request);
        $id = $request->user_id;
        $is_admin = $request->role;

        if ($is_admin == 1) {
            $role = 1;
            DB::table('users')->where('id', $id)->update(['is_admin' => $role]);
        }elseif ($is_admin == 2) {
            $role = 2;
            DB::table('users')->where('id', $id)->update(['is_admin' => $role]);
        }elseif ($is_admin == 3) {
            $role = 3;
            DB::table('users')->where('id', $id)->update(['is_admin' => $role]);
        }elseif ($is_admin == 4) {
            $role = 4;
            DB::table('users')->where('id', $id)->update(['is_admin' => $role]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
