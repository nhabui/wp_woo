<footer>
    <!-- footer main start -->
    <div class="footer-widget-area pt-40 pb-38 pb-sm-10">
        <div class="container">
            <div class="row">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer_widget_area_' . $i); ?>
                    <?php echo get_theme_mod('footer_widget_area_' . $i . '_content', ''); ?>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <!-- footer main end -->
    <!-- footer bootom start -->
    <div class="footer-bottom-area bg-gray pt-20 pb-20">
        <div class="container">
            <div class="footer-bottom-wrap">
                <div class="copyright-text">
                    <p><a target="_blank">Templates Hub</a></p>
                </div>
                <div class="payment-method-img">
                    <img src="assets/img/payment.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- footer bootom end -->

</footer>
<!-- footer area end -->