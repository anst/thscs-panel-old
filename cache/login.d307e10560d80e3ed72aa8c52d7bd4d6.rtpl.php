<?php if(!class_exists('raintpl')){exit;}?>					<!--[if lt IE 7]>
			            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
			        <![endif]-->
<div class="preloader">
	<div class="loader"></div>
</div>
<div class="login-container">
	<div id="login-form">
		<h3 align="right"><?php echo $contest;?></h1>
		<p>
			 Welcome to <?php echo $school;?>!
		</p>
		<hr id="loginhr"/>
		<div id="error" style="width: 280px;float: right; text-align: center;"><div class='alert alert-success'>Please log in or register.</div></div><br /><br /><br />
		<form id="form" method="post" class="form-horizontal" action="" style="width: 400px; float: right; height: 100px;">
			<fieldset>
				<div class="control-group" >
					<label class="control-label" for="teamnumberd" style="">Team #: </label>
					<div class="controls">
						<input type="text" name="teamnumberd" id="teamnumberd" class="required"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="passwordd" style="">Password: </label>
					<div class="controls">
						<input type="password" name="passwordd" id="passwordd" class="required"/>
					</div>
				</div>
			</fieldset>
			<a href="#myModal" role="button" class="btn btn-success" data-toggle="modal" value="Login">Register</a>
			<input type="submit" id="login" class="btn btn-primary" value="Login"/>
		</form>
	</div>
</div>

<div class="modal fade hide" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 600px; outline: none;">
	<div class="modal-header">
		<a class="close" data-dismiss="modal">×</a>
		<h3>Register</h3> <span style="font-size: 12px;">Registrations with a different team number than provided will end with the disqualification of the team.<br>Remeber you can only register once. If you are having troubles with registration please talk to one of our contest proctors. Inside the contest panel you will be able to make appeals, view the scoreboard, edit team information, and order pizza.</span>
	</div>
	<div class="modal-body">
		<form action="" id="register_form" class="form-horizontal">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="novadv" style="width: 300px; padding-right: 10px;">Novice or Advanced: </label>
					<div class="controls">
						<select name="novadv" id="novadv" class="required">
							<option value="">--- Check One ---</option>
							<option value="nov">Novice</option>
							<option value="adv">Advanced</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="school" style="width: 300px; padding-right: 10px;">School: </label>
					<div class="controls">
						<input type="text" name="school" id="school" class="required"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="teamnumber" style="width: 300px; padding-right: 10px;">Team Number: </label>
					<div class="controls">
						<input type="text" name="teamnumber" id="teamnumber" class="required"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password" style="width: 300px; padding-right: 10px;">Password: </label>
					<div class="controls">
						<input type="password" name="password" id="password" class="required"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="passwordc" style="width: 300px; padding-right: 10px;">Confirm Password: </label>
					<div class="controls">
						<input type="password" name="passwordc" id="passwordc" class="required"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="member1" style="width: 300px; padding-right: 10px;">Team Member #1: </label>
					<div class="controls">
						<input type="text" name="member1" id="member1" class="required"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="member2" style="width: 300px; padding-right: 10px;">Team Member #2 (leave blank if nonexistant): </label>
					<div class="controls">
						<input type="text" name="member2" id="member2"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="member3" style="width: 300px; padding-right: 10px;">Team Member #3 (leave blank if nonexistant): </label>
					<div class="controls">
						<input type="text" name="member3" id="member3"/>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="modal-footer">
			<input type="submit" name="register" class="btn btn-inverse" value="Register" id="register"/>
		</form>
	</div>
</div>