<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dien tich</title>
</head>
<body>
		<?php
			$chieu_dai = $_POST['chieu_dai'];
			$chieu_rong = $_POST['chieu_rong'];
			$dien_tich = $chieu_dai * $chieu_rong;
		?>
	<form action="" method="post">
			<table style="border:1px solid #000">
				<tr>
					<td colspan="2"><div style="font-weight:bold; font-family:Tahoma, Geneva, sans-serif; background-color:#993">DIỆN TÍCH HÌNH CHỮ NHẬT</div></td>
				</tr>
				<tr>
					<td>Chiều dài:</td>
					<td><input type="text" name="chieu_dai" value="<?php echo $chieu_dai; ?>" /></td>
				</tr>
				<tr>
					<td>Chiều rộng:</td>
					<td><input type="text" name="chieu_rong" value="<?php echo $chieu_rong; ?>" /></td>
				</tr>
				<tr>
					<td>Diện tích:</td>
				<td><input type="text" value="<?php echo $dien_tich; ?>" readonly="readonly"/></td></div>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Tính diện tích" /></td>
				</tr>
			</table>
		</form>
</body>
</html>