<?php /*  
Template Name: homepage
 */
get_header();


?>

<!-- START banner container -->
<section class="banner home-banner custom_height " role="banner" style="background-image:url(<?php echo wp_get_attachment_url( get_theme_mod('home_banner_image')) ?>);">
        <div class="container banner-content  align-center">
		<div class="banner-caption text-center">
		<h2><b><?php echo get_theme_mod('title_default_text'); ?></b></h2>
        <div class="sub-title cursive-font"><p><?php echo get_theme_mod('subtitle_default_text'); ?></p></div>
            <div class="banner-button">
                <a href="<?php echo get_theme_mod('button_default_url'); ?>" class="button"><?php echo get_theme_mod('button_default_text'); ?></a>
			</div>
        </div>
		</div>
		</section>

            <!-- END banner container -->

<section class="section solid white-bg text-center" style="background-color: <?php echo get_theme_mod('success_default_color'); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>
                                <?php echo get_theme_mod('success_title_text'); ?>                                
                            </h2>
                        </div>
                        <div class="section-content">
                            <p><?php echo get_theme_mod('success_description_textarea'); ?></p>            
                        </div>
					</div>
				</div>
			
  
<div class="section-columns">
    <div class="row">
        
    <div class="col-md-4 cpt-col">
    <div class="cta-block">
    <div class="cta-banner">
	<img width="370" height="250" src="<?php echo wp_get_attachment_url(get_theme_mod('block_one_image'));?>" class="attachment-lesson_thumb size-lesson_thumb wp-post-image" alt=""></div>
	<div class="cta-content">
    <h3 class="cursive-font"><?php echo get_theme_mod('block_one_title_text');?></h3>
    <p><?php echo get_theme_mod('block_one_description_textarea');?></p>
    <a href="<?php echo get_theme_mod('block_onebutton_url');?>" class="button inline border"><?php echo get_theme_mod('block_onebutton_text');?></a>
    </div>
    </div>
</div>
    <div class="col-md-4 cpt-col">
    	<div class="cta-block">
    		<img width="370" height="250" src="<?php echo wp_get_attachment_url(get_theme_mod('block_two_image'));?>" class="attachment-lesson_thumb size-lesson_thumb wp-post-image" alt="" >
    	<div class="cta-content">
    		<h3 class="cursive-font"><?php echo get_theme_mod('block_two_title_text');?></h3>
            <p><?php echo get_theme_mod('block_two_description_textarea');?></p>
            <a href="<?php echo get_theme_mod('block_two_button_url');?>" class="button inline border"><?php echo get_theme_mod('block_two_button_text');?></a>
        </div>
        </div>
    </div>
    <div class="col-md-4 cpt-col">
    	<div class="cta-block">
    	<div class="cta-banner">
    		<img width="370" height="250" src="<?php echo wp_get_attachment_url(get_theme_mod('block_three_image'));?>" class="attachment-lesson_thumb size-lesson_thumb wp-post-image" alt="">
    	</div>
    	<div class="cta-content">
    		<h3 class="cursive-font"><?php echo get_theme_mod('block_three_title_text');?></h3>
    		<p><?php echo get_theme_mod('block_three_description_textarea');?></p>
            <a href="<?php echo get_theme_mod('block_three_button_url');?>" class="button inline border"><?php echo get_theme_mod('block_three_button_text');?></a>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </section>
