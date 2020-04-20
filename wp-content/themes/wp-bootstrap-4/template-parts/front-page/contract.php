<div class="wp-bp-contract-content container">

    <div class="row">
        <div class="col-sm-6">
            <img src="/wp-content/themes/wp-bootstrap-4/assets/images/beauty_boutique_by_elyse_logo.jpg" class="float-right"/>
        </div>
        <div class="col-sm-6">
            <div class="social-links">
                <ul>
                    <?php $my_phone =  get_option( 'my_phone_field', '' ); ?>
                    <?php if(isset($my_phone)): ?>
                        <li><a href="tel:+64<?php echo  str_replace(' ', '',substr($my_phone,1)); ?>"><span><i class="fa fa-phone" style="margin-left: 2px"></i> <?php echo $my_phone; ?></span></a></li>
                    <?php endif; ?>

                    <?php $my_address =  get_option( 'my_address_field', '' ); ?>
                    <?php if(isset($my_address)): ?>
                        <li><a href="#"><span><i class="fa fa-map-marker" style="margin-left: 5px;"></i>  <?php echo $my_address; ?></span></a></li>
                    <?php endif; ?>

                    <?php $my_email =  get_option( 'my_email_field', '' ); ?>
                    <?php if(isset($my_email)): ?>
                        <li><a href="mailto:<?php echo $my_email; ?>"><span><i class="fa fa-envelope"></i><?php echo $my_email; ?></span></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

</div>