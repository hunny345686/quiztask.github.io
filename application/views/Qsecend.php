
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>    
      <div class="container text-center my-4">
      	<h1 class="text-center">Codeigniter Quiz App</h1>
        <form action="summary" method="post" class="my-5">
            <label>What are the colors in the Indian national flag? Select all</label><br>
            <input type="checkbox"   name="color[]" value="White">
			  <label>White</label><br>
			  <input type="checkbox" name="color[]" value="Yellow">
			  <label>Yellow</label><br>
			  <input type="checkbox" name="color[]" value="Orange">
			  <label>Orange</label><br>
			  <input type="checkbox" name="color[]" value="Green">
			  <label>Green</label><br><br>
            <input type="submit" name="submit" value="Next" class="my-4">
        </form>
      </div>
</body>
</html>



