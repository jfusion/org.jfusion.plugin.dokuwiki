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

/**
 * JFusion public class for DokuWiki
 *
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage dokuwiki
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */
class Front extends \JFusion\Plugin\Front
{
	/**
	 * @var $helper Helper
	 */
	var $helper;

    /**
     * @return string
     */
    function getRegistrationURL() {
        return 'doku.php?do=login';
    }

    /**
     * @return string
     */
    function getLostPasswordURL() {
        return 'doku.php?do=resendpwd';
    }
}
