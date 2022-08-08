<?php if (! defined('BASEPATH')) exit('No direct script accsess allowed');

require_once dirname(__FILE__) . '/tcpdf.php';


 class Pdf extends TCPDF
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 } 