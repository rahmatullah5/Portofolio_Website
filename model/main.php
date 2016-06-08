<?php
  include '../controller/function.php';
  include '../controller/connection.php';
  switch ($_GET['p']) {
    case 'home_page':
      include '../view/home_page.php';
      break;
    case 'contact_page':
      include '../view/contact.php';
      break;
    case 'blog_page':
      include '../view/blog.php';
      break;
  }
 ?>
