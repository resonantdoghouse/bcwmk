<div class="block block-inverse app-footer">
    <div class="container">

        <div class="row">

            <div class="col-md-5 mb-5">
                <ul class="list-unstyled list-spaced">
                    <li class="mb-2"><h6 class="text-uppercase">About</h6></li>
                    <li class="text-muted">
                        <p>Science cuts two ways, of course; its products can be used for both good and evil. But
                            there's no turning back from science. </p>
                        <p><a href="https://buildcreativewebsites.com">Build Creative Websites</a></p>
                    </li>
                </ul>
            </div>

            <div class="col-md-2 offset-md-1 mb-5">
                <ul class="list-unstyled list-spaced">
                    <li class="mb-2"><h6 class="text-uppercase">Product</h6></li>
                    <li class="text-muted">Features</li>
                    <li class="text-muted">Examples</li>
                    <li class="text-muted">Tour</li>
                    <li class="text-muted">Gallery</li>
                </ul>
            </div>

            <div class="col-md-2 mb-5">
                <ul class="list-unstyled list-spaced">
                    <li class="mb-2"><h6 class="text-uppercase">Apis</h6></li>
                    <li class="text-muted">Rich data</li>
                    <li class="text-muted">Simple data</li>
                    <li class="text-muted">Real time</li>
                    <li class="text-muted">Social</li>
                </ul>
            </div>

            <div class="col-md-2 mb-5">
                <ul class="list-unstyled list-spaced">
                    <li class="mb-2"><h6 class="text-uppercase">Legal</h6></li>
                    <li class="text-muted">Terms</li>
                    <li class="text-muted">Legal</li>
                    <li class="text-muted">Privacy</li>
                    <li class="text-muted">License</li>
                </ul>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 mb-12">

                <?php

                if ( get_theme_mod( 'bcwmk_facebook_handle' ) ){
                    echo get_theme_mod('bcwmk_facebook_handle' );
                }

                ?>

            </div>
        </div>

    </div>
</div>


<?php
wp_footer();
?>


</body>
</html>
