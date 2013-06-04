<!DOCTYPE html>
<html lang="en">
<? $this->view("common/header.php"); ?>
  <body>
	  	
    <div class="container">
		<? if (!empty($message)) $this->load->view('common/message', $message); // info messages ?>
		
		<h3>Hello <?=$user_data['name_to_show']?>! You are logged in givemeaname.org!</h3>					
		<h5><A HREF="/auth/logout">logout</A> | <A HREF="/auth/account_settings">account settings</A></h5>
		<br>
		<hr/>
		<h4>List of names available:</h4>
		<?
			if (!empty($names)) {
				echo '<ul>';
				foreach ($names as $name) {
					echo '<li><a href="/deck/view_name/'.$name['id'].'">'.$name['name'].'</a></li>';
				}
				echo '</ul>';
			}
			else echo '<p>No name has been proposed yet</p>';
		?>
		<br/>
		<a href="/deck/propose"> Propose a name! </a>
		<br/>
		<br/>
		<hr/>
		

    </div>


<? $this->view("common/footer.php"); ?>
