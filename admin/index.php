 <?php
require_once("../Model/CommentModel.php");
require_once("../Model/PostsModel.php");

$PM=new PostsModel();
$CM=new CommentModel();
$i=$PM->RetournerNombrePosts();
//$x=$PM->RetournerNombreComment();
include('header.php'); 

?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>
			<div class="sortable row-fluid">
				<a  class="well span3 top-block" href="Post.php">
					<span class="icon32 icon-red icon-user"></span>
					<div>Posts</div>
					<div> <?PHP  echo ($i+1) ?></div>
				</a>

				<a  class="well span3 top-block" href="Comment.php">
					<span class="icon32 icon-color icon-user"></span><span class="icon32 icon-color icon-user"></span><span class="icon32 icon-color icon-user"></span>
					<div>Comments</div>
					<div><?PHP  echo ($x+1)?></div>
				</a>

								
				
			</div>
	
                
				
    
<?php include('footer.php'); ?>
