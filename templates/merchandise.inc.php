<div class="row">
<div class="col-xs-12">
  <h1>Schlocktoberfest <small>The Best Worst Movie Festival Ever !</small></h1>
  <h2>Merchandise</h2>
  <!-- <?php var_dump($merchandiseList);?> -->
  <?php foreach($merchandiseList as $merchandise):?>
      <p><h3><?= $merchandise['name']. ' - $ ' . $merchandise['price'];?></h3></p>
      <p><?= $merchandise['description'];?></p>
  <?php endforeach; ?> 
</div>
</div>
