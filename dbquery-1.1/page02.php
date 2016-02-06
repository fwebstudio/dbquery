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
$recordKe		= 2;
$sql['table'] 	= "t_user tb1, t_gender tb2, t_status tb3";
$sql['field']	= array("tb1.c_name", "tb1.c_email", "tb2.c_gender_desc", "tb3.c_status_desc");
$sql['cols']	= array("tb1.id", "tb1.c_gender", "tb1.c_status");
$sql['vals']	= array($recordKe, "tb2.id", "tb3.id");
$sql['ctype']	= array("int", "fkey", "fkey");

$strQuery		= $db->sqlQuery($sql, 'query');
$rs_row 		= $db->sql_fetchrowset();
$db->sql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $conf['web']['title'] ?></title>
</head>
<body>
	<h1>Query dengan dua table</h1>
	<?php include_once 'menu.php'; ?>
	<hr/>
	<p>Penggunaan Script : </p>
	<pre>
		$sql['table'] 	= "t_user tb1, t_gender tb2, t_status tb3";
		$sql['field']	= array("tb1.c_name", "tb1.c_email", "tb2.c_gender_desc", "tb3.c_status_desc");
		$sql['cols']	= array("tb1.id", "tb1.c_gender", "tb1.c_status");
		$sql['vals']	= array(<?php echo $recordKe; ?>, "tb2.id", "tb3.id");
		$sql['ctype']	= array("int", "fkey", "fkey");
		
		$strQuery	= $db->sqlQuery($sql, 'query');
		$rs_row 	= $db->sql_fetchrowset();
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
		$sql['field'] : Tipe data array, berisi nama field database yang akan diquery
		$sql['cols']  : Tipe data array, berisi field pembanding
		$sql['vals']  : Tipe data array, berisi nilai pembanding
		$sql['ctype'] : Tipe data array, berisi type jenis pembanding, jika $sql['ctype'] tidak ditulis dalam program 
						secara default semua nilai pembanding akan diset ke type string
						Jenis ctype sampai saat ini ada 3 yaitu :
						1. int
						2. string
						3. fkey
						
		Proses query database dilakukan melalui fungsi :
		
		$db->sqlQuery($sql, 'query');
		
		dan dikembalikan dalam bentuk array :
		
		$rs_row = $db->sql_fetchrowset();
		
		Koneksi database Ditutup :
		
		$db->sql_close();
		
	</pre>
	<hr/>
	<p>Hasil menampilkan record ke <?php echo $recordKe; ?> : </p>
		<p>
			<?php 
				foreach ($rs_row as $val){
					echo "Nama  : ".$val[0]."<br/>";
					echo "Email : ".$val[1]."<br/>";
					echo "Gender : ".$val[2]."<br/>";
					echo "Jenis Kelamin : ".$val[3]."<hr/>";
				}
			?>
		</p>
	
</body>
</html>