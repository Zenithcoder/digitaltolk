<?php 

namespace Test\Unit;

use Tests/Testcase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;


class TeHelperTest extends Testcase
{
	use RefreshDatabase;

	public function test_will_expire_at(){

		$due_time = Carbon::parse('2020-12-16');
		$created_at = Carbon::parse('2020-12-16');

		$te = TeHelper::willExpireAt($due_time, $created_at);
		$this->assertInstanceOf(Carbon::now(),$te);

	}
}