<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <?php 
            
            $title = $_GET["title"]."<br>";
            $tahun = $_GET["tahun"]."<br>";
            $genre = $_GET["genre"]."<br>";
            $rating = $_GET["rating"]."<br>";
            echo "Judul Game : ".$title;
            echo "Tahun Rilis : ".$tahun;
            echo " Genre : ".$genre;
            echo "Rating : ".$rating;

            ?>
        </div>
    </div>
</div>
</body>
</html>