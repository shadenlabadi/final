<?php include('config/constants.php');  ?>


<html lang="en">
  <head>
  	<title>Table 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="ccss/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Sector Information</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
						     <th>S.N</th>
 <th>Sector name</th>
 <th>Sector IP</th>
 <th>Status </th>
 <th>City</th>
 <th>Number of users</th>

						    </tr>
						  </thead>
						  <tbody>
						   
 <?php
 
 
 $sql="SELECT*FROM sector WHERE city='Salfit'";
 
 $res=  mysqli_query($conn, $sql);
 
 $count=  mysqli_num_rows($res);
 
 
 
$sn=1;
 
 
 if($count>0){
     
     while($row=mysqli_fetch_assoc($res))
     {
         $id=$row['id'];
         $title=$row['title'];

         $ip=$row['ip'];
         $status=$row['status'];
         $city=$row['city'];
         $subscription=$row['subscription'];


         
         
         ?>
 
 
 
  <tr>
 <td><?php echo $id; ?></td>
 <td><?php echo $title;  ?></td>
  <td><?php echo$ip; ?></td>
 <td><?php echo$status; ?></td>
 <td><?php echo$city; ?></td>
 <td><?php echo$subscription; ?></td>

 
 </tr>
 
 
 <?php
 

     }
     
     
 }
 else {
  ?>
 
 <tr>
     
     <td colspan="6"><div class="error">No Sector Added.</div></td>
 </tr>
 
 
 
 <?php
 }
 
 ?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>