<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('userSeeder');
		$this->command->info('Users seeded!');

		$this->call('UsStateSeeder');
		$this->command->info('Us States seeded!');

		$this->call('countySeeder');
		$this->command->info('counties seeded!');
	}
}

class userSeeder extends Seeder {

    public function run()
    {	
    	//DB::table('counties')->delete();
    	
    	//Counties::create(array());
        
        DB::table('users')->insert(
        array(
            array('firstname' => 'Aaron', 'lastname' => 'duchateau', 'email' => 'chateauconcept@gmail.com', 'password' => Hash::make('asdfasdf') ),
      		array('firstname' => 'Kent', 'lastname' => 'lastname', 'email' => 'alpinepropertiesllc@gmail.com', 'password' => Hash::make('test123123') ),
      		array('firstname' => 'Andrew', 'lastname' => 'Cook', 'email' => 'andrewkcook@gmail.com', 'password' => Hash::make('test123123') )
		));
    }

}

class countySeeder extends Seeder {

    public function run()
    {	
    	//DB::table('counties')->delete();
    	
    	//Counties::create(array());
        
        DB::table('counties')->insert(
        array(
            array('countyName' => 'Lane County', 'countyNameConcat' => 'LaneCounty', 'stateId' => '38', 'stateAb' =>'OR', 'remoteTableId' => '1QD4JANRJFJ2_G4pWypW4ofQO0ShK0iHtKPEciTt1', 'nestedMapColumnName' => 'ACCOUNT', 'active' => 'true'),
      		array('countyName' => 'Jackson County', 'countyNameConcat' => 'JacksonCounty', 'stateId' => '38', 'stateAb' =>'OR', 'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 'nestedMapColumnName' => 'ACCOUNT', 'active' => 'true')
		));
    }

}

class UsStateSeeder extends Seeder {

    public function run()
    {
    	//DB::table('usStates')->delete();
    	
    	//UsStates::create(array());

        DB::table('usStates')->insert(
        array(
            array('name' => 'Alabama', 'code' => 'AL'),
            array('name' => 'Alaska', 'code' => 'AK'),
            array('name' => 'Arizona', 'code' => 'AZ'),
            array('name' => 'Arkansas', 'code' => 'AR'),
            array('name' => 'California', 'code' => 'CA'),
            array('name' => 'Colorado', 'code' => 'CO'),
            array('name' => 'Connecticut', 'code' => 'CT'),
            array('name' => 'Delaware', 'code' => 'DE'),
            array('name' => 'District of Columbia', 'code' => 'DC'),
            array('name' => 'Florida', 'code' => 'FL'),
            array('name' => 'Georgia', 'code' => 'GA'),
            array('name' => 'Hawaii', 'code' => 'HI'),
            array('name' => 'Idaho', 'code' => 'ID'),
            array('name' => 'Illinois', 'code' => 'IL'),
            array('name' => 'Indiana', 'code' => 'IN'),
            array('name' => 'Iowa', 'code' => 'IA'),
            array('name' => 'Kansas', 'code' => 'KS'),
            array('name' => 'Kentucky', 'code' => 'KY'),
            array('name' => 'Louisiana', 'code' => 'LA'),
            array('name' => 'Maine', 'code' => 'ME'),
            array('name' => 'Maryland', 'code' => 'MD'),
            array('name' => 'Massachusetts', 'code' => 'MA'),
            array('name' => 'Michigan', 'code' => 'MI'),
            array('name' => 'Minnesota', 'code' => 'MN'),
            array('name' => 'Mississippi', 'code' => 'MS'),
            array('name' => 'Missouri', 'code' => 'MO'),
            array('name' => 'Montana', 'code' => 'MT'),
            array('name' => 'Nebraska', 'code' => 'NE'),
            array('name' => 'Nevada', 'code' => 'NV'),
            array('name' => 'New Hampshire', 'code' => 'NH'),
            array('name' => 'New Jersey', 'code' => 'NJ'),
            array('name' => 'New Mexico', 'code' => 'NM'),
            array('name' => 'New York', 'code' => 'NY'),
            array('name' => 'North Carolina', 'code' => 'NC'),
            array('name' => 'North Dakota', 'code' => 'ND'),
            array('name' => 'Ohio', 'code' => 'OH'),
            array('name' => 'Oklahoma', 'code' => 'OK'),
            array('name' => 'Oregon', 'code' => 'OR'),
            array('name' => 'Pennsylvania', 'code' => 'PA'),
            array('name' => 'Rhode Island', 'code' => 'RI'),
            array('name' => 'South Carolina', 'code' => 'SC'),
            array('name' => 'South Dakota', 'code' => 'SD'),
            array('name' => 'Tennessee', 'code' => 'TN'),
            array('name' => 'Texas', 'code' => 'TX'),
            array('name' => 'Utah', 'code' => 'UT'),
            array('name' => 'Vermont', 'code' => 'VT'),
            array('name' => 'Virginia', 'code' => 'VA'),
            array('name' => 'Washington', 'code' => 'WA'),
            array('name' => 'West Virginia', 'code' => 'WV'),
            array('name' => 'Wisconsin', 'code' => 'WI'),
            array('name' => 'Wyoming', 'code' => 'WY')
		));
    }

}


