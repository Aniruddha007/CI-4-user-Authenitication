<?php
namespace CodeIgniter;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;
use App\Models\User;
use TypeError;

class UserTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        $this->user = new User();
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function testPasswordHash()
    {
        $user = new User();
        $data = array('data'=>['password'=>123456789]);        
        $this->expectException(TypeError::class);
        $result = $user->passwordHash($data);
    }
}