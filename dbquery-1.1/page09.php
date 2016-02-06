<?php
/**
 * Page index
 *
 * @package    	Web Development Frameworks
 * @author     	Gilang <gilang@kresnadi.web.id>
 * @link 	http://www.kresnadi.web.id
 */

include_once 'configure.php';

//Contoh Query Satu Table
$sql['table'] 	= "t_user";
$sql['cols']	= array("id");
$sql['vals']	= array("1");

$strQuery		= $db->sqlQuery($sql, 'delete');
$db->sql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $conf['web']['title'] ?></title>
</head>
<body>
	<h1>Menghapus Data</h1>
	<?php include_once 'menu.php'; ?>
	<hr/>
	<p>Penggunaan Script : </p>
	<pre>
		$sql['table'] 	= "t_user";
		$sql['cols']	= array("id");
		$sql['vals']	= array("1");
		
		$db->sqlQuery($sql, 'delete');
		$db->sql_close();		
	</pre>
	<hr/>
	<pre>
		Hasil Query : <?php echo $strQuery; ?>
	</pre>
	<hr/>
	<pre>
		Keterangan :
		$sql['table'] : Tipe data string, berisi nama table yang akan diquery
		$sql['cols']  : Tipe data array, berisi field pembanding
		$sql['vals']  : Tipe data array, berisi nilai pembanding
		Proses query database dilakukan melalui fungsi :
		
		$db->sqlQuery($sql, 'delete');
		
		Koneksi database Ditutup :
		
		$db->sql_close();
		
	</pre>
	
</body>
</html>