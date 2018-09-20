<?php

namespace App\Http\Controllers\doctor;

use App\Hospital;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HospitalCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('doctor');
    }

    public function index()
    {
        $data = Hospital::orderBy('name','asc')->paginate(30);
        return view('doctor.hospital',[
            'data' => $data
        ]);
    }

    public function saveHospital(Request $req)
    {
        $chkUsername = User::where('username',$req->username)->first();
        if($chkUsername)
            return redirect()->back()->with('duplicate',$_POST);
        $u = new User();
        $u->username = $req->username;
        $u->password = bcrypt($req->password);
        $u->level = 'hospital';
        $u->status = 1;
        $u->save();

        $user = Session::get('user');
        $h = new Hospital();
        $h->doctorId = $user->id;
        $h->userId = $u->id;
        $h->name = $req->hospitalName;
        $h->address = $req->address;
        $h->contactPerson = $req->contactPerson;
        $h->contactNumber = $req->contactNumber;
        $h->dateExpire = date('Y-m-d',strtotime('+1 day'));
        $h->save();

        return redirect()->back()->with('added',true);
    }

    public function info($id)
    {
        $info = Hospital::select('hospitals.*','hospitals.id as hospitalId','users.*')
                ->where('hospitals.id',$id)
                ->join('users','users.id','=','hospitals.userId')
                ->first();
        return $info;
    }

    public function update(Request $req,$id)
    {

    }
}
