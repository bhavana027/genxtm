<?php include 'inc/header.php'; ?>


    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">


      <?php foreach($posts as $post): ?>
        
        <div class="col-md-10">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success"><?php echo $post->category; ?></strong>
              <h3 class="mb-0">
                <?php echo $post->title; ?>
              </h3>
              <div class="mb-1 text-muted"><?php echo $post->date; ?></div>
              <p class="card-text mb-auto"><?php echo $post->description; ?></p>
              <a href="single.php?id=<?php echo $post->id; ?>">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="">
          </div>
         </div>
  <?php endforeach; ?>


          

          

       

        </div><!-- /.blog-main -->

        
      </div>
    </main>


  
   

<?php include 'inc/footer.php'; ?>