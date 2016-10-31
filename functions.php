<?php

/**
 * Добавляет страницу настройки темы в админку Вордпресса
 */
add_action('admin_menu', function(){
    add_theme_page(_e('Customize'), _e('Customize'), 'edit_theme_options', 'customize.php');
});

/**
 * Добавляет секции, параметры и элементы управления (контролы) на страницу настройки темы
 */
add_action('customize_register', function($customizer){
    $customizer->add_section(
        'example_section_one',
        array(
            'title' => 'Мои настройки',
            'description' => '',
            'priority' => 35,
        )
    );


	$customizer->add_setting(
	    'copyright_textbox',
	    array('default' => 'Моя компания')
	);
	$customizer->add_control(
	    'copyright_textbox',
	    array(
	        'label' => 'Текст копирайта',
	        'section' => 'example_section_one',
	        'type' => 'text',
	    )
	);
	$customizer->add_control(
	    'hide_copyright',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Скрыть текст копирайта',
	        'section' => 'example_section_one',
	    )
	);


	$customizer->add_setting(
	    'logo_placement',
	    array('default' => 'left')
	);
	  
	$customizer->add_control(
	    'logo_placement',
	    array(
	        'type' => 'radio',
	        'label' => 'Положение логотипа',
	        'section' => 'example_section_one',
	        'choices' => array(
	            'left' => 'Слева',
	            'right' => 'Справа',
	            'center' => 'По центру',
	        ),
	    )
	);


	add_action('wp_head', function(){
    $placement = get_theme_mod('logo_placement');
    if (!empty($placement)): ?>
		<style>
		    <?php
		        switch($placement){
		            case 'right':
		                $styles = '#header #logo{ order: 1; flex: 0; }
		                		   #header #searchform{ display: inherit; justify-content:inherit; flex: 1; }';
		            break;
		 
		            case 'center':
		                $styles = '#header{ text-align:center; }
		                           #header #logo{ float:none; margin-left:auto; margin-right:auto; }
		                		   #header #searchform{ display: none; }';
		                break;
		        }
		        echo $styles; ?>
		</style>
	<?php endif;
	});
});



add_filter( 'document_title_separator', function(){ return ' | '; } );
remove_filter('the_content', 'wpautop');

function my_search_form( $form ) {

	$form = '
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
		<label class="screen-reader-text" for="s"></label>
		<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search" class="input"/>
		<input type="submit" id="searchsubmit" value="GO" />
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'my_search_form' );

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

function enqueue_styles() {
	wp_enqueue_style( 'clarity-style', get_stylesheet_uri());
	wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
	wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

?>