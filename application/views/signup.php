<!DOCTYPE html>
<html lang="en">
<? $this->view("common/header.php"); ?>
  <body>
	  	
    <div class="container">
		<? if (!empty($message)) $this->load->view('common/message', $message); // info messages ?>
		<form class="form-signin" method="post" action="/auth/finalizeSignup">
			<h3 class="form-signin-heading">Please fill the form to sign up on givemeaname.org</h3>
			<input name="redirect_back" type="hidden" value="<?=$redirect_back?>">
			<input name="redirect_forward" type="hidden" value="<?=$redirect_forward?>">
			<input name="first_name" type="text" class="input-block-level" placeholder="Name" required="required" value="<?=$suggested_fields['first_name']?>">
			<input name="last_name" type="text" class="input-block-level" placeholder="Surname" required="required" value="<?=$suggested_fields['last_name']?>">
			<input name="email" type="email" class="input-block-level" placeholder="Email address" required="required" value="<?=$suggested_fields['email']?>">
			<input name="email_confirm" type="email" class="input-block-level" placeholder="Confirm email" required="required" value="<?=$suggested_fields['email_confirm']?>">
			<input name="password" type="password" class="input-block-level" placeholder="Password" required="required">
			<input name="password_confirm" type="password" class="input-block-level" placeholder="Confirm Password" required="required">
			<input class="btn btn-large btn-primary" type="submit" value="Sign Up">
		</form>
    </div>


<? $this->view("common/footer.php"); ?>
