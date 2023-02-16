<?php 

/*
Template Name: Контакты
*/


 ?>

<?php get_header(); ?>

<div class="page-content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumbs">
					<?php true_breadcrumbs(); ?>
				</div>
			</div>
		</div>

		<?php 
			include 'template-parts/contacts/contacts.php';
			include 'template-parts/contacts/feedback.php';
		?>
		
	</div>

	<?php 
		include 'template-parts/contacts/map.php';
		include 'template-parts/contacts/order-form.php';
        include 'template-parts/mortgage_block.php';
	 ?>

</div>

<?php get_footer(); ?>