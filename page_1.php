<?php include('header.php');?>
<div class="inner cover">
<h2 class="cover-heading">Clasificadas con un 100%</h2>
<h3 class="lead">Para verlas hoy mismo</h3>
<?php for($n=0; $n<14; $n++){?>
    <?php if ($csv[$n]["Rating"]=="100%"){?>
      <?php echo($csv[$n]["Title"])?><br>
    <?php };?>
<?php };?>

</div>
<?php include('footer.php');?>
