<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Exports\UserExport;
use App\Imports\UserImport;
use Illuminate\Http\Request;
use App\Imports\UserDetailImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service.index', [
            'title' => 'Service Data Master',
            'kelas' => Kelas::all()
        ]);
    }

    public function UserImport(Request $request)
    {

        $file = $request->userImport->store('/import', 'public');

        $data = Excel::import(new UserImport, \storage_path('/app/public/' . $file));
        
        return redirect()->back()->with('success', 'Data berhasil di import!');
    }

    public function UserExport()
    {
        return Excel::download(new UserExport, 'users-' . date('m-d-Y') . '.xlsx');

        return redirect()->back()->with('success', 'Data berhasil di export!');
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
        //
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
