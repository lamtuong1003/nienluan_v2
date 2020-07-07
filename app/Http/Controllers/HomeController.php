<?php

namespace App\Http\Controllers;

use App\User;
use App\Task;
use Illuminate\Http\Request;
use DB;
//use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Auth;
class HomeController extends Controller
{



    public function getSearch()
    {
        $batch = DB::table('users')->select('TenGV')->get();
        dd($batch);
        return view('login',compact('batch'));
    }

// Đăng nhập
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
//        $this->validate($req,
//            [
//                'email' => 'required|email',
//                'password' => 'required|min:6|max:20'
//            ],
//            [
//                'email.required' => 'Bạn chưa nhập email',
//                'email.email' => 'Email không đúng định dạng',
//                'password.required' => 'Bạn chưa nhập password',
//                'password.min' => 'Password không được nhỏ hơn 6 ký tự',
//                'password.max' => 'Password không được lớn hơn 320 ký tự'
//            ]
//        );
//        $credentials = array('email' => $req->email, 'password' => $req->password);
//        if (Auth::attempt($credentials)) {
//            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
//        }
//        else{
//                return redirect()->back()->with(['flag'=>'danger','message'=> 'Đăng nhập không thành công']);
//            }
//
        if(Auth::attempt(['EmailGV'=>$request->login_email, 'password'=>$request->login_password])){
            return redirect('/attendance');
        }else{
            return redirect('/')->with('mess_login','Email hoặc Mật khẩu không đúng');
        }
    }


        //Trả về view đăng kí
//    public function getSignin(){
//        return view('register');
//    }
    public function getAttendance()
    {
        $batch = DB::table('APTECH_DMLOP')->get(['LOP_ID']);
        $subject = DB::table('APTECH_DMMONHOC')->get(['MH_TEN','MH_ID']);
//        $course = DB::table('APTECH_DMKHOAHOC')->get(['KHOA_ID','KHOA_TEN']);
//        dd($request->lop);
//        $student_class = DB::table('APTECH_DMSINHVIEN')->where('LOP_ID','CP1196C1')->get();
//        dd($student_class);
        return view('Diemdanh',compact('batch','student_class','subject'));
    }
    public function getstudentClass(Request $request){
//        $idclass = $request->lop;
        $id_class = $request->get('id_class');
//        $id_class = 'CP1696G03';
        $student_class = DB::table('APTECH_DMSINHVIEN')->where('LOP_ID',$id_class)->get();
        return response()->json($student_class);
    }
//      form đăng kí user là giáo viên

//    public function postSignin(Request $req)
//    {
//        $this ->validate($req,[
//            'email' => 'required|EmailGV|unique:users,EmailGV ',
//            'password' => 'required|min:3|max:32',
//            'fullname'=>'required',
//            're_password'=>'required|same:password'
//        ],
//            [
//            'email.required'=>'Bạn chưa nhập email',
//            'password.required'=>'Bạn chưa nhập password',
//            're_password'=>'Mật khẩu không giống nhau',
//            'password.min'=>'Password không được nhỏ hơn 3 ký tự',
//            'password.max'=>'Password không được lớn hơn 32 ký tự'
//            ]);
//        $user= new Task();
//        $user -> TenGV = $req -> fullname;
//        $user -> SDTGV = $req -> phonenumber;
//        $user -> EmailGV = $req -> email;
//        $user -> password = Hash::make($req->password);
//        $user -> Gioitinh =$req -> gender;
//        $user -> save();
//        return redirect() -> back ->with('thanhcong','Successed');
//    }
    public function getListChecking(){
        $listchecking = DB::table('nhcusvv9_thuctapdb.DDanh')->get();
//        dd($listchecking);
        return view('listchecking',compact('listchecking'));
    }


}
