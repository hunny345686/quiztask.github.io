
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
      	<form action="welcome" method="post">
           <h1 class="text-center">Codeigniter Quiz App</h1>
            <h1>Hello <?php echo $data['name'];  ?></h1>
            <p>Who is the best cricketer in the world?</p>
            <p>you Ans is <?php echo $data['criketers'] ;  ?></p>
            <p>What are the colors in the Indian national flag? Select all</p>
            <p>you Ans is <?php echo $data['flag'];  ?></p> 
             <input type="submit" name="submit" value="FINISH" class="my-4">
            </form>
            <form action="history" method="post">
                <input type="submit" name="submit" value="HISTORY " class="my-4">
            </form>
            
      </div>
</body>
</html>



