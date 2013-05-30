<!DOCTYPE html>
<html lang="en">
<? $this->view("common/header.php"); ?>
    
    <body>
            <div data-role="content">
				<? if (!empty($message)) $this->load->view('common/message', $message); // info messages ?>
				<h3> Password recovery </h3>
				<h4> Please enter your email, so we can send you an email to reset your password.</h4>
				<form method="post" action="/auth/forgot_password">                        
                    <input name="email" id="email" placeholder="Type your registration E-Mail" type="email"/>
					<input class="btn btn-large btn-primary" type="submit" value="Reset password"/>					
                </form>
			</div>
<? $this->view("common/footer.php"); ?>
