<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**

 * CodeIgniter

 *

 * An open source application development framework for PHP 5.1.6 or newer

 *

 * @package		CodeIgniter

 * @author		ExpressionEngine Dev Team

 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.

 * @license		http://codeigniter.com/user_guide/license.html

 * @link		http://codeigniter.com

 * @since		Version 1.0

 * @filesource

 */



// ------------------------------------------------------------------------



/**

 * CodeIgniter SMS Helpers

 *

 * @package		CodeIgniter

 * @subpackage	Helpers

 * @category	Helpers

 * @author		ExpressionEngine Dev Team

 * @link		http://codeigniter.com/user_guide/helpers/email_helper.html

 */



// ------------------------------------------------------------------------



/**

 *Send sms

 *

 * @access	public

 * @return	bool

 */

if ( ! function_exists('sms'))

{
		function sms($number,$msg)

		{
 				

				$PhNo = $number;
				$Text = urlencode($msg);
				$sender='CHNBRO';			 
				$url="http://all.365dayssms.com/WebSms.aspx?ID=CHENNAI%20BROTHERS&PWD=happysms&TEXT=$Text&MobNo=$PhNo&TYPE=2&Pri=3&SID=$sender";
				$ret = file($url);             
				if(!empty($ret[0])) 
				return true;

		}

}







/* End of file email_helper.php */

/* Location: ./application/helpers/sms_helper.php */