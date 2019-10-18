<div class="alert alert-primary" role="alert">
  Main Page
</div>


<?php
foreach ($news as $val) : ?>
<div class="card">
  <div class="card-header bg-secondary">
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $val['title']; ?></h5>
    <p class="card-text"><?php echo $val['description']; ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php  endforeach;  ?>