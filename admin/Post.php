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


		<div>
				<ul class="breadcrumb">
					<li>
                                            <a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Posts</a>
					</li>
                                        
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Posts</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								
                                                                  <th>Title</th>
								  <th>Subtitle</th>
								  <th>Text</th>
								  <th>Date </th>
   								  <th>Categories </th>
                                                                  
							  
                              <th></th>
                              <th></th>
							  </tr>
						  </thead>   
						  <tbody>
                          <?php foreach ($liste as $Voi): ?>
							<tr>
                                                            
                                                            <td class="center"><?php echo($Voi->GetTitle()); ?></td>
                                                            <td class="center"><?php echo($Voi->GetSubtitle()); ?></td>
                                                            <td class="center">	<?php echo($Voi->GetText()); ?></td>
                                                            <td class="center">	<?php echo($Voi->GetDate()); ?></td>
                                                            <td class="center">	<?php echo($Voi->GetCategorie()); ?></td>
                              <th> - </th>
								
                                    <td>
                                        <a target="_blank" class="btn btn-danger" href="../control/SupprimerPosts.php?Id=<?php echo($Voi->GetIdpost()); ?>">
                             	<i class="icon-trash icon-white"></i> Delete</a>
								</td>
							</tr>
							<?php endforeach; ?>
							</tbody>
                            
					  </table>         
                      
                     
					</div>
                                    <div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  
							  
                                                    <form name="form1" id="form1" action="../control/Ajouter_Post.php" method="POST">
                                                                 <tr> <td>Title</td><td><input type="text" name="Title"></td></tr>
								 <tr> <td>Subtitle</td><td><input type="text" name="Subtitle"></td></tr>
                                                                 <tr> <td>Text</td><td><input type="text" name="Text"></td></tr>
   								 <tr> <td>Categories </td><td><input type="text" name="Categorie"></td></tr>
                                                                 <tr> <td><input type="submit" name="bababa" id="btn" value="Submit" >
                                                                 <input type="button" name="btn" onclick = "reset()" value="reset"></td></tr>
                                                                 </form>
                                 
                              

                            
					  </table>         
                      
                     
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
        
        

       
<?php include('footer.php'); ?>
