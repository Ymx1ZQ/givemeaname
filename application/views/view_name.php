<!DOCTYPE html>
<html lang="en">
<? $this->view("common/header.php"); ?>
  <body>
	  	
    <div class="container">
		<? if (!empty($message)) $this->load->view('common/message', $message); // info messages ?>
		
		<h3><?=$name['name']?>'<? if (strtolower(substr($name['name'], -1)) != 's') echo 's'?> page.</h3>
		<h5><A HREF="/deck">back</A></h5>
		<br>
		<hr/>
		<h4>$<?=$total_amount?>.00 collected</h4>
		<br>
		<h4>Donations:</h4>
		<?
			if (!empty($donations)) {
				echo '<ul>';
				foreach ($donations as $donation) {
					echo '<li>'.$donation['first_name'].' '.$donation['last_name'].' ($'.$donation['amount'].'.00): <br/>"<i>'. $donation['comment'].'</i>"</li>';
				}
				echo '</ul>';
			}
			else echo '<p>No name has been proposed yet</p>';
		?>
		<br/>
		<a href="/deck/donate/<?=$name['id']?>"> Donate! </a>
		<br/>
		<br/>
		<hr/>
		

    </div>


<? $this->view("common/footer.php"); ?>
