<?php
/**
 * Created by IntelliJ IDEA.
 * User: thyde
 * Date: 9/24/13
 * Time: 6:08 PM
 * To change this template use File | Settings | File Templates.
 */

namespace CentralDesktop\OCPHP\Test;


use CentralDesktop\OCPHP;

/**
 *
 *
 * Class UserTest
 *
 * Shows use of basic test fixture
 *
 * @package CentralDesktop\OCPHP\Test
 *
 */
class UserTest extends \PHPUnit_Framework_TestCase {
    /** @var \CentralDesktop\OCPHP\User */
    protected $user = null;

    private $name = 'User Name';
    private $email = 'joe@test.com';
    // Pizza Hut in San Diego, I can't get their jingle out of my head from 20 years ago
    private $phone = '+16194922222';

    protected
    function setUp() {
        $this->user = new \CentralDesktop\OCPHP\User(
            $this->name,
            $this->email,
            $this->phone
        );
    }

    public
    function testGetEmail() {
        $this->assertEquals($this->email, $this->user->get_email());
    }

    public
    function testGetPhone() {
        $this->assertEquals($this->phone, $this->user->get_phone());
    }

    public
    function testGetName() {
        $this->assertEquals($this->name, $this->user->get_name());
    }

    /**
     * Tests default preference
     */
    public
    function testGetPreference() {
        $this->assertEquals(OCPHP\User::PREF_SMS, $this->user->get_notification_preference());
    }

}