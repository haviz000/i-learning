<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LecturerController extends Controller
{
    public function getStudent(){
        $users = User::paginate(5);
        $kelas = Kelas::paginate(5);
        return view('dashboard.lecturer.penilaian', compact('users','kelas'));
    }

    public function showEditNilai($id){
        $nilai = User::findorfail($id);
        $kelas = Kelas::all();
        return view('dashboard.lecturer.edit-data-nilai',compact('nilai','kelas'));
    }

    public function editNilai(Request $request,$id){
        $nilai = User::findorfail($id)->update($request->all()); 
        return redirect('lecturer/penilaian')->with('toast_success', 'Nilai Berhasil dikirim!');
    }
            
    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:lecturers,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in Lecturer table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('lecturer')->attempt($creds) ){
            return redirect()->route('lecturer.home');
        }else{
            return redirect()->route('lecturer.login')->with('fail','Incorrect Credentials');
        }
    }
    function logout(){
        Auth::guard('lecturer')->logout();
        return redirect('/');
    }
}
