<!DOCTYPE html>
<html>
<head>
	<title>register page</title>
	<link rel="stylesheet" href="<?php echo base_url('Admin_assests/css/loginstyle.css'); ?>" />
	<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
</head>
<body>
<div class='hero'>
					<div class='form-box'>

						<div class='button-box'>
							<div id='btn'></div>
							<a href="<?php echo base_url('Admin_dash/login'); ?>" >
								<button type='button' class='toggle-btn'>
									Log In
								</button>
							</a>
								<a href="#">
								<button type='button' class='toggle-btn'>
									Register
								</button>
							</a>
						</div>
						<div class='social-icon'>
							<a href="www.facebook.com" class='fa fa-facebook' ></a>
							<a href="www.twitter.com" class='fa fa-twitter' ></a>
							<a href="www.google.com" class='fa fa-google' ></a>
						</div>
						<form id='register' class='input-group' enctype="multipart/form-data" method="post" action="<?php echo base_url('Admin_dash/register'); ?>" >
							<input
								type='text'
								name='username'
								class='input-field'
								placeholder='Enter Your Name'
								
							    required
							    autocomplete='off'
							/>
							<input
								type='email'
								name='email'
								class='input-field'
								
								placeholder='Enter Email Id'
								required
								autocomplete='off'
							/>
							<input
								type='text'
								name='phone'
								class='input-field'
								placeholder='Enter Phone Number'
								
								required
								autocomplete='off'
							/>
							
							<input
							 type="file"
							 name="user_file"
							 class='input-field'

							 />
							<input
								type='password'
								name='pass'
								class='input-field'
								placeholder='Enter Your Password'
								
								required
							/>
							<input type='checkbox' class='check-box' />
							<span>I agree to the trems and conditions</span>
							<input type="submit" name="submit" value="REGISTER"  class="submit-btn" />
						</form>
					</div>
				</div>
</body>
</html>