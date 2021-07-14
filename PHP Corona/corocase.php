<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Kavivanar&display=swap');
      *{
          font-family: 'Kavivanar', cursive;
        }
    </style>
    <title>corona Contacts</title>
</head>

<body>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Corona Contacts</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Corona Contacts</h1><br>
<h6></h6>
   <div class="container">
    <table class="table mt-65">
      <thead><tr><th>Name<th></th>>Email<th>Confirmed<th>"Recovered<th>Deaths</tr></thead>
      <tbody> <tr><th>

<?php

$data = file_get_contents('coronas.json');
$con = json_decode($data, true);
$count = 2;
 
  $i=0;
  while($i < $count){
  echo $con['a'][$i]['name'] . "<th>";

  $i++;
  }

?>
</tbody></table>
</div>
<!-- <footer class="bd-footer navbar-expand layout container p-3 p-md-5 mt-5 bg-light text-center text-sm-start"> -->
  <footer class="bg-primary text-white text-center text-lg-start"><br>
<center>Created by Kshitiz</center><br> </footer>
<!-- footer mt-auto py-3 bg-light -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script type="text/javascript">
  let xhr = new XMLHttpRequest();
  xhr.open('GET', 'coronas.json', true);
  xhr.onload = function () {
    // let json = JSON.parse(this.responseText);
    let json = json.parse(this.responseText)
    console.log(json)

  }
  xhr.send()
</script>
</body>

</html>
