<?php

/**
 * User Model
 * 
 * @package     base-app
 * @category    Model
 * @version     1.1
 */

namespace Baseapp\Models;

class Users extends \Phalcon\Mvc\Model
{

    /**
     * User initialize
     *
     * @version     1.1
     */
    public function initialize()
    {
        $this->hasMany("id", __NAMESPACE__."\Tokens", "user_id");
        $this->hasMany("id", __NAMESPACE__."\RolesUsers", "user_id");
    }

}
