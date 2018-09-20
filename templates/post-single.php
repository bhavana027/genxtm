<?php include 'inc/header.php'; ?>
<style>
body{
background-color: #ffffff;
}

h2 {
margin: 0px;
background-color: #000000;
color:#ffffff;
}
 	
</style>
<a href="index.php"> <h2>GenX</h2></a>
    	<div class="ncontainer">
      
    	<h3 style="font-size:40px; height: 10px;"><?php echo $post->title; ?></h3>

    	<div class="mb-1" style="word-spacing: 5px;"> by <?php echo $post->author; ?>  |  <?php echo $post->date; ?></div>
    	
    	<p  style="text-align: justify; font-family: roboto; padding-top: 10px;"><?php echo $post->body; ?></p>
        
    
</div>
 
    	
<?php include 'inc/footer.php'; ?>