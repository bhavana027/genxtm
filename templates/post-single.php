<?php include 'inc/header.php'; ?>
 		<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
         
        <div class="blog-post">
    	<h2 class="blog-post-title"><?php echo $post->title; ?></h2>
    	<p class="blog-post-meta"><?php echo $post->date; ?> by <a href="Rithik.php">Rithik</a></p>
    	 
    	<p><?php echo $post->body; ?></p>
    </div>
</div>


        </div>
</main>
 
    	
<?php include 'inc/footer.php'; ?>