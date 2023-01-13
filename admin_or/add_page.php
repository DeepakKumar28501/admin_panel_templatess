<?
require 'header.php';
?>

<div class="row">
	<div class="col-md-12">
		<?
		$main->form->create_form();
			$main->card->open_card('<i class="fas fa-plus"></i> Add Page');
				$main->form->form_field('Page Name','text',['placeholder'=>'Enter Page Name.']);
				?>
				<div class="form-group">
					<label>Enter Content</label>
					<textarea class="form-control" name="content" placeholder="Enter Content"></textarea>
				</div>
				<?
			echo $main->card->close_div(1);
			$main->card->box_footer();
				$main->form->button('submit','<i class="fa fa-save"></i> Save');
			echo $main->card->close_div(2);
		$main->form->close_form();
		?>
	</div>
</div>
<script>
                        CKEDITOR.replace( 'content' );
                </script>
<?
require 'footer.php';
?>