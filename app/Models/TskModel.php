<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TskModel extends Model
{
    protected $table = 'tsk';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_lengkap', 'tgl_checkin', 'tgl_checkout', 'tipe_ruang', 'total', 'status'];
}
