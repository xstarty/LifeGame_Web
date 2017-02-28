<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Char extends CI_Controller {
	public function get_char() {
		if (! file_exists ( APPPATH . 'views/user/register.php' )) {
			// Whoops, we don't have a page for that!
			show_404 ();
		}
	
		echo "456";
		
	}
}
?>