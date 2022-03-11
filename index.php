<!DOCTYPE html>
<?php
require_once('config.php');
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>registration</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div>
	<?php

	?>
</div>
<form action="registration.php" method="post">
  <h2>Register</h2>
		<p>
			<label for="firstname" class="floatLabel">Name</label>
			<input id="firstname" name="firstname" type="text">
		</p>
		<p>
			<label for="registration" class="floatLabel">Registration number</label>
			<input id="registration" name="whatsapp Number" type="text">

		</p>
		<p>
			<label for="email" class="floatLabel">Email</label>
			<input id="email" name="regist" type="text">

		</p>
		       <p>
			<label for="branch" class="floatLabel">Branch</label>
			<input id="branch" name="batch" type="text"> </p>

		               <p>
                			<label for="dom" class="floatLabel">contact</label>
                			<input id="dom" name="dom" type="text">

                		</p>

        <p>
        	 <label for="contact" class="floatLabel">Domain</label>
             <select id="contact" name="contact" style=" background: rgba(255, 255, 255, 0);border: 1px solid #f15f53;font-size: 1.6em;
                                                       padding: .8em .5em;
                                                       border-radius: 10px;
                                                       width:100%;
                                                       outline: none;">
               <option value="Graphic designing and video editing">------</option>
               <option value="Graphic designing and video editing">Graphic designing and video editing</option>
               <option value="Social media & content writing">Social media & content writing</option>
               <option value="Technical team">Technical team</option>
               <option value="Event management & Marketing">Event management & Marketing</option>
               <option value="Public Speaking">Public Speaking</option>
                  </select>
        </p>


		<p>
			<input type="submit" value="Submit" id="register">
		</p>
	</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script type="text/javascript">
  	$(function(){
  		$('#register').click(function(e){

  			var valid = this.form.checkValidity();

  			if(valid){


  			var firstname 	    = $('#firstname').val();
  			var registration	= $('#registration').val();
  			var email 	        = $('#email').val();
  			var branch          = $('#branch').val();
  			var dom             = $('dom').val();
  			var contact 	    = $('#contact').val();




  				e.preventDefault();

  				$.ajax({
  					type: 'POST',
  					url: 'process.php',
  					data: {firstname: firstname,registration: registration,email: email,branch: branch, dom: dom,contact: contact},
  					success: function(data){
  					Swal.fire({
  								'title': 'Successful',
  								'text': data,
  								'type': 'success'
  								})

  					},
  					error: function(data){
  						Swal.fire({
  								'title': 'Errors',
  								'text': 'There were errors while saving the data.',
  								'type': 'error'
  								})
  					}
  				});


  			}else{

  			}





  		});


  	});

  </script>

</body>
</html>
