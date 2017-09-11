<?php defined('BASEPATH') OR exit('No direct script access allowed.');

/**
 * CodeIgniter compatible email-library powered by PHPMailer.
 *
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2012-2017.
 * @license The MIT License (MIT), http://opensource.org/licenses/MIT
 * @link https://github.com/ivantcholakov/codeigniter-phpmailer
 *
 * This class is intended to be compatible with CI 3.1.x.
 */

class User_authentication{
    private $obj = null;

    function User_authentication()
    {
        $this->obj =& get_instance();
    }

    function user_validation()
    {

        // Not logged in, then redirect to the Home Page.
        if(!$this->obj->session->userdata('logged_in'))
            redirect('');
    }

}