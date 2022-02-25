<?php

namespace CodeIgniter;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class TestDashboardController extends CIUnitTestCase
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
    // test 1 to check user dashboad page is working
    public function testIndex()
    {
        $_SESSION['isLoggedIn'] = 1;
        $result = $this->withSession()->get('dashboard');
        if($result->assertSee('Dashboard', 'title')){
            $this->assertTrue($result->isOK());
        }
    }   

    


}