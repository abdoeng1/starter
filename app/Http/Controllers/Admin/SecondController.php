<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
   public function __construct(){
       $this ->middleware(middleware: 'auth');
   }

    public function showNumber(){
        return 1;
    }
    public function showString(){
        return 'srting';
    }
}
