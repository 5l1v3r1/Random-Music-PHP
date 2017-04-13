<!doctype html>
<html>
<head>
	<title>Rastgele Müzikler | Oyuncu</title>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<meta name="description" content="Oyun oynarken dinlemelik müzikler, oyuncu müzikleri, en iyi gaming müzikleri için ziyaret edin!"/>
	<meta http-equiv="refresh" content="200;URL=oyuncu.php">
</head>
<body>
	<nav class="navbar navbar-toggleable-md navbar navbar-inverse bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="location.reload();">Rastgele</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Anasayfa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">İletişim</a>
      </li>
    </ul>
   
  </div>
</nav>

<br>


<div class="container">
  <div class="row">
   <div class="col-12">
   <div class="embed-responsive embed-responsive-16by9">
   
   
   <?php 

// Build an array from the list of YouTube videos
// Replace YourVideoList.txt with the path to your text file
// This will likely be something like /home/accountname/public_html/foldername/etc
$video_array = file('oyuncuMusics.txt'); 

// Randomly pick one video from the array
$video = $video_array[rand(0, count($video_array) - 1)];
$video = trim($video);

?>

   
	<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video;?>?rel=0&autoplay=1&controls=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>

	
	
	</div>
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="#">
	
	<?php
$oku = @fopen('oyuncuView.txt', 'r');
$rakam = @fread($oku, filesize('oyuncuView.txt'));
@fclose($oku);
 
$yaz = fopen('oyuncuView.txt', 'w');
$goruntulenme = $rakam+1;
fwrite($yaz, $goruntulenme);
fclose($yaz);
 
echo "".$goruntulenme." Görüntülenme";
	?>
	
	</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" onclick="location.reload();">Rastgele Müzik Çal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">Listede <?php        

echo count(file("oyuncuMusics.txt"));        

?> Müzik Var</a>
  </li>
</ul>
</div>
  </div>
</div>


</body>
</html>