<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="py-3 border-bottom">
        <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
            <div class="dropdown">
                
            </div>

            <div class="d-flex align-items-center">
                <form class="w-100 me-3" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="s" value="<?php echo get_search_query(); ?>">
                </form>

                <div class="flex-shrink-0 dropdown">
                    <?php
                    if (is_user_logged_in()) {
                        $current_user = wp_get_current_user();
                        ?>
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo esc_url(get_avatar_url($current_user->ID)); ?>" alt="<?php echo esc_attr($current_user->display_name); ?>" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item" href="<?php echo esc_url(admin_url('post-new.php')); ?>">New project...</a></li>
                            <li><a class="dropdown-item" href="<?php echo esc_url(admin_url('profile.php')); ?>">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo esc_url(wp_logout_url()); ?>">Sign out</a></li>
                        </ul>
                    <?php } else { ?>
                        <a href="<?php echo esc_url(wp_login_url()); ?>" class="d-block link-body-emphasis text-decoration-none">Login</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar mb-3 navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">THANH TOÁN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">TRẢ GÓP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LIÊN HỆ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
    <div class="container pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
      <div class="bg-body-tertiary border rounded-3">
        <br>MEGA MENU<br>
      </div>
      <div class="bg-body-tertiary border rounded-3"> S
        <br>SLIDE<br>
      </div>
    </div>
  </div>

    <?php wp_footer(); ?>
</body>
</html>
