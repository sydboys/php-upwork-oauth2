<?php
namespace Upwork\API\Tests\Routers;

require_once __DIR__  . '/CommonTestRouter.php';

class WorkdiaryTest extends CommonTestRouter
{
    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();
    }

    /** 
     * @test
     */
    public function testGetByContract()
    {   
        $router = new \Upwork\API\Routers\Workdiary($this->_client);
        $response = $router->getByContract('1234', array());
    
        $this->_checkResponse($response);
    }
}
