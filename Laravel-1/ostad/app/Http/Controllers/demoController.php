<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Input\Input;

class demoController extends Controller
{
    function demoAction(Request $request):int
    {
        $num1=$request->num1;
        $num2=$request->num2;
        $sum=$num1+$num2;
        Log::info($sum);

        return $sum;

       
    }
    
    }


      

