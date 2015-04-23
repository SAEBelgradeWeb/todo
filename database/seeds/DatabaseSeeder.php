<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Status;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
/*		$status = new Status;
		$status->name = "Finished";
		$status->save();

		$status = new Status;
		$status->name = "In progress";
		$status->save();*/


		Status::create(['name' => 'Finished']);
		Status::create(['name' => 'In progress']);

		User::create(['name'=>'John Smith', 'email'=>'john@dot.com', 'password' => bcrypt('123123')]);

	//	 $this->call('UserTableSeeder');
	}

}
