<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reportcontroller extends Controller
{
    public function Report1()
    {
        // $data = DB::table('offices')->where('country','USA')->get();
        // echo $data->count();
        // echo "<pre>";
        // print_r($data);
        // return view('reports.reports1', compact('data'));


        //2 ,   $data = DB::table('employees')->where('officeCode',3)->get();

        // jader office code 3 tader dekhaw
        // $data = DB::table('employees')->whereIn('officeCode',[1,2,3])->get();
        // wherein jader office code 1,2,3 tader dekhaw


        //   $data = DB::table('employees')->whereIn('officeCode',[1,2,3])->where("jobTitle","Sales Rep")->get();
        //3  Jader office code 123 and jader jobtitle = sales rep


        //4 ######  $data = DB::table('employees')->select(DB::raw('CONCAT(firstName," " ,lastName) AS Fullname'),'email','jobTitle')->get();
            //   firstnaem and lastname aksathe add kora

    //   $data = DB::table('employees')->select(DB::raw('count(employeeNumber)'));
    // //    employenumber total count
          
    //     $result = $data->get();
    //             echo "<pre>";
    //     print_r($result);  


    //4   $data = DB::table('employees')->select(DB::raw('count(employeeNumber)'),'jobTitle')->groupBy('jobTitle');
    //    employenumber total count and jobtitle 



        //5   $data = DB::table('employees')->where('officeCode', 3)->orWhere('officeCode', 5);


        //   $data = DB::table('employees')->whereBetween('officeCode',[1,3]);

          $data = DB::table('employees','offices')->whereRaw('employees.officeCode','offices.officeCode');
        $result = $data->get();
                echo "<pre>";
        print_r($result);  

        // where in hole whereIn('officeCode',[1,2,3] bole dite hobe
        // where in hole whereBetween('officeCode',[1,5] bole dite hobe
    }
}
