<?php include 'header.php'; ?>
<title>Sign-In</title>
<?php include 'nav_cont.php'; ?> 

	<div class="auth">
		<h1>Member Sign-In</h1>
		<form>
			<label id="email_label" class="auth_default">
				<div>
					<span id="email_span">Email Address</span>
				</div>
				<div style="display: flex; position: relative;">
					<input type="email" name="" onfocusout="emailValidate(this)">
					<img id="email_img" src="../img/login_attention.svg">
				</div>
			</label>
			<label id="pass_label" class="auth_default">
				<div>
					<span id="pass_span">Password</span>
				</div>
				<div style="display: flex; position: relative;">
					<input type="password" name="" onfocusout="passValidate(this)">
					<img id="pass_img" src="../img/login_attention.svg">
				</div>
			</label>
			<p>
				<a href="#">Forgot Password?</a>
			</p>
			<input type="checkbox" name="" value="Remember my Email">
			<span class="txt_auth">Remember my Email</span>
			<button type="submit">Sign In</button>
		</form>
	</div>
</body>
</html>