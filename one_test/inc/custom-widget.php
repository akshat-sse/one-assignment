<?php
function one_custom_widget() { 
  register_widget( 'one_custom_widget' );
}
add_action( 'widgets_init', 'one_custom_widget' );
class one_custom_Widget extends WP_Widget {
 public function __construct() {
    $widget_options = array( 
      'classname' => 'custom_widget',
      'description' => 'Custom Footer Widget',
    );
    parent::__construct( 'custom_widget', 'Custom Footer Widget', $widget_options );
  }
public function widget( $args, $instance ) {
  $title = apply_filters( 'widget_title', $instance[ 'title' ] );
  $blog_title = get_bloginfo( 'name' );
  $desc = apply_filters( 'widget_title', $instance[ 'desc' ] );
  echo $args['before_widget'] . $args['before_title'] ."<div class='site-logo footer-logo'><h2 class='site-title'>" .$blog_title. "</h2></div>". $args['after_title']; ?>

  <div class="widget-title"><h4><?php echo $title ?></h4></div>
  <p><?php echo $desc ?></p>

  <?php echo $args['after_widget'];
}
public function form( $instance ) {
  $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
  <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
    <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
  </p><?php 
$desc=! empty( $instance['desc'] ) ? $instance['desc'] : '';?>
 <label for="<?php echo $this->get_field_id( 'desc' ); ?>">Description:</label>
    <textarea id="<?php echo $this->get_field_id( 'desc' ); ?>" name="<?php echo $this->get_field_name( 'desc' )?>" class="widefat text wp-editor-area"><?php echo esc_attr( $desc ); ?></textarea>
  </p>

<?php }
public function update( $new_instance, $old_instance ) {
  $instance = $old_instance;
  $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
  $instance[ 'desc' ] = strip_tags( $new_instance[ 'desc' ] );
  return $instance;
}

}



 ?>