<!DOCTYPE html>
<html lang="en">
<? $this->view("common/header.php"); ?>
  <body>
	  	
    <div class="container">
		<? if (!empty($message)) $this->load->view('common/message', $message); // info messages ?>
		
		<h3>Donate for <?=$name['name']?>.</h3>					
		<form class="form-signin" method="post" action="/deck/finalizeDonate/<?=$name['id']?>">
			    <div class="input-prepend input-append">
					<label>donation: 
					<span class="add-on">$</span>
					<input class="span2" id="donation" name="donation" type="number" placeholder="donation">
					<span class="add-on">.00</span>
					</label>
				</div>

			<textarea name="comment" type="text" class="input-block-level" placeholder="Why would you like to donate for this name?" required="required"></textarea>
			<input class="btn btn-large btn-primary" type="submit" value="Donate">
			<a class="btn" href="/deck" >cancel</a>
		</form>
		

    </div>


<? $this->view("common/footer.php"); ?>

<script type="text/javascript">
	$("#donation").on('keyup',function(){
		if (this.value != '') {
			numeric_value = parseInt(this.value);
			if (isNaN(numeric_value)) numeric_value = 0;
			if (numeric_value < 1) numeric_value = 1;
			this.value = numeric_value;
		}
	});  
</script>
