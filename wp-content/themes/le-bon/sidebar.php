<aside>

    <nav class='nav nav-bar'>
                    <!--<ul>
                        <li><a href='#'>Magazine</a></li>
                        <li><a href='#'>Suppl&eacute;ment</a></li>
                        <li><a href='#'>Boutique</a></li>
                        <li><a href='#'>&Eacute;v&eacute;nement</a></li>
                        <li><a href='#'>Document</a></li>
                    </ul>
                    
                    -->
                    
                    <?php wp_nav_menu(array ('menu' => 'Main Nav Menu')); ?>
                    <!--<?php wp_nav_menu(array('menu' => 'Main Nav Menu', 'menu_class'=> 'nav nav-pills')); ?> -->
    </nav>
    
     <!--
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

       
        
    	
    
    	<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
    
    	<h2>Archives penis</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?> 
    	</ul>
        
        <h2>Categories</h2>
        <ul>
    	   <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
        
    	<?php wp_list_bookmarks(); ?>
    
        <h1> tabarnak </h1>
    	<h2>Meta</h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<!--<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>-->
    		<?php wp_meta(); ?>
    	</ul>
    	
    	<h2>Subscribe</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries penis (RSS)</a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    	</ul>
	
        
     
        
	<?php endif; ?>
           -->
        

</aside>

</div> <!-- fin du main header -->