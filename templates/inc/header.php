<!doctype html>

  <head>
    <title>SITE</title>
<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css">
 <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/styles.css" >
  </head>

  <body>
<div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#"></a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="index.php">SITE</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            

              <form method="GET" action="index.php">
          <select name="category" class="mx-6">
            <option value = "0">category</option>
            <?php foreach($categories as $category): ?>
              <option value="<?php echo $category->id; ?>"><?php echo $category->category; ?></option>
           <?php endforeach; ?>
        
       </select>
       <input type ="submit"class="mx-6" value="search">
     </form>
          

     </div>
        </div>
      </header>
        <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">World</a>
          <a class="p-2 text-muted" href="#">U.S.</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a>
        </nav>
    </div>
    </div>

       
    