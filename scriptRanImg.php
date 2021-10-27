<?php
  $bg = array('img/1.jpg', 'img/2.jpg', 'img/3.jpg', 
  'img/4.jpg', 'img/5.jpg', 'img/6.jpg', 'img/7.jpg', 
  'img/8.jpg', 'img/9.jpg'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<style type="text/css">
<!--
body{
background: url(images/<?php echo $selectedBg; ?>) no-repeat;
}
-->
</style>