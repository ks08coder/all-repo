<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/indcor.jpg" type="image/x-icon"/>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Kavivanar&display=swap');
      *{
        font-family: 'Roboto', sans-serif;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>India corona live</title>
    <style type="text/css">
      html{
          scroll-behavior: smooth;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          transition: 0.2s ease;
        }
        *{
          scroll-behavior: smooth;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Redressed', cursive;
          transition: 0.2s ease;
        }

        body{
          scroll-behavior: smooth;
          transition: 0.2s ease;
        }

        table {
          text-align: left;
          position: relative;
          border-collapse: collapse;
          transition: 0.2s ease;
        }

        th, td {
          padding: 0.25rem;
          transition: 0.2s ease;
        }
        
        th {
          background: white;
          position: sticky;
          top: 0; /* Don't forget this, required for the stickiness */
          box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);
          transition: 0.2s ease;
        }
    </style>
</head>

<body>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="">India corona live</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Indiacorona.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#firstsc">First</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#lastsc">Today</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1 id="firstsc">Corona Updates</h1><br>
<h6></h6>
<h1 class="text-center"><u>Date Wise</u></h1><br>
   <div class="container">
    <table class="table mt-65 ">
      <thead><tr><th>

        Date       <th>
        Total Confirmed       <th>
        New Confirmed       <th>
        New Recovered       <th>
        Total Recovered       <th>
        New Deaths       <th>
        Total Deaths        </tr></thead>
        <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['cases_time_series']);
$i=0;
while($i < $statescount){

  echo "<tbody> <tr><th>";
  echo $coranalive['cases_time_series'][$i]['dateymd'] . "<th>";
  echo $coranalive['cases_time_series'][$i]['totalconfirmed'] . "  (Total)<th>"  ;
  echo $coranalive['cases_time_series'][$i]['dailyconfirmed'] . "  (New)<th>";
  echo $coranalive['cases_time_series'][$i]['dailyrecovered'] . "  (New recovred)<th>"  ;
  echo $coranalive['cases_time_series'][$i]['totalrecovered'] . "  (Recovered)<th>"  ;
  echo $coranalive['cases_time_series'][$i]['dailydeceased'] . "  (New Deaths)<th>";
  echo $coranalive['cases_time_series'][$i]['totaldeceased'] . "  (Death)<th>";
  
  $i++;
}
 
  echo "</tbody></table>";


?>
</div>
<!-- <footer class="bd-footer navbar-expand layout container p-3 p-md-5 mt-5 bg-light text-center text-sm-start"> -->
  <footer class="bg-primary text-white text-center text-lg-start" id="lastsc"><br>
<center>Created by Kshitiz</center><br> </footer>
<!-- footer mt-auto py-3 bg-light -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script type="text/javascript">
</script>
</body>

</html>
