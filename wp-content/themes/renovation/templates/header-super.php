<header class="header--super">
	<div class="wrap container lang">
		<div class="content">
				<div class="header__lang">
					<?php
				      
				        wp_nav_menu( array('menu' => 'Language Navigation' ));
				      
				     ?>
				</div>
				<div class="navbar-form navbar-search navbar-right">
            		<?php $echo = true; get_search_form( $echo ); ?>
      			</div>
		</div>
	</div>
	<div class="wrap container branding">
		<div class="content">
			<div class="container">
				<div class="header__branding">
					<h1 class="logo">
						<a href="<?= esc_url(home_url('/')); ?>">
								<span>R&V Renovation</span>
						</a>
					</h1>
				</div>
				<div class="header__info">
					<ul class="list-inline social__menu">
						<li><a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
					</ul>
					<hr />
					<?php dynamic_sidebar( 'sidebar-header' ); ?>
				</div>
			</div>
		</div>
	</div>
</header>