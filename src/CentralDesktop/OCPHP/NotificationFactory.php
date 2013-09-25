<?php
/**
 * Created by IntelliJ IDEA.
 * User: thyde
 * Date: 9/24/13
 * Time: 4:51 PM
 * To change this template use File | Settings | File Templates.
 */

namespace CentralDesktop\OCPHP;

use CentralDesktop\OCPHP;

/**
 * Class NotificationFactory
 * @package CentralDesktop\OCPHP
 */
class NotificationFactory {
    /**
     * @var null
     */
    private static $instance = null;


    /**
     *
     */
    private
    function __construct() {

    }

    /**
     * @return NotificationFactory|null
     */
    public static
    function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * @param User $user
     *
     * @return Mailer|SMS
     * @throws UnknownContactPreferenceException
     */
    public
    function getNotifier(User $user) {
        $pref = $user->get_notification_preference();

        $notifier = null;

        switch ($pref) {
            case User::PREF_EMAIL:
                // harder to test
                // $notifier = new Mailer();
                $notifier = $this->create_mailer();

                break;
            case User::PREF_SMS:
                // harder to test
                // $notifier = new SMS();
                $notifier = $this->create_sms();
                break;

            default:
                throw new OCPHP\UnknownContactPreferenceException();

        }

        return $notifier;
    }

    /**
     * @return Mailer
     */
    private
    function create_mailer() {
        return new Mailer();
    }

    /**
     * @return SMS
     */
    private
    function create_sms() {
        return new SMS();
    }
}