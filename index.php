<?php include_once 'config/init.php' ?>
<?php
$post = new post;

$template = new template('templates/frontpage.php');
$category = isset($_GET['category']) ? $_GET['category']: null;
if($category){
$template->posts = $post->getByCategory($category);

}else{
$template->title = 'blogs';
$template->posts = $post->getallposts();
}


$template->categories = $post->getcategories();

echo $template;
  