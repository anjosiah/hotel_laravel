<?php

namespace App\Http\Controllers;

use App\Models\TskModel;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index()
    {
        $tsk = TskModel::all();
        return view('admin.index', ['tsk' => $tsk]);
    }

    public function add(Request $request)
    {
        TskModel::create($request->all());
        return redirect('/database');
    }

    public function updatestatus($id_tsk)
    {
        $tsk = TskModel::find($id_tsk);
        if ($tsk) {
            $timestamp = now();
            $tsk->status = 'Sudah Check-In';
            $tsk->wkt_checkin = $timestamp;
            $tsk->save();
        }
        return redirect('/database');
    }

    public function deletestatus($id_tsk)
    {
        $tsk = TskModel::find($id_tsk);
        $tsk->delete($tsk);
        return redirect('/database');
    }
}
