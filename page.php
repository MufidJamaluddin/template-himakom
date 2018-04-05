<section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="blog"><?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-color:#009C3F">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php the_content();?>
            </div>
			<div class="center-block">
			<h2>Bagikan</h2>
			<ul class="list-inline text-center">
                        <li>
                            <a href="https://twitter.com/home?status=<?php echo get_permalink( $post->ID ); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( $post->ID ); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink( $post->ID ); ?>&title=&summary=&source=">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
			<li>
                            <a href="https://plus.google.com/share?url=<?php echo get_permalink( $post->ID ); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
			<li class="hidden-lg">
                            <a href="whatsapp://send?text=<?php echo get_permalink( $post->ID ); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>

                    </ul>
		    </div>
		    <div class="center-block hidden-lg">
			<div class="line-it-button" style="display: none;" data-lang="en" data-type="like" data-url="<?php echo get_permalink( $post->ID ); ?>" data-share="true" data-lineid="@LTA5871H"></div>
			<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
		    </div>
        </div>
    </div>

    <hr>
<?php
  } // end while
} // end if
?></section>
<?php get_footer();?>