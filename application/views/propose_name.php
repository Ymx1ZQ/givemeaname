<!DOCTYPE html>
<html lang="en">
<? $this->view("common/header.php"); ?>
  <body>
	  	
    <div class="container">
		<? if (!empty($message)) $this->load->view('common/message', $message); // info messages ?>
		
		<h3>Propose a name</h3>					
		
		<form class="form-signin" method="post" action="/deck/finalizePropose">			
			
			<input name="name" type="text" class="input-block-level" placeholder="Name proposed" required="required">
			
			Gender:
			<label class="radio inline"><input type="radio" name="optionsRadios" id="optionsRadios1" value="0" checked> male</label>
			<label class="radio inline"><input type="radio" name="optionsRadios" id="optionsRadios2" value="1">female</label>
			<br/>
			<br/>
			    <div class="input-prepend input-append">
					<label>$5.00 fee + initial donation: 
					<span class="add-on">$</span>
					<input class="span2" id="donation" name="donation" type="number" placeholder="first donation">
					<span class="add-on">.00</span> = 
					$<span id="total">5</span>.00
					</label>
				</div>

			<textarea name="comment" type="text" class="input-block-level" placeholder="Why would you like to propose this name?" required="required"></textarea>
			<input class="btn btn-large btn-primary" type="submit" value="Propose">
			<a class="btn" href="/deck" >cancel</a>
		</form>
		

    </div>


<? $this->view("common/footer.php"); ?>

<script type="text/javascript">
	$("#donation").on('keyup',function(){
		if (this.value != '') {
			numeric_value = parseInt(this.value);
			if (isNaN(numeric_value)) numeric_value = 0;
			if (numeric_value < 0) numeric_value = 0;
			this.value = numeric_value;
			$("#total").html(numeric_value+5);
		}
	});  
</script>
