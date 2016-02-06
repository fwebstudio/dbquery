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
$recordKe		= 2;
$sql['table'] 	= "t_user";
$sql['field']	= array("c_name", "c_email");
$sql['cols']	= array("id");
$sql['vals']	= array($recordKe);

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
	<h1>Query dengan kondisi (WHERE)</h1>
	<?php include_once 'menu.php'; ?>
	<hr/>
	<p>Penggunaan Script : </p>
	<pre>
		$sql['table'] 	= "t_user";
		$sql['field']	= array("c_name", "c_email");
		$sql['cols']	= array("id");
		$sql['vals']	= array("2");
		
		$db->sqlQuery($sql, 'query');
		$rs_row = $db->sql_fetchrowset();
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
					echo "Nama  : ".$val['c_name']."<br/>";
					echo "Email : ".$val['c_email']."<hr/>";
				}
			?>
		</p>
	
</body>
</html>