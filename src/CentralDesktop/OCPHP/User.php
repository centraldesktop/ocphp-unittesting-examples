<?php
/**
 * Created by IntelliJ IDEA.
 * User: thyde
 * Date: 9/24/13
 * Time: 4:47 PM
 * To change this template use File | Settings | File Templates.
 */

namespace CentralDesktop\OCPHP;


class User {
    const PREF_SMS   = 'sms';
    const PREF_EMAIL = 'email';
    const PREF_HYPERLOOP = 'musk';

    private $preference = self::PREF_SMS;

    private $name = null;
    private $email = null;
    private $phone = null;

    public
    function __construct($name, $email, $phone) {
        $this->name  = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public
    function get_notification_preference() {
        return $this->preference;
    }

    public
    function get_name() {
        return $this->name;
    }


    public
    function get_email() {
        return $this->email;
    }

    public
    function get_phone() {
        return $this->phone;
    }
}