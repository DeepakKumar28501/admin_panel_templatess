<?php
	include 'header.php';
?>

<div class="row" data-aos="flip-left">
	<div class="col-sm-12">
		<?php
		$main->card->open_card('<i class="fa fa-plus"></i> Add Product');
		$main->form->create_form('','POST','add_product');
		
		echo $main->form->hidden_input('hidden','status','product');
		// echo $main->form->form_field('Select Gender','select',[],'	',['n'=>2,'m'=>3]);
		echo $main->form->form_field('Name:-','name',[],' ',['Placeholder' => 'Enter Product Name']);
		echo $main->form->form_field('Price:-','price',[],' ',['Placeholder' => 'Enter Price']);
		$main->form->close_form();
		$main->card->box_footer('bg-primary');
		echo $main->form->button('submit','<i class="fa fa-save"></i> Add');

		echo $main->card->close_div(3);
		// echo '<pre>';
		// print_r($main);
		// echo '</pre>';
		echo $main->form->close_form();
		?>
	</div>
</div>
<div class="row" data-aos="flip-right">
	<div class="col-md-12">
		<?php
			$main->card->open_card('<i class="fa fa-list"></i> List Product','list-prod');
			$main->card->box_footer('bg-primary');
			echo $main->card->close_div(2);
		?>
	</div>
</div>	

<?php
	include 'footer.php';
?>
<script type="text/javascript">
	$('.add_product').submit(function(x){
		x.preventDefault();
		$.ajax({
			type : $(this).attr('method'),
			url  : $(this).attr('action'),
			data : $(this).serialize(),
			success : function(res){
				alert(res);
				product();
				$('.addproduct')[0].reset();
			}
		})
	});
	product();
	function product(){
		$.ajax({
			type : 'POST',
			url  : 'addproduct.php',
			data : {status: 'list_product'},
			success : function(res){
				$('.list-prod').html(res);
				console.log (res);
			}
		})
	}

</script>
