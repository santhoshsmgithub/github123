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
 * CodeIgniter Email Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/email_helper.html
 */

// ------------------------------------------------------------------------

/**
 *Rrandom number and letter generator 
 *
 * @access	public
 * @return	Letter and number
 */
if ( ! function_exists('random'))
{
	function random($length=4)
	{
	

			$keys = array_merge(range(0,9), range('a', 'z'));
		
			for($i=0; $i < $length; $i++) {
		
				$key .= $keys[array_rand($keys)];
		
			}
		
			return $key;

        
	}
}



/* End of file email_helper.php */
/* Location: ./application/helpers/random_helper.php */