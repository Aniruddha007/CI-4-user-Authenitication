<?php

namespace CodeIgniter;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;
class TestRegisterController extends CIUnitTestCase
{
    use FeatureTestTrait;
    protected function setUp(): void
    {
        parent::setUp();    
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }
    
    // test 1 to check register page url is working
    public function testIndex()
    {
       // Get a Register Page
       $result = $this->call('get', '/register');  
       if($result->assertSee('Register', 'title')){
           $this->assertTrue($result->isOK());
       }
    }

    // test 2 to check user can register successfully
    public function testRegister()
    {
        $param=[
            'first_name'=>'jon',
            'last_name'=>'Deo',
            'birthday'=>'1991-07-07',
            'address'=>'test address',
            'phone_number'=>rand(1111111111,9999999999),
            'user_name' => 'aniruddha00'.rand(111,777),
            'password' => '12345678',
            'password_confirm'=>'12345678'
        ];
        $result = $this->post('/do-register',$param);
        if ($result->isRedirect())
        {
            $this->assertTrue($result->isOK());
        }
    }
   
}