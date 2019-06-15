<?php

 if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
require_once APPPATH."/libraries/PHPExcel.php";
ini_set('memory_limit','1024M');
 
Class Excel extends PHPExcel {
    public function __construct() {
        parent::__construct();
    }
}

?>
