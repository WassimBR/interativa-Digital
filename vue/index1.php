<?php
include('header.php'); 
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
                <a class="navbar-brand" href="index.php">Back</a>
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
   <!--ICI VA LE CONTENU  --> 

<?php include('login.php'); ?>
		

    <hr>

    <!-- Footer -->
<footer>
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<ul class="list-inline text-center">
<li>
<a href="https://twitter.com/WassimBR">
<span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
</span>
</a>
</li>
<li>
<a href="https://www.facebook.com/wassim.romdhane">
<span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
</span>
</a>
</li>
<li>
<a href="https://github.com/WassimBR">
<span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-github fa-stack-1x fa-inverse"></i>
</span>
</a>
</li>
</ul>
<p class="copyright text-muted">Copyright &copy; 2015</p>
</div>
</div>
</div>
</footer>



</body>

</html>

    
