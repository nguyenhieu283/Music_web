<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class SignUp extends Controller{
	public function register(){
		$user = $_POST['UserName'];
		$pass = $_POST['password'];
		$email = $_POST['Email'];
		$date = $_POST['Date'];
		$name = $_POST['Name'];
		$account = DB::table('Accounts')->insert(['User' => $user, 'Pass' => $pass, 'Email' => $email, 'Date' => $date, "Name" => $name]);
		if($account){
			// if insert successful
			return redirect()->route('home');
		}
		else{
			// update flashed session and redirect to Login.blade.php
			return redirect('SignUp')->with('status', 'SignUp failed');

		}

	}
}
