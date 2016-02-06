<?php
/**
 * Configuration Files
 *
 * @package    	Web Development Frameworks
 * @author     	Gilang <gilang@kresnadi.web.id>
 * @link 	http://www.kresnadi.web.id
 */

/*
 * Parameter Dibawah ini adalah optional untuk mengkonfigurasi aplikasi yang akan anda buat
 * 
 */
define("ROOT_PATH", $_SERVER['DOCUMENT_ROOT'].'/folder');
define("CTRL_PATH", ROOT_PATH."/controller");
define("MOD_PATH", ROOT_PATH."/model");
define("LIB_PATH", ROOT_PATH."/lib");
define("IMG_PATH", ROOT_PATH."/images");
define("DOC_PATH", ROOT_PATH."/document");


/*
 * Contoh sederhana  dengan instalasi frameworks Smarty
 * ----------------------------------------------------
 *
define('SMARTY_DIR', LIB_PATH."/Smarty-3.0.8/");
require_once(SMARTY_DIR .'Smarty.class.php');
$tpl = new Smarty();
$tpl->template_dir 		= ROOT_PATH.'/templates/';
$tpl->compile_dir  		= SMARTY_DIR.'templates_c/';
$tpl->config_dir   		= SMARTY_DIR.'configs/';
$tpl->cache_dir    		= ROOT_PATH.'/cache/';
*/

/*
 * Banyak sekali parameter yang dapat dikonfigurasikan sebagai parameter dasar
 * Sebagai contoh, saya tuliskan dibawah ini beberapa parameter standar dalam
 * sebuah aplikasi umum yang dibutuhkan oleh sebuah websites, namun dalam paket ini
 * tidak semua parameter digunakan, hanya untuk parameter database saja.
 */

/***********************************************************************************
 ** Function Name : balanceInfo
** Function Use : Show balance info
** Input : username
** Output : balance info
** Database table : t_payment, t_paymentType, t_users, t_voucher, t_vouchertype, t_vendor
** Methode : - Get total pay
**                       - Get total buy
**                       - Count total balance
***********************************************************************************/
$conf = array("db" 		=> array("user" 		=> "root", 			//Ganti dengan userDB
								 "pass" 		=> "password", 		//Ganti dengan passDB
								 "database" 	=> "yourdbname",		//Ganti dengan namaDB
								 "host" 		=> "localhost",		//Ganti dengan hostDB
								 "type" 		=> "mysql",			//Tutorial ini hanya untuk MySQL Database
								 "showerror"	=> true),

			  "file" 	=> array("maxwidth" 	=> "300",			//Dalam satuan pixel
								 "maxheight" 	=> "300",			//Dalam satuan pixel
								 "minwidth" 	=> "64",			//Dalam satuan pixel
								 "minheight" 	=> "64",			//Dalam satuan pixel
								 "maxsize" 		=> "51200",			//Dalam satuan bytes
								 "mixsize" 		=> "1024"),			//Dalam satuan bytes

			  "role"	=> array("retry"		=> 3,
								 "status"		=> 1,
								 "activedate"	=> 1),

			  "web"		=> array("title"		=> "Kresnadi WebStudio - Tutorial",
								 "license"		=> "Free GPL - By. Gilang Teguh Kresnadi"));

include_once LIB_PATH.'/dbquery.php';
$db = new dbquery();
?>
