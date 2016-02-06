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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $conf['web']['title'] ?></title>
</head>
<body>
	<h1>Menambahkan Data</h1>
	<?php include_once 'menu.php'; ?>
	<hr/>
	<p>Penggunaan Script : </p>
	<pre>
		$sql['table'] 	= "t_user";
		$sql['cols']	= array("c_name", "c_email", "c_gender", "c_status");
		$sql['vals']	= array("Burhannudin Marsose", "burhan@yahoo.com", "1", "1");
		$sql['ctype']	= array("string", "string", "int", "int");
		
		$db->sqlQuery($sql, 'insert');
		$db->sql_close();		
	</pre>
	<hr/>
	<pre>
		Hasil Query : INSERT INTO t_user (c_name, c_email, c_gender, c_status) VALUES ('Burhannudin Marsose', 'burhan@yahoo.com', 1, 1)
	</pre>
	<hr/>
	<pre>
		Keterangan :
		$sql['table'] : Tipe data string, berisi nama table yang akan diquery
		$sql['cols']  : Tipe data array, berisi field pembanding
		$sql['vals']  : Tipe data array, berisi nilai pembanding
		$sql['ctype'] : Tipe data array, berisi type jenis pembanding, jika $sql['ctype'] tidak ditulis dalam program 
				secara default semua nilai pembanding akan diset ke type string
				Jenis ctype sampai saat ini ada 3 yaitu :
				1. int
				2. string
				3. fkey
						
		Proses query database dilakukan melalui fungsi :
		
		$db->sqlQuery($sql, 'insert');
		
		Koneksi database Ditutup :
		
		$db->sql_close();
		
	</pre>
	
</body>
</html>