<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::controller('users', 'UsersController');




//Ugly looking data routes
Route::pattern('id', '[0-9]+');

Route::get('listCounties/{id}', function($id)
{
    $counties = DB::table('counties')->where('stateId', '=', $id)->get();
    
    return json_encode($counties);
});

//this should not be here and provide auth check
Route::get('listSavedTaxlots/{userId}/{countyId}', function($id)
{
    $saved = DB::table('savedTaxLots')
    	->where('userKey', '=', $userId)
    	->where('countyKey', '=', $countyId)
    	->get();
    
    return json_encode($saved);
});

Route::post('saveCountySpecificRecord',array('before'=>'csrf','uses'=>function(){
    $data = Input::all();
    if(Request::ajax())
    {
        $s = new SavedTaxLots;
        $s->countyKey = $data['countyKey'];
        $s->userKey = $data['userKey'];
        $s->lat = $data['lat'];
        $s->lng = $data['lng'];
        $s->totalValue = $data['totalValue'];
        $s->active = true;
        //if success
        if($s->save()){
            return 1;
        }
        //if not success
        else{
            return 0;
        }

    }

}));

//$table->bigInteger('userKey');
//			$table->bigInteger('countyKey');
//			$table->string('ownerName', 300);
//			$table->string('lat', 20);
//    		$table->string('lng', 300);
//    		$table->string('totalValue', 200);
//    		$table->boolean('active');
//$userTracker = new UserTracker;
//   33: 			$userTracker->firstname = Auth::user()->firstname;
//   34: 			$userTracker->lastname = Auth::user()->lastname;
//   35: 			$userTracker->email = Auth::user()->email;
//   36: 			$userTracker->ipaddress = Request::getClientIp();
//   37: 			$userTracker->save();
