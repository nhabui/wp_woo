<?php if ( is_active_sidebar( 'sidebar-shop' ) ) : ?>
    <div class="shop-sidebar-wrap mt-md-28 mt-sm-28">
        <div class="sidebar-widget mb-30">
            <div class="sidebar-category">
                <ul>
                    <li class="title"><i class="fa fa-bars"></i>Danh mục</li>
                    <?php dynamic_sidebar( 'sidebar-shop' ); ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>
