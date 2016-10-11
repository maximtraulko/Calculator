<html>
	<HEAD>
		<meta charset ="UTF-8">
		<TITLE>Текстовый документ 1</title>
	</HEAD>
	<body>
		<form action="2.php" method="GET">
		<input type="text" name="arg1" value="<?php 
			if (isset($_GET['arg1'])){
				echo htmlspecialchars($_GET['arg1']);
			}
		?>">
		<input type="text" name="arg2" value="<?php 
			if (isset($_GET['arg2'])){
				echo htmlspecialchars($_GET['arg2']);
			} 
		?>">
		<input type="submit" value="Сумма" name="add">
		<input type="submit" value="Вычитание" name="sub">
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
