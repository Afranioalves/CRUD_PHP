<?php require 'model/crud.php';?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <title>CRUD</title>
</head>
<body>
	<section class="container">
		<form method="post" action="<?php require'public/formCond.php';?>">
			<input type="text" name="nome" value="<?php require'public/nameCond.php';?>">
			<input type="text" name="anime" value="<?php require'public/animeCond.php';?>">
			<input type="submit" value="<?php require'public/btnCond.php';?>" name="submit">
		</form>
		<table>
			<thead>
				<th>Codigo</th>
				<th>Nome</th>
				<th>Anime</th>
				<th>Opções</th>
			</thead>
			<?php $crud->Read()?>
		</table>
	</section>
</body>

</html>