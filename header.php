<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>

	<!-- Latest compiled and minified CSS -->
	
	
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
	
	<link rel="shortcut icon" href="/favicon.png" type="image/x-icon">	
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
	<?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>

	<?php wp_nav_menu('menu=header&depth=1&menu_class=menu_foo&menu_id=menu_foo');?>
	<?php get_search_form(); ?>
	
	
	 <div class="header-cont">
	<div>
	<table id="header_t" class="header-table" cellpadding="0" cellspacing="0">
						<tbody><tr>
						<td class="header-logo">
							<a href="http://pikabu.ru" class="no_ch">
								<span class="b-logo"></span>
							</a>
						</td>
						<td class="header-nav">
							<table cellpadding="0" cellspacing="0">
								<colgroup>
									<col>
									<col style="width: 222px;">
								</colgroup>
								<tbody>
								<tr>
									<td colspan="2" class="header-nav-top">
									</td>
								</tr>
								<tr>
									<td class="header-nav-bottom">
										<ul class="menu">
			
					<li class="active menu-item-default"><a href="" class="no_ch">Горячее</a></li>
				
					<li class="noactive menu-item-default"><a href="" class="no_ch">Лучшее</a></li>
				
					<li class="noactive menu-item-default"><a href="" class="no_ch">Свежее</a></li>
				
					<li class="noactive menu-item-default large"><a href="" class="no_ch">Сообщества</a></li>
				
											</ul>
										</td>
										<td class="header-nav-right">
										</td>
									</tr>
									</tbody>
									</table>
								</td>
							</tr>
						</tbody></table>
		</div>	
		</div>
		
		
	