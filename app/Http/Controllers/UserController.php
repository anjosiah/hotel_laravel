<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\TskModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function test()
    {
        return view('user.test');
    }

    public function history()
    {

        $tsk = DB::table('tsk')->where('nama_lengkap', '=', auth()->user()->name)->get();
        return view('user.history', ['tsk' => $tsk]);
    }

    public function registeruser()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        $user = new \App\Models\User;
        $user->name = $request->name;
        $user->no_telp = $request->no_telp;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->tgl_lahir = $request->tgl_lahir;
        $user->tipe_user = $request->tipe_user;
        $user->remember_token = Str::random(60);
        $user->save();
        return redirect('/userlogin');
    }

    public function addtsk(Request $request)
    {
        $tsk = new \App\Models\TskModel;
        $tsk->nama_lengkap = $request->nama_lengkap;
        $tsk->tgl_checkin = $request->tgl_checkin;
        $tsk->tgl_checkout = $request->tgl_checkout;
        $tsk->tipe_ruang = $request->tipe_ruang;
        if ($tsk->tipe_ruang == 'Single Bed') {
            $tsk->total = '150000';
        } elseif ($tsk->tipe_ruang == 'Double Bed') {
            $tsk->total = '150000';
        } elseif ($tsk->tipe_ruang == 'Queen Bed') {
            $tsk->total = '200000';
        } elseif ($tsk->tipe_ruang == 'King Bed') {
            $tsk->total = '300000';
        }
        $tsk->status = 'Belum Check-In';
        $tsk->save();
        return redirect('/index');
    }
}
