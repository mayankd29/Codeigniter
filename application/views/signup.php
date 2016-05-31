<html>
<style type="text/css">
body{
	background-color: #19227d;
	margin:0px;
	padding: 0px;
}
.login{
	padding:5px 15px;
	background-color:#ff9700;
	text-align: center;
	color: #fff;
	margin-top: 0px;
	font-size: 30px;
	border-radius: 5px;
	margin-bottom: 35px;
}
.container{
	position: relative;

	height: 100%;
	width: 100%;
}
.formcontainer{
	position: absolute;
	margin: 100px auto;
	width: 400px;
	height: 400px;
	top: 50%;
    left: 50%;
    margin: -200px 0 0 -200px;
    background-color: #fff;
    border-radius: 5px;
    text-align: center;

}
.formcontainer2{
	position: absolute;
	margin: 100px auto;
	width: 400px;
	height: 500px;
	top: 50%;
    left: 50%;
    margin: -250px 0 0 -200px;
    background-color: #fff;
    border-radius: 5px;
    text-align: center;

}
.formelement{
	width: 100%;
	margin-bottom: 35px;
	border-left: 0px;
	border-top: 0px;
	border-right: 0px;
	border-bottom: 2px solid #ff9700;
	font-size: 18px;
	outline: none;
}
.wrapper{
	padding:0px 15px;
}
.butn{
	background-color: #ff9700;
	color: #fff;
	padding: 10px 30px;
	outline: none;
	border: 1px solid #ff9700;
	font-size: 18px;
	margin-top: 20px;
	outline: 0;
	text-decoration: none;
	

}

</style>
<div class="container">
	<div class="formcontainer2">
		<h2 class="login">Sign up</h2>
		<div class="wrapper" id="login_form">
			<?php 

			echo form_open('logincontroller/create_member'); 
			echo form_input('first_name', 'First Name', 'class="formelement"');
			echo form_input('last_name','Last Name', 'class="formelement"');
			echo form_input('username', 'Username', 'class="formelement"');
			echo form_input('email', 'Email', 'class="formelement"');
			echo form_password('password', 'Password', 'class="formelement"');
			echo form_submit('submit', 'Register', 'class="butn"');
		
             ?>
             <?php echo validation_errors('<p class="error">');?>
			



		     <!--<input type="text"  class="formelement"  name="fullname"  value="<?php //echo set_value('Fullname');?>" />

		     <input type="email"  class="formelement" name="email" value="<?php //echo set_value('Email');?>"/>
             <input type="password" class="formelement" name="password" value="<?php //echo set_value('Password');?>"/>
             <input type="submit" value="login" class="butn">-->
           
            

		</div>
		

	</div>



</div>
</html>