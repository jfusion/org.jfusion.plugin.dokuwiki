<?php namespace JFusion\Plugins\dokuwiki;

/**
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage dokuwiki
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */

use JFusion\User\Userinfo;

/**
 * JFusion auth plugin class
 *
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage dokuwiki
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */
class Auth extends \JFusion\Plugin\Auth
{
	/**
	 * @var $helper Helper
	 */
	var $helper;

    /**
     * Generate a encrypted password from clean password
     *
     * @param Userinfo $userinfo holds the user data
     *
     * @return string
     */
    function generateEncryptedPassword(Userinfo $userinfo)
    {
        return $this->helper->auth->cryptPassword($userinfo->password_clear);
    }
}