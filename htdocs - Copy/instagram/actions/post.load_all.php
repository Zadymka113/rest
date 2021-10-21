<?php 
$posts_result = $db_conn->query("SELECT posts.ID_post, posts.description, posts.image, users.surname , posts.updated_at FROM posts JOIN users ON users.ID_user = posts.ID_user ORDER BY updated_at DESC");

$posts = $posts_result;
