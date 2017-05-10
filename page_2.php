<?php include('header.php');?>
<div class="inner cover">
<h2 class="cover-heading">Clasificadas con un 99%</h2>
<h3 class="lead">(Para verlas mañana mismo)</h3>
<p class="lead"><?php echo $aqui;?></p>
</div>



<?php for($n=0; $n<14; $n++){?>
    <?php if ($csv[$n]["Rating"]=="99%"){?>
      <?php echo($csv[$n]["Title"])?><br>
    <?php };?>
<?php };?>


<?php include('footer.php');?>
