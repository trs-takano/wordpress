<?php

function bldr_admin_page_styles() {
    wp_enqueue_style( 'bldr-font-awesome-admin', get_template_directory_uri() . '/fonts/font-awesome.css' ); 
	wp_enqueue_style( 'bldr-style-admin', get_template_directory_uri() . '/panel/css/theme-admin-style.css' ); 
}
add_action( 'admin_enqueue_scripts', 'bldr_admin_page_styles' ); 

     
    add_action('admin_menu', 'bldr_setup_menu');
     
    function bldr_setup_menu(){
    	add_theme_page( __('BLDR Theme Details', 'bldr' ), __('BLDR Theme Details', 'bldr' ), 'edit_theme_options', 'bldr-setup', 'bldr_init' ); 
    }  
     
 	function bldr_init(){ 
	 	echo '<div class="grid grid-pad"><div class="col-1-1"><h1 style="text-align: center;">';
		printf( __('Thank you for using BLDR!', 'bldr' ));  
        echo "</h1></div></div>";
			
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;" ><div class="col-1-3"><h2>'; 
		printf( __('BLDR Theme Setup', 'bldr' ));
        echo '</h2>';
		
		echo '<p>';
		printf( __('We created a quick theme setup video to help you get started with BLDR. Watch the video by clicking the link below.', 'bldr' )); 
		echo '</p>'; 
		
		echo '<a href="http://modernthemes.net/documentation/bldr-documentation/bldr-quick-setup-tutorial/" target="_blank"><button>';  
		printf( __('View Video', 'bldr' )); 
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf( __('Documentation', 'bldr' ));
        echo '</h2>';  
		
		echo '<p>';
		printf( __('Check out our BLDR Documentation to learn how to use BLDR and for tutorials on theme functions. Click the link below.', 'bldr' )); 
		echo '</p>'; 
		
		echo '<a href="http://modernthemes.net/documentation/bldr-documentation/" target="_blank"><button>'; 
		printf( __('Read Docs', 'bldr' ));
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf( __('About ModernThemes', 'bldr' )); 
        echo '</h2>';  
		
		echo '<p>';
		printf( __('Want more to learn more about ModernThemes? Let us help you at modernthemes.net.', 'bldr' ));
		echo '</p>';
		
		echo '<a href="http://modernthemes.net/" target="_blank"><button>';
		printf( __('About Us', 'bldr' ));
		echo '</button></a></div></div>';
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( __('Want more features? Go Pro.', 'bldr' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>';
		printf( __('Home Page Layouts', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( __('BLDR Pro comes with more packaged home template files including pre-made layouts ideal for businesses and creatives.', 'bldr' ));
		echo '</p></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-image"></i><h4>';
        printf( __('Sliders & Video', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( __('Add a slider or video to your homepage and choose between a regular slider, fullscreen slider or video template.', 'bldr' ));
		echo '</p></div>'; 
		
        echo '<div class="col-1-4"><i class="fa fa-th"></i><h4>';
		printf( __('More Theme Options', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( __( 'Add information with home widget sections for a contact form, skill bars, details spinner, and more optional animations effects.', 'bldr' )); 
		echo '</p></div> '; 
            
        echo '<div class="col-1-4"><i class="fa fa-shopping-cart"></i><h4>';
		printf( __( 'WooCommerce', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( __( 'Turn your website into a powerful eCommerce machine. BLDR Pro is fully compatible with WooCommerce.', 'bldr' ));
		echo '</p></div></div>';
            
        echo '<div class="grid grid-pad senswp"><div class="col-1-4"><i class="fa fa-th-list"></i><h4>';
		printf( __( 'More Sidebars', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( __( 'Sometimes you need different sidebars for different pages. We got you covered, offering up to 5 different sidebars.', 'bldr' ));
		echo '</p></div>';
		
       	echo '<div class="col-1-4"><i class="fa fa-font"></i><h4>More Google Fonts</h4><p>';
		printf( __( 'Access an additional 65 Google fonts with BLDR Pro right in the WordPress customizer.', 'bldr' ));
		echo '</p></div>'; 
		
       	echo '<div class="col-1-4"><i class="fa fa-file-image-o"></i><h4>';
		printf( __( 'PSD Files', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( __( 'Premium versions include PSD files. Preview your own content or showcase a customized version for your clients.', 'bldr' ));
		echo '</p></div>';
            
        echo '<div class="col-1-4"><i class="fa fa-support"></i><h4>';
		printf( __( 'Free Support', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( __( 'Call on us to help you out. Premium themes come with free support that goes directly to our support staff.', 'bldr' ));
		echo '</p></div></div>';
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="http://modernthemes.net/wordpress-themes/bldr-pro/" target="_blank"><button class="pro">'; 
		printf( __( 'View Pro Version', 'bldr' ));
		echo '</button></a></div></div>';
		
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( __('Premium Membership. Premium Experience.', 'bldr' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>'; 
		printf( __('Plugin Compatibility', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( __('Use our new free plugins with this theme to add functionality for things like projects, clients, team members and more. Compatible with all premium themes!', 'bldr' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-desktop"></i><h4>'; 
        printf( __('Agency Designed Themes', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( __('Look as good as can be with our new premium themes. Each one is agency designed with modern styles and professional layouts.', 'bldr' ));
		echo '</p></div>'; 
		
        echo '<div class="col-1-4"><i class="fa fa-users"></i><h4>';
        printf( __('Membership Options', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( __('We have options to fit every budget. Choose between a single theme, or access to all current and future themes for a year, or forever!', 'bldr' ));
		echo '</p></div>'; 
		
		echo '<div class="col-1-4"><i class="fa fa-calendar"></i><h4>'; 
		printf( __( 'Access to New Themes', 'bldr' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( __( 'New themes added monthly! When you purchase a premium membership you get access to all premium themes, with new themes added monthly.', 'bldr' ));   
		echo '</p></div>';
		
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="https://modernthemes.net/premium-wordpress-themes/" target="_blank"><button class="pro">';
		printf( __( 'Get Premium Membership', 'bldr' )); 
		echo '</button></a></div></div>';
		
		
		echo '<div class="grid grid-pad"><div class="col-1-1"><h2 style="text-align: center;">'; 
		printf( __( 'Changelog' , 'bldr' ) );
        echo "</h2>";
		
		echo '<p style="text-align: center;">';  
		printf(__('1.1.2 - added option to open social icon links in new window.', 'bldr' ));
		echo '</p>'; 
		
		
		echo '<p style="text-align: center;">';  
		printf(__('1.1.1 - added Navigation section that was deleted when WordPress switched to 4.3. Removed color options from Menu Locations.', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf(__('1.1.0 - bug fixes.', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf(__('1.0.21 - updated Font Awesome icons.', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf(__('1.0.20 - minor improvements, added pt_BR and ru_RU language translation.', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( __('1.0.17 - added Mobile Menu color options. Go to Apperance -> Customize and click under Navigation to edit colors.', 'bldr' ));
		echo '</p></div></div>';  
		
    }
?>