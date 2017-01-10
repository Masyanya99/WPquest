<?php get_header(); ?>
 
 
  <?php the_post(); ?>
<div class="centerbox">  
<div class="block">
	<div class="post_header" >
	
		 <div class="hypertext" >
			    
				<?php the_title(); ?>			<br>
		
		</div>
		
		<div class="post_additional">
		
		<div class="story__toggle-button" title="Показать/скрыть пост" data-story-id="4744031" data-story-long="false" data-story-type="gtpost">
						<i class="i-sprite--inline-block i-sprite--feed__gtpost-hide"></i>
					</div>
		
			<?php the_date(); ?>
			<?php the_category(', '); ?>
		</div>
	</div>
	
		<div class="content">
							
			 <?php  the_content('Показать полностью');	?>
		</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
 	 $(document).ready(function(){
	
		 $(window).scroll(function(){
			 
			 $('.hypertext').each(function(){
				   
				
				if ( $(this).offset().top < ($(window).scrollTop()+40) ) 
					 {
						  $(this).addClass('hp_showed');
						
					};
	
			 });
		 });
	 });
		

			
	</script>
		
 
<?php get_footer(); ?>