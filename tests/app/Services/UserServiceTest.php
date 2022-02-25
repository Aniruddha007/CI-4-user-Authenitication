<?php
namespace CodeIgniter;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;
use App\Services\UserService;
class UserServiceTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testRegisterUser()
    {
        $newData = [
            'first_name' => 'Jon',
            'last_name' =>'Deo',
            'birthday' => '2001-07-07',
            'address' => 'address',
            'phone_number' => 1234567890,
            'user_name' => 'user001',
            'password' => 'user1@123',
        ];
        $serviceObject  = new UserService();
        $result = $serviceObject->registerUser($newData);
        if($result['isLoggedIn']){
            $this->assertEquals(1,$result['isLoggedIn']);
        }else{
            $this->assertFalse(true);
        }
    }

    public function testGetUser()
    {
        $user_name = "user001";
        $serviceObject  = new UserService();
        $result = $serviceObject->getUser($user_name);
        $this->assertCount(10,$result);      
    }
}