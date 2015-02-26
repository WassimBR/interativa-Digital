<?php 

include('header.php'); 
require_once('..\Configuration.php');
require_once("..\Model\CommentModel.php");
$CM=new CommentModel();
$liste=$CM->Afficher();
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
						<a href="#">Comment</a>
					</li>
                                        
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Comment</h2>
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
								
                                                                  <th>Name</th>
								  <th>E_mail</th>
								  <th>Message</th>
                                                                  <th>Ip</th>
                                                                  <th>Date </th>
   								  <th>Post </th>
                                                                  
							  
                              <th></th>
                              <th></th>
							  </tr>
						  </thead>   
						  <tbody>
                          <?php foreach ($liste as $Voi): ?>
							<tr>
                                                            
                                                            <td class="center"><?php echo($Voi->getName()); ?></td>
                                                            <td class="center"><?php echo($Voi->getEmail()); ?></td>
                                                            <td class="center">	<?php echo($Voi->getMessage()); ?></td>
                                                            <td class="center">	<?php echo($Voi->getIp()); ?></td>
                                                            <td class="center">	<?php echo($Voi->getDate()); ?></td>
                                                            <td class="center">	<?php echo($Voi->getPost()); ?></td>
                              <th> - </th>
								
                                    <td>
                                        <a target="_blank" class="btn btn-danger" href="../control/SupprimerComment.php?Id=<?php echo($Voi->getIdcomment()); ?>">
                             	<i class="icon-trash icon-white"></i> Delete</a>
								</td>
							</tr>
							<?php endforeach; ?>
							</tbody>
                            
					  </table>         
                      
                     
					</div>
                                        <div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  
							  
                                                    <form name="form1" id="form1" action="../control/Ajouter_comment.php" method="POST">
                                                                 <tr> <td>Name</td><td><input type="text" name="Name"></td></tr>
								 <tr> <td>Email</td><td><input type="text" name="Email"></td></tr>
                                                                 <tr> <td>Message</td><td><input type="text" name="Message"></td></tr>
   								 <tr> <td>post </td><td><input type="text" name="Post"></td></tr>
                                                                 <tr> <td><input type="submit" name="bababa" id="btn" value="Submit" >
                                                                 <input type="button" name="btn" onclick = "reset()" value="reset"></td></tr>
                                                                 </form>
                                 
                              

                            
					  </table>         
                      
                     
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
        
        

       
<?php include('footer.php'); ?>
