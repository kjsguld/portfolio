<form role="search" method="get" class="search-form inline-form" action="<?php echo home_url( '/' ); ?>">
  <div class="input-group">
    <span class="screen-reader-text input-group-addon"><?php echo _x( 'Search for:', 'label' ) ?></span>
    <input type="search" class="search-field form-control"
      placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
      value="<?php echo get_search_query() ?>" name="s"
      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </div>
  <input type="submit" type="button" class="btn btn-default search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
