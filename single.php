<?php include_once 'config/init.php' ?>
<?php
$post = new post;

$template = new template('templates/post-single.php');
$post_id = isset($_GET['id']) ? $_GET['id']: null;
 
$template->post = $post->getPost($post_id);
 
echo $template;
  







 