<?php
/**
 * Page index
 *
 * @package    	Web Development Frameworks
 * @author     	Gilang <gilang@kresnadi.web.id>
 * @License    	Free GPL
 * @link 		http://www.kresnadi.web.id
 */

include_once 'configure.php';

//Contoh Query Satu Table
/*
$sql['table'] 	= "t_user";
$sql['field']	= array("c_name", "c_email", "c_gender", "c_status");
$sql['fvals']	= array("Sri Sumarsih", "sri@yahoo.cm", "0", "2");
$sql['ftype']	= array("string", "string", "int", "int");
$sql['cols']	= array("id");
$sql['vals']	= array("1");

$strQuery		= $db->sqlQuery($sql, 'update');
$db->sql_close();
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $conf['web']['title'] ?></title>
</head>
<body>
	<h1>Mengupdate Data</h1>
	<?php include_once 'menu.php'; ?>
	<hr/>
	<p>Penggunaan Script : </p>
	<pre>
		$sql['table'] 	= "t_user";
		$sql['field']	= array("c_name", "c_email", "c_gender", "c_status");
		$sql['fvals']	= array("Sri Sumarsih", "sri@yahoo.cm", "0", "2");
		$sql['ftype']	= array("string", "string", "int", "int");
		$sql['cols']	= array("id");
		$sql['vals']	= array("1");
		
		$strQuery		= $db->sqlQuery($sql, 'update');
		$db->sql_close();		
	</pre>
	<hr/>
	<pre>
		Hasil Query : UPDATE t_user SET c_name='Sri Sumarsih', c_email='sri@yahoo.cm', c_gender=0, c_status=2 WHERE id='1'
	</pre>
	<hr/>
	<pre>
		Keterangan :
		$sql['table'] : Tipe data string, berisi nama table yang akan diquery
		$sql['field'] : Tipe data array, berisi field yang akan diupdate
		$sql['fvals'] : Tipe data array, berisi nilai field yang akan diupdate
		$sql['cols']  : Tipe data array, berisi field pembanding
		$sql['vals']  : Tipe data array, berisi nilai pembanding
		$sql['ftype'] : Tipe data array, berisi type jenis pembanding, jika $sql['ftype'] tidak ditulis dalam program 
				secara default semua nilai pembanding akan diset ke type string
				Jenis ftype sampai saat ini ada 3 yaitu :
				1. int
				2. string
				3. fkey
						
		Proses query database dilakukan melalui fungsi :
		
		$db->sqlQuery($sql, 'update');
		
		Koneksi database Ditutup :
		
		$db->sql_close();
		
	</pre>
	
</body>
</html>