<!DOCTYPE html>
<html lang="en">
<? $this->view("common/header.php"); ?>
  <body>
	  	
    <div class="container">
		<? if (!empty($message)) $this->load->view('common/message', $message); // info messages ?>
		
<h3>Hello <?=$user_data['name_to_show']?>! You are logged in givemeaname.org!</h3>					
<h4><A HREF="/auth/logout">logout</A></h4>
<h4><A HREF="/auth/account_settings">account settings</A></h4>

    </div>


<? $this->view("common/footer.php"); ?>
