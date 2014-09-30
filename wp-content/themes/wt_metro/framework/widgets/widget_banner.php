<?php
class Home_Rollover_Widget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'home-rollover-widget',
      'Home Rollover Widget',
      array(
        'description' => 'Home rollover widget'
      )
    );
  }

  public function widget( $args, $instance )
  {
    // basic output just for this example
    echo '<a href="#">
      <img src="'.esc_url($instance['image_uri']).'" />
      <h4>'.esc_html($instance['image_uri']).'</h4>
    </a>';
  }

  public function form( $instance )
  {
    // removed the for loop, you can create new instances of the widget instead
    ?>
    <p>
      <label for="<?php echo $this->get_field_id('text'); ?>">Text</label><br />
      <input type="text" name="<?php echo $this->get_field_name('text'); ?>" id="<?php echo $this->get_field_id('text'); ?>" value="<?php echo $instance['text']; ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('image_uri'); ?>">Image</label><br />
      <input type="text" class="img" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $instance['image_uri']; ?>" />
      <input type="button" class="select-img" value="Select Image" />
    </p>
    <?php
  }


} 
// end class

// init the widget
add_action( 'widgets_init', create_function('', 'return register_widget("Home_Rollover_Widget");') );

// queue up the necessary js
function hrw_enqueue()
{
  wp_enqueue_style('thickbox');
  wp_enqueue_script('media-upload');
  wp_enqueue_script('thickbox');
  // moved the js to an external file, you may want to change the path
  wp_enqueue_script('hrw', '/wp-content/plugins/home-rollover-widget/script.js', null, null, true);
}
add_action('admin_enqueue_scripts', 'hrw_enqueue');
?>