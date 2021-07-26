<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;

class UserController extends Controller
{

    public function getKelas(){
        $kelas = DB::table('kelas')->select('nama_kelas','kode_matkul')->get();
        return view('dashboard.user.home',compact('kelas'));
    }
    public function getNilai(){
       $id = Auth::guard('web')->user()->id;
       $nilai = User::where('id',$id)->get();
       return view('dashboard.user.nilai',compact('nilai'));
    }

    public function printPdf(){
        $id = Auth::guard('web')->user()->id;
        $nilai = User::where('id',$id)->get();
        $html =  view('dashboard.user.printpdf',compact('nilai'));

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    function check(Request $request){
       $request->validate([
           'email'=>'required|email|exists:users,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'Email tidak ditemukan'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('web')->attempt($creds) ){
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect credentials');
        }
    }  
    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    } 
}
