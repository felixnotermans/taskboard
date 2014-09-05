<?php

class UsersController extends BaseController {
	protected $layout = "layouts.master";
	

	public function getRegister() {
		$this->layout->content = View::make('users.register');
	} 

	public function postCreate() {
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
			$user = new User;
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::to('users/login')->with('message', 'Thanks for registering!');
		} else {
        	return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();   
		}
	}

	public function login() {
		$this->layout->content = View::make('users.login');
	}

	public function signIn() {

		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			$username = Input::get('email');
			return Redirect::to('users/taskboard')->with('message', "You are now logged in {$username}!");
		} else {
			return Redirect::to('users/login')
			->with('message', 'Your username/password combination was incorrect', 'username')
			->withInput();
		}
	}

	public function logout() {
    	Auth::logout();
    	return Redirect::to('users/login')->with('message', 'Your are now logged out!');
	}

}
?>