<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Lecturer;
use app\Account;

class AdminController extends Controller
{


    public function getLecturer(){
        $lecturers = Lecturer::paginate(5);
        return view('dashboard.admin.datadosen', compact('lecturers'));
    }

    public function getStudent(){
        $users = User::paginate(5);
        return view('dashboard.admin.datamahasiswa', compact('users'));
    }
     public function getKelas(){
        $kelas = Kelas::paginate(5);
        $nilai = User::paginate(5);
        // $kelas = DB::table('kelas')->select('nama_kelas','kode_matkul','kode_kelas','nip_dosen_Pengajar','sks','nilai')->get();
        return view('dashboard.admin.datakelas', compact('kelas','nilai'));
    }

    // create data
    public function createMahasiswa(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
            'tglhr' => $request->tglhr,
            'email' => $request->email,
            'password' => \Hash::make($request->password), 
        ]);

        return redirect('admin/student')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    public function createKelas(Request $request){
        // dd($request->all());
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kode_matkul' => $request->kode_matkul,
            'kode_kelas' => $request->kode_kelas,
            'nilai' => $request->nilai,
            'id_lecturer' => $request->id_lecturer,
            'sks' =>$request->sks,
        ]);
        return redirect('admin/kelas')->with('success', 'kelas berhasil ditambahkan!');
    }

    public function createDosen(Request $request){
         // dd($request->all());
        Lecturer::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'tglhr' => $request->tglhr,
            'email' =>$request->email,
            'password' => \Hash::make($request->password), 
        ]);
        return redirect('admin/lecturer')->with('success', 'Dosen berhasil ditambahkan!');
    }

    public function tambahKelas(){
        return view('dashboard.admin.create.create-data-kelas');
    }

    public function tambahDosen(){
        return view('dashboard.admin.create.create-data-dosen');
    }

    public function tambahMahasiswa(){
        return view('dashboard.admin.create.create-data-mahasiswa');
    }

    //edit data
    public function showEditMahasiswa($id){
         $mhs = User::findorfail($id);
        return view('dashboard.admin.edit.edit-data-mahasiswa',compact('mhs'));
    }
    public function editMahasiswa(Request $request,$id){
        $mhs = User::find($id)->update($request->all()); 
         return redirect('admin/student')->with('toast_success', 'Data berhasil diperbaharui!');
    }

    public function showEditDosen($id){
         $dosen = Lecturer::findorfail($id);
        return view('dashboard.admin.edit.edit-data-dosen',compact('dosen'));
    }
    public function editDosen(Request $request,$id){
         $dosen = Lecturer::find($id)->update($request->all()); 
         // return redirect('admin/student')->with('toast_success', 'Data berhasil dikirim!');
         return redirect('admin/lecturer')->with('toast_success', 'Data berhasil diperbaharui!');
    }
    public function showEditKelas($id){
         $kelas = Kelas::findorfail($id);
        return view('dashboard.admin.edit.edit-data-kelas',compact('kelas'));
    }
    public function editKelas(Request $request,$id){
        $kelas = Kelas::find($id)->update($request->all());
        return redirect('admin/kelas')->with('toast_success', 'Data berhasil diperbaharui!');
    }

    //delete data

    public function destroyMahasiswa($id){
        $mhs = User::findorfail($id);
        $mhs->delete();
        return back()->with('info', 'Data berhasil dihapus');
    }
    public function destroyDosen($id){
        $dosen = Lecturer::findorfail($id);
        $dosen->delete();
        return back()->with('info', 'Data berhasil dihapus');
    }
    public function destroyKelas($id){
        $kelas = Kelas::findorfail($id);
        $kelas->delete();
        return back()->with('info', 'Data berhasil dihapus');
    }
    

    //checking

    function check(Request $request){
         //Validate Inputs
         $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists in admins table'
         ]);

         $creds = $request->only('email','password');

         if( Auth::guard('admin')->attempt($creds) ){
             return redirect()->route('admin.home');
         }else{
             return redirect()->route('admin.login')->with('fail','Incorrect credentials');
         }
    }


    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    } 
}
