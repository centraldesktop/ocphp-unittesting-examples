<?php
/**
 * Created by IntelliJ IDEA.
 * User: thyde
 * Date: 9/24/13
 * Time: 5:03 PM
 * To change this template use File | Settings | File Templates.
 */

namespace CentralDesktop\OCPHP\Test;

use CentralDesktop\OCPHP;

class  NotificationFactoryTest extends \PHPUnit_Framework_TestCase {


    /**
     * @expectedException \CentralDesktop\OCPHP\UnknownContactPreferenceException
     */
    public
    function testGetNotifierTDDDefaultCase() {
        $factory = OCPHP\NotificationFactory::getInstance();

        $user = \Mockery::mock('\CentralDesktop\OCPHP\User', array('mocked', 'mock@mock.com', '+16194922222'));
        $user->shouldReceive('get_notification_preference')->andReturn(OCPHP\User::PREF_HYPERLOOP)->once();

        $notifier = $factory->getNotifier($user);

        // Don't need this @expectedException handles this
        //$this->assertNotInstanceOf('\CentralDesktop\OCPHP\SMS', $notifier, 'We should have thrown an exception');
    }


    public
    function testGetNotifierTDD() {
        $factory = OCPHP\NotificationFactory::getInstance();

        $user     = new OCPHP\User("Joe", "joe@test.com", "+16194922222");
        $notifier = $factory->getNotifier($user);

        $this->assertInstanceOf('\CentralDesktop\OCPHP\SMS', $notifier,
                                "This was not the instance you were looking for");


    }


    /**
     * Mockist example, make sure we are testing behaviors ONLY of getNotifier and not the User object
     * If the User object default behavior changed, this test doesn't fail (User tests should!)
     *
     * This also shows up the mock proxies, when instantiating an object is more complicated
     */
    public
    function testGetNotifierMockist() {
        $factory = OCPHP\NotificationFactory::getInstance();


        $user = \Mockery::mock('\CentralDesktop\OCPHP\User', array('mocked', 'mock@mock.com', '+16194922222'));
        $user->shouldReceive('get_notification_preference')->andReturn(OCPHP\User::PREF_EMAIL)->once();


        $notifier = $factory->getNotifier($user);


        $this->assertInstanceOf('\CentralDesktop\OCPHP\Mailer', $notifier,
                                "This was not the instance you were looking for");


    }


}