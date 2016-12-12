<div class="row">
	<div class="col-xs-12">
		<ol class="breadcrumb">
		  <li><a href="./">Home</a></li>
		  <li><a href="./?page=movies">Movies</a></li>
		  <li class="active"><?= $featuredmovie->title;?></li>
		</ol>

	  <h1><?= $featuredmovie->title;?></h1>
	  <small>Released in the year - <?= $featuredmovie->year?></small>
    <?php if ($featuredmovie->poster !=''):?>
      <img src="images/poster/<?=$featuredmovie->poster;?>" alt='<?=$featuredmovie->title;?>'>
      <?php else:?>
        <p>No posters found!!!</p>

      <?php endif;?>


    
	  <p><?= $featuredmovie->description?></p>	  

	  <?php  if(isset($_SESSION['privilege'])&&$_SESSION['privilege']==='admin'):   ?> 
	  
	  	<a href="./?page=movie.edit&amp;id=<?= $featuredmovie->id;?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit Movie</a>
	  	<a href="./?page=movie.delete&amp;id=<?= $featuredmovie->id;?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete Movie</a>
  <?php endif; ?>



  <h3>Comments</h3>
  <?php if(count($allcomments)>0):?>
  	<?php $count=0;?>
  	<?php foreach ($allcomments as $comment):?>
  		<p><?= $comment['id'].'.'.$comment['email'];?></p>
  		<p><?= $comment['comment'];?></p>

  	<?php endforeach;?> 
  <?php endif;?>
  <section>

  		<?php if(isset($_SESSION['user_id'])):?>
  		<h5>Add Comments</h5>
  		<form method="post"  action="./?page=comment.create" class="form-horizontal">


  		<input type="hidden" name="movie_id" value="<?= $featuredmovie->id;?>">


  		

  			 <div class="form-group">
              <label for="title" class="col-sm-2 control-label">Comment</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="comment" placeholder="Add Comment" name="comment"></textarea>
                  <span class="text-danger"></span>
                
              </div>



          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
           
               <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>Add Comment</button>
              
            </div>
          </div>
  		</form>
  	<?php else:?>
  		<p>You need to be <a href="./?page=login">logged into</a> add comment!</p>
  	<?php endif;?>

  </section>
</div>
	</div>