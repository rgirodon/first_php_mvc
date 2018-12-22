<?php
namespace FirstMvc\Test;

require '../model/UsersManager.php';

use \PHPUnit\Framework\TestCase as TestCase;

use \FirstMvc\Model\UsersManager as UsersManager;

/**
 * UsersManager test case.
 */
class UsersManagerTest extends TestCase {

    private $usersManager;

    protected function setUp() {
        
        parent::setUp();
        
        $this->usersManager = new UsersManager();
    }

    protected function tearDown() {
        
        $this->usersManager = null;
        
        parent::tearDown();
    }

    public function testGetUsers() {
        
        $users = $this->usersManager->getUsers();
        
        $this->assertEquals(3, count($users));
    }
    
    public function testGetUser() {
        
        $user = $this->usersManager->getUser(1);
        
        $this->assertEquals(1, $user->id);
    }
}

