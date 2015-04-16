<?php

function experience_preprocess_html(&$vars) {
    $viewport = array(
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
        ),
    );
    drupal_add_html_head($viewport, 'viewport');
}

function experience_preprocess_page(&$vars) {

	$vars['primary_nav'] = theme('links__system_main_menu', array(
		'links' => $vars['main_menu'],
		'attributes' => array(
			'class' => array('navigation'),
		)
	));

}
