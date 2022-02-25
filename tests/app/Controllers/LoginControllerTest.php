<?php

namespace CodeIgniter;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;
class TestLoginController extends CIUnitTestCase
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
    // test 1 to check login page url is working
    public function testIndex()
    {
       // Get a Login Page
        $result = $this->call('get', '/login');
        if($result->assertSee('Login', 'title')){
            $this->assertTrue($result->isOK());
        }

    }

    // test 2 to check login page url is working
    public function testAuth()
    {
        // Do Login
      $param=[
            'user_name' => 'aniruddha007',
            'password' => '12345678'
        ];
        $result = $this->post('/do-login',$param);
        if ($result->isRedirect())
        {
            $this->assertTrue($result->isOK());
        }
    }
   
    // test 3 to check user logged out is working
    public function testLogout()
    {
        // User Logged Out
        $result = $this->call('get', '/logout');
        if($result->isRedirect()){
            $this->assertTrue($result->isOK());
        }
    }

}