<!--- START Features Section --->
<section class="section background text-white text-center" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('homepage_work_background_image')) ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2> <?php echo get_theme_mod('homepage_work_title_text');?></h2>
                </div>
                <div class="section-content">
                    <?php echo get_theme_mod('homepage_work_description_textarea');?>
                </div>
                <div class="section-features">
                    <div class="row">
                        <!-- Feature Box -->
                        <div class="col-md-6 feature-box text-right">

                            <div class="feature-image">
                                <img src="<?php echo wp_get_attachment_url(get_theme_mod('left_one_feature_image'));?>">
                            </div>

                            <div class="feature-text">
                                <h4 class="cursive-font feature-heading"><?php echo get_theme_mod('left_one_feature_title_text');?></h4>
                                <?php echo get_theme_mod('left_one_feature_description');?>
                            </div>

                        </div>
                        <!-- Feature Box -->
                        <div class="col-md-6 feature-box text-left">

                            <div class="feature-image">
                                <img src="<?php echo wp_get_attachment_url(get_theme_mod('right_one_feature_image'));?>">
                            </div>

                            <div class="feature-text">
                                <h4 class="cursive-font feature-heading"><?php echo get_theme_mod('right_one_feature_title_text');?></h4>
                                <?php echo get_theme_mod('right_one_feature_description');?>
                            </div>

                        </div>
                        <!-- Feature Box -->
                        <div class="col-md-6 feature-box text-right">

                            <div class="feature-image">
                                <img src="<?php echo wp_get_attachment_url(get_theme_mod('left_two_feature_image'));?>">
                            </div>

                            <div class="feature-text">
                                <h4 class="cursive-font feature-heading"><?php echo get_theme_mod('left_two_feature_title_text');?></h4>
                                <?php echo get_theme_mod('left_two_feature_description');?>
                            </div>

                        </div>
                        <!-- Feature Box -->
                        <div class="col-md-6 feature-box text-left">

                            <div class="feature-image">
                                <img src="<?php echo wp_get_attachment_url(get_theme_mod('right_two_feature_image'));?>">
                            </div>

                            <div class="feature-text">
                                <h4 class="cursive-font feature-heading"><?php echo get_theme_mod('right_two_feature_title_text');?></h4>
                                <?php echo get_theme_mod('right_two_feature_description');?>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="section-button">
                    <a href="<?php echo get_theme_mod('homepage_work_button_url');?>" class="button"><?php echo get_theme_mod('homepage_work_button_text');?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--- END Features Section --->
<!--- START BG Section --->

<section class="section background text-center text-dark" style="background-image:url(<?php echo wp_get_attachment_url(get_theme_mod('homepage_help_background_image')) ?>);" id="app_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2><?php echo  get_theme_mod('homepage_help_title_text') ?></h2>
                </div>
                <div class="section-content">
                    <?php echo get_theme_mod('homepage_help_description_textarea') ?>
                </div>

                <div class="section-button">
                    <a href="<?php echo get_theme_mod('homepage_help_button_url') ?>" class="button transparent border"><?php echo get_theme_mod('homepage_help_button_text') ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section background text-white text-center" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('homepage_client_background_image')) ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonials">
                    <span class="icon"></span>
                    <div class="section-title">
                        <h2><?php echo get_theme_mod('homepage_client_title_text'); ?></h2>
                    </div>

                    <div class="testimonials-row">
                        <div class="testimonial">
                            <blockquote><?php echo get_theme_mod('homepage_client_description'); ?></blockquote>
                            <cite class="cursive-font"><?php echo get_theme_mod('homepage_client_name'); ?></cite>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--- START Newsletter Section --->
<section class="section solid white text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2><?php echo get_theme_mod('homepage_newsletter_title_text'); ?></h2>
                </div>
                <div class="section-content">
                   <?php echo get_theme_mod('homepage_newsletter_description'); ?>
                </div>

                <div class="form-container newsletter-form">
                    <form id="subscribe_form" class="form text-center">
                        <fieldset>
                            <input type="email" name="email" class="input sub_email" placeholder="Please enter your email." required="">
                        </fieldset>
                        <fieldset>
                            <input type="hidden" id="validate_nonce" name="validate_nonce" value="51d24822fc">
                            <input type="hidden" name="_wp_http_referer" value="/themes/coach/">
                            <input type="submit" class="submit button small dark pull-right" value="<?php echo get_theme_mod('homepage_newsletter_button_text') ?>" name="newsletter-submit">
                        </fieldset>
                        <div class="form_message"></div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!--- END Newsletter Section --->
<?php get_footer();