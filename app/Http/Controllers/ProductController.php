<?php
/**
 * Created by PhpStorm.
 * User: Quoc Anh
 * Date: 5/16/2018
 * Time: 10:05 AM
 */
namespace App\Http\Controllers;


use App\Product;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller{
    public function index(){
        $list_product = Product::all();
        return \view('product_list') -> with('list_product', $list_product);
    }
}