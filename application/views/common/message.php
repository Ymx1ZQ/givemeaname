<? 
	switch ($type) {
		case 'positive':
			?>								
				<div class="alert alert-success"><?=$text;?></div>
			<?						
			break;
		case 'negative':
			?>
				<div class="alert alert-error"><?=$text;?></div>
			<?
			break;
		case 'neutral':
			?>
				<div class="alert alert-info"><?=$text;?></div>
			<?
			break;			
		default:
			?>
				<div class="alert alert-warning"><?=$text;?></div>
			<?
			break;
}
