<? //-------- Footer Plug-ins ----------// 
	
//---------- Flexslider ---------// ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<?php if ( (is_single()) or (is_page(1110)) ) { // if single project page, about page ?>
	<script defer src="<?php echo get_template_directory_uri(); ?>/library/js/flexslider/jquery.flexslider.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
	  $('.flexslider').flexslider({
	    animation: "slide",
	    start: function(slider){
	      $('body').removeClass('loading');
	    }
	  });
	});
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/flexslider/modernizr.js"></script>
<?php }

//---------- Toggle Menu ---------// ?>
<script type="text/javascript">
jQuery(document).ready(function($){

	/* toggle nav */
	$("#menu-toggle").on("click", function(){
		$("#nav-menu").slideToggle();
		$(this).toggleClass("active");
	});

});
</script>