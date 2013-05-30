<!DOCTYPE html>
<html lang="en">
<? $this->view("common/header.php"); ?>
  <body>
	  	
    <div class="container">
		<? if (!empty($message)) $this->load->view('common/message', $message); // info messages ?>
		<form class="form-signin" method="post" action="/auth/account_settings_update">
			<h3 class="form-signin-heading">Edit your account settings</h3>
			<input name="first_name" type="text" class="input-block-level" placeholder="Name" required="required" value="<?=$suggested_fields['first_name']?>">
			<input name="last_name" type="text" class="input-block-level" placeholder="Surname" required="required" value="<?=$suggested_fields['last_name']?>">
			<input name="email" type="email" class="input-block-level" placeholder="New email address" required="required" value="<?=$suggested_fields['email']?>">
			<input name="email_confirm" type="email" class="input-block-level" placeholder="Confirm email" required="required" value="<?=$suggested_fields['email']?>">
			<input name="new_password" type="password" class="input-block-level" placeholder="New password" required="required">
			<input name="password_confirm" type="password" class="input-block-level" placeholder="Confirm Password" required="required">
			<HR/>
			<input name="password" type="password" class="input-block-level" placeholder="Old password" required="required">
			<input class="btn btn-large btn-primary" type="submit" value="confirm">
		</form>
		<a class="btn btn-large btn-secondary" href="#">cancel</a>
    </div>
    

<A HREF="#">delete account</A>


AS YOU CAN NOTICE, THIS PAGE IS NOT WORKING YET!!

<? $this->view("common/footer.php"); ?>
