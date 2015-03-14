<?php
class UsersController extends BaseController {
	protected $layout = "layouts.main";
	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('getDashboard','getMenu')));
		$this->routeParamters = Route::current()->parameters();
	}
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
	public function getLogin() {
		$this->layout->content = View::make('users.login');
	}
	public function postSignin() {
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			//let's track our user's so we know what they are up to :)
			$userTracker = new UserTracker;
			$userTracker->firstname = Auth::user()->firstname;
			$userTracker->lastname = Auth::user()->lastname;
			$userTracker->email = Auth::user()->email;
			$userTracker->ipaddress = Request::getClientIp();
			$userTracker->save();

			return Redirect::to('users/menu')->with('message', 'You are now logged in!');
		} else {
			return Redirect::to('users/login')
				->with('message', 'Your username/password combination was incorrect')
				->withInput();
		}
	}
	public function getDashboard() {
		//var $myUrl = URL::current();
		$oregonSegment = Request::segment(3);
		$countySegment = Request::segment(4);
		$countyResult = DB::table('counties')->where('countyNameConcat', '=', $countySegment)->where('stateAb', '=', $oregonSegment)->get();
    
    	$withResult = json_encode($countyResult);
		//var $params = Route::current()->parameters();
		$this->layout->content = View::make('users.dashboard')->with('mapCountyData',$withResult);
	}
	public function getMenu() {
		$usStates = UsStates::all();
		$this->layout->content = View::make('users.menu')->with('usStates', $usStates);
	}
	public function getLogout() {
		Auth::logout();
		return Redirect::to('users/login')->with('message', 'Your are now logged out!');
	}
}