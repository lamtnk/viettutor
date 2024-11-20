<?php
namespace App\Service\Client;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterService {
    public function index(){
        return view('client.login');
    }
public function register(Request $request){
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password =  bcrypt($request->password);
    $user->save();
    return redirect()->route('home.index')->with('success','Đăng kí thành công');
}
}