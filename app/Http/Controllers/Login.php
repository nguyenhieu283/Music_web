<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class Login extends Controller{
	public function check(){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$rows_effect = DB::table('Accounts')->where('User', '=', $user)->where('Pass', '=', $pass)->count();

		if($rows_effect == 1){
			$_SESSION['user'] = $user;
			$_SESSION['failed'] = null;
			return redirect()->route('home');

		}
		else{

			// update flashed session and redirect to Login.blade.php
			return redirect('Login')->with('status', 'Login failed. User or password is not correct');

		}

	}
}
