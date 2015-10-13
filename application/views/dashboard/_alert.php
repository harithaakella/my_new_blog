<?php if($this->session->flashdata('message')):?>
<div class="row">
	<div class="col-lg-12">
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<span class="glyphicon glyphicon-check" aria-hidden="true"></span> <?php echo $this->session->flashdata('message')?>
		</div>
	</div>
</div>
<?php endif;?>

<?php if($this->session->flashdata('errors')):?>
<div class="row">
	<div class="col-lg-12">
		<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <?php print_r($this->session->flashdata('errors'))?>
		</div>
	</div>
</div>
<?php endif;?>
