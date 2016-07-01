  <form role="search" method="POST" class="search" onsubmit="" action="<?php echo home_url( '/' ); ?>">
    <div class="content clearfix">
      <input class="searchfield" maxlength="40" type="search" placeholder="Suche" value="<?php echo get_search_query() ?>" name="s">
      <button type="submit" value="search"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
  </form>