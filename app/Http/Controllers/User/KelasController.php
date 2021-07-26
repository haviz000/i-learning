<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function __construct(){
        $this->Kelas = new Kelas();
    }

    public function index(){
        $data = [ 
            'kelas' => $this->Kelas->allData(); 
        ];
        return view('dashboard.admin.datakelas',$data);
    }
}
