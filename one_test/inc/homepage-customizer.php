<?php 

function homepage_customize_register( $wp_customize ) {

$wp_customize->add_panel( 'homepage_custom_panel',
   array(
      'title' => __( 'Home Page Sections' ),
      'description' => esc_html__( 'Adjust Banner Section of homepage' ), 
      'priority' => 240, 
      'capability' => 'edit_theme_options', 
      'theme_supports' => '', // Rarely needed
      'active_callback' => '', // Rarely needed
   )
);
$wp_customize->add_section( 'homepage_controls_section',
   array(
      'title' => __( 'Banner Section' ),
      'description' => esc_html__( 'Edit Banner Section from here' ),
      'panel' => 'homepage_custom_panel', 
      'priority' => 160, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', 
       
   )
);
$wp_customize->add_setting( 'home_banner_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'home_banner_image',
   array(
      'label' => __( 'Add/Edit Banner Image' ),
      'description' => esc_html__( 'This is the description for the Media Control' ),
      'section' => 'homepage_controls_section',
      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );

$wp_customize->add_setting( 'title_default_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'title_default_text',
   array(
      'label' => __( 'Banner Section Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);
$wp_customize->add_setting( 'subtitle_default_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'subtitle_default_text',
   array(
      'label' => __( 'Banner Section Subtitle ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Sub Title...' ),
      ),
   )
);

$wp_customize->add_setting( 'button_default_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'button_default_text',
   array(
      'label' => __( 'Button Text ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Text...' ),
      ),
   )
);
$wp_customize->add_setting( 'button_default_url',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
   )
);
 
$wp_customize->add_control( 'button_default_url',
   array(
      'label' => __( 'Button URL ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'url', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Url...' ),
      ),
   )
);
$wp_customize->add_section( 'homepage_success_controls_section',
   array(
      'title' => __( 'Success Stories Section' ),
      'description' => esc_html__( 'Edit Success Stories Section' ),
      'panel' => 'homepage_custom_panel', 
      'priority' => 160, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', 
       
   )
);

$wp_customize->add_setting( 'success_default_color',
   array(
      'default' => '#fff',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
   )
);
 
$wp_customize->add_control( 'success_default_color',
   array(
      'label' => __( 'Success Stories Background Color' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'color',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
   )
);
$wp_customize->add_setting( 'success_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'success_title_text',
   array(
      'label' => __( 'Success Stories Section Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);
$wp_customize->add_setting( 'success_description_textarea',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'success_description_textarea',
   array(
      'label' => __( 'Success Stories Description' ),
      'description' => esc_html__( 'Enter description' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);
/*-------------block one start--------------------------*/
$wp_customize->add_setting( 'block_one_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'block_one_image',
   array(
      'label' => __( 'Add/Edit block one Image' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );
$wp_customize->add_setting( 'block_one_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'block_one_title_text',
   array(
      'label' => __( 'Block One Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);
$wp_customize->add_setting( 'block_one_description_textarea',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'block_one_description_textarea',
   array(
      'label' => __( 'Block One Description' ),
      'description' => esc_html__( 'Enter description' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);
$wp_customize->add_setting( 'block_onebutton_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'block_onebutton_text',
   array(
      'label' => __( 'Block One Button Text ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Text...' ),
      ),
   )
);
$wp_customize->add_setting( 'block_onebutton_url',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
   )
);
 
$wp_customize->add_control( 'block_onebutton_url',
   array(
      'label' => __( 'Block One Button URL ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'url', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Url...' ),
      ),
   )
);
/*-------------block one end--------------------------*/

/*-------------block two start--------------------------*/
$wp_customize->add_setting( 'block_two_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'block_two_image',
   array(
      'label' => __( 'Add/Edit block two Image' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );
$wp_customize->add_setting( 'block_two_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'block_two_title_text',
   array(
      'label' => __( 'Block Two Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);
$wp_customize->add_setting( 'block_two_description_textarea',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'block_two_description_textarea',
   array(
      'label' => __( 'Block Two Description' ),
      'description' => esc_html__( 'Enter description' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);
$wp_customize->add_setting( 'block_two_button_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'block_two_button_text',
   array(
      'label' => __( 'Block Two Button Text ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Text...' ),
      ),
   )
);
$wp_customize->add_setting( 'block_two_button_url',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
   )
);
 
$wp_customize->add_control( 'block_two_button_url',
   array(
      'label' => __( 'Block Two Button URL ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'url', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Url...' ),
      ),
   )
);
/*------------------block two end----------------------------------------------------*/
/*------------------block three start------------------------------------------------*/
$wp_customize->add_setting( 'block_three_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'block_three_image',
   array(
      'label' => __( 'Add/Edit block Three Image' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );
$wp_customize->add_setting( 'block_three_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'block_three_title_text',
   array(
      'label' => __( 'Block Three Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);
$wp_customize->add_setting( 'block_three_description_textarea',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'block_three_description_textarea',
   array(
      'label' => __( 'Block Three Description' ),
      'description' => esc_html__( 'Enter description' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);
$wp_customize->add_setting( 'block_three_button_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'block_three_button_text',
   array(
      'label' => __( 'Block Three Button Text ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Text...' ),
      ),
   )
);
$wp_customize->add_setting( 'block_three_button_url',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
   )
);
 
$wp_customize->add_control( 'block_three_button_url',
   array(
      'label' => __( 'Block Three Button URL ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_success_controls_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'url', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Url...' ),
      ),
   )
);
/*------------------block three end----------------------------------------------------*/

/*------------------Work Process Start----------------------------------------------------*/

$wp_customize->add_section( 'homepage_work_section',
   array(
      'title' => __( 'Work Process Section' ),
      'description' => esc_html__( '' ),
      'panel' => 'homepage_custom_panel', 
      'priority' => 160, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', 
       
   )
);
$wp_customize->add_setting( 'homepage_work_background_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'homepage_work_background_image',
   array(
      'label' => __( 'Add/Edit Background Image' ),
      'description' => esc_html__( 'Work Process Background Image' ),
      'section' => 'homepage_work_section',
      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );

$wp_customize->add_setting( 'homepage_work_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_work_title_text',
   array(
      'label' => __( 'Work Process Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);

$wp_customize->add_setting( 'homepage_work_description_textarea',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_work_description_textarea',
   array(
      'label' => __( 'Work Process Description' ),
      'description' => esc_html__( 'Enter description' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);
/*------------------Left Feature One Start----------------------------------------------*/
$wp_customize->add_setting( 'left_one_feature_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'left_one_feature_image',
   array(
      'label' => __( 'Add/Edit Left One Featured Image' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_work_section',
      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );

$wp_customize->add_setting( 'left_one_feature_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'left_one_feature_title_text',
   array(
      'label' => __( 'Left One Feature Box Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);

$wp_customize->add_setting( 'left_one_feature_description',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'left_one_feature_description',
   array(
      'label' => __( '' ),
      'description' => esc_html__( 'Left One Feature Box Description' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);
/*------------------Left One Feature End-----------------------------------------------------*/
/*------------------Left Two Feature Start--------------------------------------- -----------*/
$wp_customize->add_setting( 'left_two_feature_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'left_two_feature_image',
   array(
      'label' => __( 'Add/Edit Left Two Featured Image' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_work_section',
      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );

$wp_customize->add_setting( 'left_two_feature_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'left_two_feature_title_text',
   array(
      'label' => __( 'Left Two Feature Box Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);

$wp_customize->add_setting( 'left_two_feature_description',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'left_two_feature_description',
   array(
      'label' => __( '' ),
      'description' => esc_html__( 'Left Two Feature Box Description' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);




/*------------------Left Two Feature End-----------------------------------------------------*/
/*------------------Right one Feature Start--------------------------------------------------*/
$wp_customize->add_setting( 'right_one_feature_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'right_one_feature_image',
   array(
      'label' => __( 'Add/Edit Right One Featured Image' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_work_section',
      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );

$wp_customize->add_setting( 'right_one_feature_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'right_one_feature_title_text',
   array(
      'label' => __( 'Right One Feature Box Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);

$wp_customize->add_setting( 'right_one_feature_description',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'right_one_feature_description',
   array(
      'label' => __( '' ),
      'description' => esc_html__( 'Right One Feature Box Description' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);


/*------------------Right one Feature End-----------------------------------------------------*/
/*------------------Right two Feature Start---------------------------------------------------*/

$wp_customize->add_setting( 'right_two_feature_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'right_two_feature_image',
   array(
      'label' => __( 'Add/Edit Right Two Featured Image' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_work_section',
      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );

$wp_customize->add_setting( 'right_two_feature_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'right_two_feature_title_text',
   array(
      'label' => __( 'Right Two Feature Box Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);

$wp_customize->add_setting( 'right_two_feature_description',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'right_two_feature_description',
   array(
      'label' => __( '' ),
      'description' => esc_html__( 'Right Two Feature Box Description' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);

/*------------------Right two Feature End-------------------------------------------------*/

$wp_customize->add_setting( 'homepage_work_button_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_work_button_text',
   array(
      'label' => __( 'Work Process Button Text ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Text...' ),
      ),
   )
);

$wp_customize->add_setting( 'homepage_work_button_url',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
   )
);
 
$wp_customize->add_control( 'homepage_work_button_url',
   array(
      'label' => __( 'Work Process Button URL ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_work_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'url', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Url...' ),
      ),
   )
);


/*------------------Work Process End----------------------------------------------------*/
/*------------------Help Section Start----------------------------------------------------*/

$wp_customize->add_section( 'homepage_help_section',
   array(
      'title' => __( 'Help Section' ),
      'description' => esc_html__( '' ),
      'panel' => 'homepage_custom_panel', 
      'priority' => 160, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', 
       
   )
);
$wp_customize->add_setting( 'homepage_help_background_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'homepage_help_background_image',
   array(
      'label' => __( 'Add/Edit Background Image' ),
      'description' => esc_html__( 'Help Section Background Image' ),
      'section' => 'homepage_help_section',
      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );

$wp_customize->add_setting( 'homepage_help_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_help_title_text',
   array(
      'label' => __( 'Help Section Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_help_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);

$wp_customize->add_setting( 'homepage_help_description_textarea',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_help_description_textarea',
   array(
      'label' => __( 'Help Section Description' ),
      'description' => esc_html__( 'Enter description' ),
      'section' => 'homepage_help_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);
$wp_customize->add_setting( 'homepage_help_button_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_help_button_text',
   array(
      'label' => __( 'Work Process Button Text ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_help_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Text...' ),
      ),
   )
);

$wp_customize->add_setting( 'homepage_help_button_url',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
   )
);
 
$wp_customize->add_control( 'homepage_help_button_url',
   array(
      'label' => __( 'Help Section Button URL ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_help_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'url', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Url...' ),
      ),
   )
);
/*------------------Help Section End----------------------------------------------------*/
/*------------------Testimonial Section Start-------------------------------------------*/
$wp_customize->add_section( 'homepage_client_section',
   array(
      'title' => __( 'Testimonial Section' ),
      'description' => esc_html__( '' ),
      'panel' => 'homepage_custom_panel', 
      'priority' => 160, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', 
       
   )
);
$wp_customize->add_setting( 'homepage_client_background_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
);
 
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'homepage_client_background_image',
   array(
      'label' => __( 'Add/Edit Background Image' ),
      'description' => esc_html__( 'Testimonial Background Image' ),
      'section' => 'homepage_client_section',
      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __( 'Select File' ),
         'change' => __( 'Change File' ),
         'default' => __( 'Default' ),
         'remove' => __( 'Remove' ),
         'placeholder' => __( 'No file selected' ),
         'frame_title' => __( 'Select File' ),
         'frame_button' => __( 'Choose File' ),
      )
   )
) );

$wp_customize->add_setting( 'homepage_client_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_client_title_text',
   array(
      'label' => __( 'Testimonial Section Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_client_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);

$wp_customize->add_setting( 'homepage_client_description',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_client_description',
   array(
      'label' => __( 'Testimonial Section Description' ),
      'description' => esc_html__( 'Enter description' ),
      'section' => 'homepage_client_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);

$wp_customize->add_setting( 'homepage_client_name',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_client_name',
   array(
      'label' => __( 'Client Name' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_client_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Name...' ),
      ),
   )
);

/*------------------Testimonial Section End-------------------------------------------*/
/*------------------Newsletter Section Start-------------------------------------------*/

$wp_customize->add_section( 'homepage_newsletter_section',
   array(
      'title' => __( 'Newsletter Section' ),
      'description' => esc_html__( '' ),
      'panel' => 'homepage_custom_panel', 
      'priority' => 160, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', 
       
   )
);
$wp_customize->add_setting( 'homepage_newsletter_title_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_newsletter_title_text',
   array(
      'label' => __( 'Newsletter Section Title' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_newsletter_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Title...' ),
      ),
   )
);

$wp_customize->add_setting( 'homepage_newsletter_description',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_newsletter_description',
   array(
      'label' => __( 'Newsletter Section Description' ),
      'description' => esc_html__( 'Enter description' ),
      'section' => 'homepage_newsletter_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter description...' ),
      ),
   )
);
$wp_customize->add_setting( 'homepage_newsletter_button_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => ''
   )
);
 
$wp_customize->add_control( 'homepage_newsletter_button_text',
   array(
      'label' => __( 'Newsletter Button Text ' ),
      'description' => esc_html__( '' ),
      'section' => 'homepage_newsletter_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => '',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter Button Text...' ),
      ),
   )
);


/*------------------Newsletter Section End-------------------------------------------*/

};
add_action( 'customize_register', 'homepage_customize_register' );



?>