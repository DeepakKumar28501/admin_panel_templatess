<?php
	include 'header.php';

	$edit = $main->db->where('id',$main->input->get('id'))->get('product')->row();
	print_r($edit);
?>

<div class="row" data-aos="flip-left"
    >
	<div class="col-sm-6">
		<?php
		$main->card->open_card('<i class="fa fa-plus"></i> Add Product');
		$main->form->create_form('','POST','add_product');
		
		echo $main->form->hidden_input('hidden','status','edit_product');
		echo $main->form->hidden_input('hidden','id',$edit['id']);
		// echo $main->form->form_field('Select Gender','select',[],'	',['n'=>2,'m'=>3]);
		echo $main->form->form_field('Name:-','name',[],$edit['product_name'],['Placeholder' => 'Enter Product Name']);
		echo $main->form->form_field('Price:-','price',[],$edit['price'],['Placeholder' => 'Enter Price']);
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
<?php
	include 'footer.php';
?>
