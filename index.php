<?php get_header(); ?>


<div class="centerbox">


<div class="b-feed-panel" data-mode="hot">
					<div class="b-feed-panel__toolbar">
			
					<div class="feed-panel-left">
						<span>По</span>
						<a data-type="sort" data-value="0" href="javascript: void(0);">актуальности</a>
						<span>за</span>
						<a data-type="date" data-value="today" href="javascript: void(0);">сегодня</a>
					</div>
				
				<div id="feed-panel-hidden-counter" class="feed-panel-right">
					<a data-type="mode" data-value="0" href="javascript: void(0);">показывать</a>
					<span>просмотренные посты</span>
				</div>
			
					</div>
				</div>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<?php

if ( have_posts() ){
	while ( have_posts() ){ the_post(); ?>
	
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
	
	<br>
<?php
	}
	the_posts_pagination('screen_reader_text= ');
} else {
	echo wpautop( 'Posts not found' );
}


?>


</div>
	

	
<?php get_footer(); ?>
</body>