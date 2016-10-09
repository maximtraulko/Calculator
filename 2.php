<html>
	<HEAD>
		<meta charset ="UTF-8">
		<TITLE>Текстовый документ 1</title>
	</HEAD>
	<body>
		<form action="2.php" method="GET">
		<input type="text" name="arg1" value="<?=$_GET['arg1']?>" />
		<input type="text" name="arg2" value="<?=$_GET['arg2']?>" />
		<input type="submit" name='add' value="Сумма">
		<input type="submit" name='sub' value="Выч">
		</form>
		<?php
			if (isset($_GET['add'])){
			if (isset ($_GET ['arg1']) &&isset($_GET['arg2'])){
			echo intval($_GET['arg1'])+intval($_GET['arg2']);
			$_GET['arg1'];
			$_GET['arg1'];
			}	
		}
		if (isset ($_GET ['sub'])){
			if (isset($_GET['arg1']) &&isset($_GET['arg2'])) {
				echo intval ($_GET['arg1'])-intval($_GET['arg2']);
				$_GET['arg1'];
				$_GET['arg1'];
			}	
		}
		?>
	</body>
</html>
