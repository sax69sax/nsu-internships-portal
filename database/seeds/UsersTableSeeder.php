<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 =>
				array (
					'id' => '1',
					'name' => 'Salvatore Mitrano',
					'password' => '$2y$10$F5hvprsdMl4zSqEQk4SnPOowWs..KqOOs/l4H9931f3zXHo3m48oC',//123456789
					'nsu_id' => 'N01407193',
					'email' => 'sm2191@nova.edu',
					'account_type' => '0',
					'remember_token' => '90a2cff4c3f6617a7d74c127e825bee5ec3e20d93b3004293e83fa94b7c044ef',
                	'phone' => '+1 (786) 853-2763',
					'created_at' => '2016-04-21 04:30:38',
			),
			1 =>
				array (
					'id' => '2',
					'name' => 'Bryan Wainick',
					'password' => '$2y$10$F5hvprsdMl4zSqEQk4SnPOowWs..KqOOs/l4H9931f3zXHo3m48oC',//123456789
					'nsu_id' => 'N014043543',
					'email' => 'bw123@nova.edu',
					'account_type' => '0',
					'remember_token' => '40bae01c54089e5ee0cb583751e11510cc32db773ee403be590c03d930142532',//123456789
					'phone' => '+1 (786) 853-2763',
					'created_at' => '2016-04-21 04:30:38',
			),
			2 =>
				array (
					'id' => '3',
					'name' => 'Dr. James Parish',
					'password' => '$2y$10$F5hvprsdMl4zSqEQk4SnPOowWs..KqOOs/l4H9931f3zXHo3m48oC',//123456789
					'nsu_id' => 'N0000000000',
					'email' => 'jlparrish@nova.edu',
					'account_type' => '1',
					'remember_token' => '40bae01c54089e5ee0cb583751e11510cc32db773ee403be590c03d930142532',
					'phone' => '+1 (786) 853-2763',
					'created_at' => '2016-04-21 04:30:38',
				),
			3 =>
				array (
					'id' => '4',
					'name' => 'Dr. Michael Van Hilst',
					'password' => '$2y$10$F5hvprsdMl4zSqEQk4SnPOowWs..KqOOs/l4H9931f3zXHo3m48oC',//123456789
					'nsu_id' => 'N0000000000',
					'email' => 'mv518@nova.edu',
					'account_type' => '1',
					'remember_token' => '40bae01c54089e5ee0cb583751e11510cc32db773ee403be590c03d930142532',
					'phone' => '+1 (786) 853-2763',
					'created_at' => '2016-04-21 04:30:38',
				),

		));
	}

}
