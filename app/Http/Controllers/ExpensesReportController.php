<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon; // Import Carbon for date manipulation


class ExpensesReportController extends Controller
{
    

    //CHART FOR MAIN
    public function index(Request $request)
{
    
    return view('admin.kuwago1.main');

}


//CHART FOR SALES

public function sales(Request $request){
    
    return view('admin.kuwago1.sales');


}

public function expenses(Request $request){
   
    return view('admin.kuwago1.expenses');


}

}

