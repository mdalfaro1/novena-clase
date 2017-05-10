<?php include('header.php');?>
<div class="inner cover">
  <?php echo "<br>";
  echo "<br>";
  echo "<br>";
    echo "<br>";
      echo "<br>";
      echo "<br>";
        echo "<br>";
 ?>


<h2 class="cover-heading">Mejores Películas </h2>
<h3 class="lead">Resultados del Ranking de películas según Rooten Tomatoe </h3>


<?php for($n=0; $n<50; $n++){?>
    <?php if ($csv[$n]["Rating"]<"99%"){?>
      <?php echo($csv[$n]["Title"])?><br>
    <?php };?>
<?php };?>


<?php echo "<br>";
echo "<br>";
echo "<br>";
  echo "<br>";
    echo "<br>";
    echo "<br>";
      echo "<br>";
?>

</div>



<?php include('footer.php');?>
