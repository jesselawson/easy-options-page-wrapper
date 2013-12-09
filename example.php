<?php

// This is an example usage of the Easy Options Page Wrapper. 

require_once dirname( __FILE__ ) . '/class.eop.php';


// Each options page is a separate EasyOptionsPage object, and each one 
// gets one link in the Settings tab. 
$settings = new EasyOptionsPage(
"Link in the settings tab", "Title of the options page");

// Each set of options are organized by "section." Each section is made available
// through a tab at the top of the screen. 
// Declare all of the sections you want to use up front.
$settings->AddSection("First Tab");
$settings->AddSection("Another Tab");

// When you're ready to start editing a section, you "open it" by calling
// the EditSection member function of the EasyOptionsPage class.
$settings->EditSection("First Tab");

// Now that our section is "open" for editing, we'll add options. A complete
// list of options is available at http://lawsonry.staging.wpengine.com/simple-plugin-template

// Here's an example textarea. 
$settings->AddOption( 
	array(
       'name' => 'user_bio',
       'label' => __( 'Your biography', 'basic' ),
       'desc' => __( 'Description', 'basic' ),
       'type' => 'textarea'
   ));

// Here's an example multicheck
$settings->AddOption(
	array(
	    'name' => 'favorite_things',
	    'label' => __( 'What do you like *most* about Jesse?', 'basic' ),
	    'desc' => __( 'Here is where we learn a little too much about you.', 'basic' ),
	    'type' => 'multicheck',
	    'options' => array(
	        'one' => 'His sense of humor',
	        'two' => 'His uncanny ability to distract himself',
	        'three' => 'His unrivaled coffee consumption habits',
	        'four' => 'His penchant for pendants'
	    )
	    ));

// When we're ready to edit another section, simply call the member function
$settings->EditSection("Another Tab"); 

$settings->Register();

?>