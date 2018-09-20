<?php include 'inc/header.php'; ?>


<header  style="background-image: url(src/bg.jpg) ;text-align: center;">      
  <a href="index.php"> <h1 style="font-family: roboto; font-weight:1000;">GenX</h1></a>
</header>



<div class="navbar">
  <a href="#">Home</a> 
  <a href="#">Search</a> 
  <a href="#">Contact</a> 
  <a href="#">Login</a>
</div>



<div class="fcontainer">
  <div class="row">

    <div class="lecolumn">
    <h2 style="color: #000000 ">post 1</h2>
    </div>

    <div class="ricolumn" >
    <h2 style="color: #ffffff">post 3</h2>
    </div>

  </div>


  <div class="row">

  <div class="ilcolumn">
  <h2 style="color: #000000; ">post 1</h2>
  </div>

  <div class="imcolumn" >
  <h2 style="color: #ffffff; ">post 1</h2>
  </div>

  <div class="ircolumn" >
  <h2 style="color: #000000; ">post 1</h2>
  </div>

  </div>






  <div class="row">

    <div class="ricolumn">
    <h2 style="color: #ffffff; ">post 1</h2>
    </div>

    <div class="lecolumn" >
    <h2 style="color: #000000">post 3</h2>
    </div>
  </div>

 </div>


<div class= "container" style="background-image: url(src/bg.jpg) ">
  <h1 style="color: #ffffff">banner section</h1>
  <br>
</div> 



<div class="container" style="background-color: #ffffff;">

<div class="rowp">

<div class="leftcolumn">
	
<?php foreach($posts as $post): ?>
 <div class="container" style="background-color: #ffffff; ">
    <div class="img">
    <img src="src/black.jpg"></div>
    <hr>
    <strong style="font-size: 20px;">
                <a href="single.php?id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a>
       </strong>


		 <div class="mb-1" style="word-spacing: 5px;">by  <?php echo $post->author; ?>  |  <?php echo $post->date; ?>
      </div>
				
  </div>       
<?php endforeach; ?>
</div>



<div class="rightcolumn" style="padding-top: 100px; font-size: 20px;">
  <div class="container">
  <h3 style="color: #000000;">Featured Posts</h3>
  </div>
    <?php foreach($posts as $post): ?>

      <div class="container" style="background-color: #ffffff;">

        <strong class="d-inline-block mb-2 text-success" style="font-size: 20px;">

                <a href="single.php?id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a>
         </strong>
         <div class="mb-1" style="word-spacing: 5px;">by  <?php echo $post->author; ?>  |  <?php echo $post->date; ?> </div>
        <hr>
      </div>
        
<?php endforeach; ?>  
</div>  
</div>

</div>









<div class="container" style="background-color:#262626;">
<form action="/action_page.php">
  <div class="container">
    <h2 style="color:#ffffff;">Subscribe to our Newsletter</h2>
    <p style="color:#ffffff;"> why you should subscribe to our newsletter, Get updated daily with lots of news.</p>
  </div>

  <div class="container" style="width: 50%">
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Email address" name="mail" required>
    <label  style="color:#ffffff;">
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  </div>

  <div class="container" style="width: 25%">
    <input type="submit" value="Subscribe">
  </div>
</form>
</div>



        



 
   

<?php include 'inc/footer.php'; ?>