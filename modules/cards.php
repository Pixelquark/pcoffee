<?php  ?>
<div class="cardContainer">
  <div class="cardInner">

<?php foreach ($works as $work): ?>


    <div class="card">

      <div class="cardThumb">
        <img src="assets/thumb/<?php echo $work['w_thumb'] ?>" alt="">
      </div>

      <div class="cardTitle">
        <h1><?php echo $work['w_title'] ?></h1>
      </div>

      <div class="cardDescription">
        <small><?php echo $work['w_summary'] ?></small>
      </div>

      <div class="cardButtonDiv">
        <a href="<?php echo $work['w_git'] ?>" target="_blank"><button id="cardButton" type="button" name="button">Ver en GitHub</button></a>
      </div>

    </div>

<?php endforeach; ?>

  </div><!-- cardInner -->
</div><!-- cardContainer -->


<?php  ?>
