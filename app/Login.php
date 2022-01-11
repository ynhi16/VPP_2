<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
          'tenND', 'gioiTinh', 'ngaySinh', 'SDT', 'email', 'diaChi', 'taiKhoan', 'matKhau', 'maPX', 'maQuyen'
    ];
 
    protected $primaryKey = 'maND';
 	protected $table = 'nguoidung';
}
