<?php
    extract($_REQUEST);
    $file=fopen("corona.html","a"); 

    fwrite($file,"<tr><th>");
    fwrite($file, $name ."");
    fwrite($file,"<th>");
    fwrite($file, $email ."");
    fwrite($file,"<th>");
    fwrite($file,  $phone  ."");
    fwrite($file,"<th>");
    fwrite($file,  $cold  ."");
    fwrite($file,"<th>");
    fwrite($file,  $fever  ."");
    fwrite($file,"<th>");
    fwrite($file,  $breath  ."");
    fwrite($file,"<th>");
    fwrite($file,  $weak  ."");
    fwrite($file,"<th>");
    fwrite($file,  $message  ."");
    fwrite($file, "<tr>"  ." \n");
    fclose($file);
    header("location: index.php");
 ?>
<?php
    extract($_REQUEST);
    $file=fopen("com.html","a"); 

    fwrite($file,"<tr><th>");
    fwrite($file, $name ."");
    fwrite($file,"<th>");
    fwrite($file,  $message  ."");
    fwrite($file,"<tr>");
    fclose($file);
    header("location: index.php");
 ?>
