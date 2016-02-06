<?php
/**
 * Page index
 *
 * @package    	Web Development Frameworks
 * @author     	Gilang <gilang@kresnadi.web.id>
 * @link 		http://www.kresnadi.web.id
 */

include_once 'configure.php';

//Contoh Query Satu Table
$recordKe		= 2;
$sql['table'] 	= "t_user tb1, t_gender tb2, t_status tb3";
$sql['field']	= array("tb1.c_name", "tb1.c_email", "tb2.c_gender_desc", "tb3.c_status_desc");
$sql['cols']	= array("tb1.c_gender", "tb1.c_status");
$sql['vals']	= array("tb2.id", "tb3.id");
$sql['ctype']	= array("fkey", "fkey");
$sql['cond']	= "AND tb1.c_email LIKE '%com%'";

$numRow			= $db->sqlQuery($sql, 'numrow');
$db->sql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $conf['web']['title'] ?></title>
</head>
<body>
	<h1>Menghitung Jumlah Row</h1>
	<?php include_once 'menu.php'; ?>
	<hr/>
	<p>Penggunaan Script : </p>
	<pre>
		$sql['table'] 	= "t_user tb1, t_gender tb2, t_status tb3";
		$sql['field']	= array("tb1.c_name", "tb1.c_email", "tb2.c_gender_desc", "tb3.c_status_desc");
		$sql['cols']	= array("tb1.c_gender", "tb1.c_status");
		$sql['vals']	= array("tb2.id", "tb3.id");
		$sql['ctype']	= array("fkey", "fkey");
		$sql['cond']	= "AND tb1.c_email LIKE '%com%'";
		$numRow		= $db->sqlQuery($sql, 'numrow');
		$db->sql_close();
	</pre>
	<hr/>
	<pre>
		Hasil Query : <?php echo $numRow; ?>
	</pre>
	<hr/>
	<pre>
		Keterangan :
		$sql['table'] : Tipe data string, berisi nama table yang akan diquery
		$sql['field'] : Tipe data array, berisi nama field database yang akan diquery
		$sql['cols']  : Tipe data array, berisi field pembanding
		$sql['vals']  : Tipe data array, berisi nilai pembanding
		$sql['ctype'] : Tipe data array, berisi type jenis pembanding, jika $sql['ctype'] tidak ditulis dalam program 
						secara default semua nilai pembanding akan diset ke type string
						Jenis ctype sampai saat ini ada 3 yaitu :
						1. int
						2. string
						3. fkey
		$sql['cond']  : Tipe data string, berisi nilai pembanding
					
		Proses query jumlah data dilakukan melalui fungsi :
		
		$numRow	= $db->sqlQuery($sql, 'numrow');
		
		Koneksi database Ditutup :
		
		$db->sql_close();
		
	</pre>
	
</body>
</html>