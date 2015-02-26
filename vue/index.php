<?php
include('header.php'); 
require_once('..\Configuration.php');
require_once("..\Model\PostsModel.php");
$PM=new PostsModel();
$liste=$PM->Afficher();
function __construct()
	{
		$Conf=new Configuration();
		$Conf->connexion();
	}
?>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index1.php">Login</a>
            </div>
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <!--post preview-->
                <?php foreach ($liste as $Voi): ?>
                <?php echo '<div class="post-preview">' ;?>
                <?php echo '<a href="post.php?id='.($Voi->GetIdpost()).'">'; ?>
                <?php echo '<h2 class="post-title">' ;?>
                <?php echo ($Voi->GetTitle()); ?>
                <?php echo '</h2>' ?>
                <?php echo '<h3 class="post-subtitle">'; ?>
                <?php echo ($Voi->GetSubtitle()); ?>
                <?php echo '</h3>'; ?>
                <?php echo '</a>'; ?>
                <?php echo '<p class="post-meta">Posted on '.($Voi->GetDate()).'</p>'; ?>
                <?php echo '</div>'; ?>
                <?php echo '<hr>'; ?>
                <?php endforeach; ?>
                
                        
                           
                        
                        
                     
                        
                    
                    
                
                
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
   <?php include('footer.php'); ?>

    
