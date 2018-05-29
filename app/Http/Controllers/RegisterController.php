<?php
/**
 * Created by PhpStorm.
 * User: Quoc Anh
 * Date: 5/11/2018
 * Time: 8:40 AM
 */

namespace App\Http\Controllers;


use App\Student;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function add(){
        $student = new Student();
        $student->name = "Quoc Anh";
        $student->phone = "32412";
        $student->email = "asd@gmail.com";
        $student->save();
        return 'Đăng ký thành công';
    }
    public function update(){
        DB::update('update ');
        return 'Cập nhật thành công';
    }
    public function delete(){
        return 'Xóa thành công';
    }
}