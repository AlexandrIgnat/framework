<?php
require "Request.php";
require "models/post.php";
/*require "views/home.php";*/
$request = new Request;
if ($request->get('page')=="contact")
{
	require "views/contact.html";
}
elseif ($request->get('page')=="about")
{
	require "views/about.html";
}
else
{
	$post= new post;
	$posts= $post->getPosts();
	require "views/home.php";
}
?>