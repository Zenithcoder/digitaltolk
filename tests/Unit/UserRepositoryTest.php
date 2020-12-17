<?php 

namespace Test\Unit;

use Tests/Testcase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;


class UserRepositoryTest extends Testcase
{
	use RefreshDatabase;

	public function test_will_create_or_update(){
		$user = factory(User::class)->create();
		 
		$userRepo = new UserRepository($user);
		$createOrUpdate = $userRepo->createOrUpdate($user->id,$user);
		$this->assertTrue($createOrUpdate);

	}
}