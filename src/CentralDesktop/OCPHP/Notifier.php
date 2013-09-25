<?php
/**
 * Created by IntelliJ IDEA.
 * User: thyde
 * Date: 9/24/13
 * Time: 5:00 PM
 * To change this template use File | Settings | File Templates.
 */

namespace CentralDesktop\OCPHP;


interface Notifier {

    /**
     * Sends the user a message
     * @param User $user
     * @param      $message
     *
     * @return boolean
     */
    public
    function send(User $user, $message);


}