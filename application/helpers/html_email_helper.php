<?php

	function email_header($title) {
		echo '
			<html>				
			<body style="background-color: #eeeeee; margin: 0; padding: 0; border: 0; outline: 0;">
				<div style="			
					margin: 0;
					padding: 0;
					border: 0;
					outline: 0; 		
					color: #FFFFFF;
					font-size: 200%;
					font-weight: bold;					
					background-color: #5E96C4;
					//background-image: url(http://givemeaname.org/img/background_header.png);
					background-repeat: repeat-x;
					text-align: center;
					height: 82px;">
					<img src="http://givemeaname.org/img/logo.png" alt="givemeaname.org" style="margin: 12px 0;">
				</div>
				<BR/>
				<h2 style="margin: 0; padding: 0; border: 0; outline: 0" ><span style="color:black; margin-left: 1em;">'.$title.'</span></h2>
				<BR/>
		';
	}

	function email_content($content) {
		echo '
				<div style="margin: 0; padding: 0; border: 0; outline: 0; padding: 1em;">
				'. $content .'
				</div>';
	}

	function email_footer() {
		echo '
				<div style="margin: 0; padding: 0; border: 0; outline: 0; padding: 1em;">
					<p style="margin: 0; padding: 0; border: 0; outline: 0" >Cheers,<BR/>GiveMeAName Team</p>				
					<BR/>
					<BR/>
					<hr/>
					<h5 style="margin: 0; padding: 0; border: 0; outline: 0" >
						<span style="color: silver; font-style:italic">
							You received this email because you are registered on givemeaname.org
							You will find more information about our privacy policy at <a href="http://givemeaname.org/info/privacypolicy">http://givemeaname.org/info/privacypolicy</a> or feel free to send an email to <a href="mailto:info@givemeaname.org">info@givemeaname.org</a>.
						</span>
					</h5>
				</div>
			</body>
		</html>';
	}

?>
