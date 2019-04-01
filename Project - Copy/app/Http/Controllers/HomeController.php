<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Student;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pdf(){
    $data = Student::all();
    $pdf = PDF::loadView('pdf.invoice',$data);
    return $pdf->download('invoice.pdf');




    //  return view('pdf')->with('students',$students);
    }

}
