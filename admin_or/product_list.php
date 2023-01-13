<?php
	require 'header.php';
?>
	<div class="row" data-aos="zoom-in">
		<div class="col-md-12">
			<?php
				$main->card->open_card('<i class="fa fa-list"></i> List Product','list-prod	')
			?>
		</div>
	</div>
<?php
	require 'footer.php';
?>
<script type="text/javascript">
	product();
	function product(){
		$.ajax({
			type : 'POST',
			url  : 'product_list.php',
			data : {status : 'list_product'},
			success : function(res){
				$('.list-prod').html(res);
			}
		})
	}
</script>