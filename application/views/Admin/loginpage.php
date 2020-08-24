<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
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
							<a href='#'>
								<button type='button' class='toggle-btn' activeclass='loged'>
									Log In
								</button>
							</a>						
							<a href='<?php echo base_url('Admin_dash/register'); ?>'>
								<button type='button' class='toggle-btn'>
									Register
								</button>
							</a>					
						</div>
						<div class='social-icon'>
							<a href='www.facebook.com' class='fa fa-facebook' ></a>
							<a href='www.twitter.com' class='fa fa-twitter' ></a>
							<a href='www.google.com' class='fa fa-google' ></a>
						</div>
						<form id='login' class='input-group' method="post" enctype="multipart/form-data"  action="<?php echo base_url('Admin_dash/login'); ?>">
							
							<input
								type='email'
								class='input-field'
								name='email'
								placeholder='Email Id'
					
							
								required
								autocomplete='off'
							/>
							
							<input
								type='password'
								class='input-field'
								name='pass'
								placeholder='Enter Password'
							
	
								required
							/>
							
							<input type='checkbox' class='check-box' />
							<span>Remeber Password</span>
							<input type="submit" name="submit" value='LOGIN'  class="submit-btn" />
							
						</form>
					</div>
				</div>


</body>
</html>