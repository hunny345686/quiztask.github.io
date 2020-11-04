

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>History</title>
</head>
<body>
	<div class="container">
		<h2 class="text-center m-5">History of Ans</h2>
	<table class="table table-striped table-bordered">
		<tr>
			<th>Name</th>
		    <th>Who is the best cricketer in the world?</th>
		    <th>What are the colors in the Indian national flag? Select all</th>
		</tr>
		<?php foreach ($data as $value) {
		?>
		<tr>
			<td><?=$value->name  ?></td>
			<td><?=$value->criketers ?></td>
			<td><?=$value->flag ?></td>
		</tr>
	<?php } ?>
	</table>
	</div>
</body>
</html>