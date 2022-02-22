<?php get_header(); 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
?>



<!--Main layout-->
<main class="mt-4 mb-5">
    <div class="container">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-md-8 mb-4">
                <header>
                    <div id="intro" class="pb-3 text-center bg-light">
                        <h1 class="mb-0 h4"><?php the_title(); ?></h1>
                    </div>
                </header>
                <!--Section: Post data-mdb-->
                <section class="border-bottom mb-4">
                    <?php the_post_thumbnail( 'medium-large',array('class' => 'img-fluid shadow-2-strong rounded-5 mb-4') ); ?>
                    <div class="row align-items-center mb-4">
                        <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg"
                                class="rounded-5 shadow-1-strong me-2" height="35" alt="" loading="lazy" />
                            <span> Published <u><?php echo get_the_date()?></u> by</span>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"
                                class="text-dark"><?php the_author();  ?>
                            </a>
                        </div>

                        <div class="col-lg-6 text-center text-lg-end">
                            <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #3b5998;">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #55acee;">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #0082ca;">
                                <i class="fab fa-linkedin"></i>
                            </button>
                            <button type="button" class="btn btn-primary px-3 me-1">
                                <i class="fas fa-comments"></i>
                            </button>
                        </div>
                    </div>
                </section>
                <!--Section: Post data-mdb-->

                <!--Section: Text-->
                <section class='border-bottom mb-3'>
                    <p><?php the_content(); ?></p>
                </section>
                <!--Section: Text-->




                <!--Section: Comments-->
                <section class="border-bottom mb-3">
                    <p class="text-center"><strong>Comments: 3</strong></p>

                    <!-- Comment -->
                    <div class="row mb-4">
                        <div class="col-2">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(24).jpg"
                                class="img-fluid shadow-1-strong rounded-5" alt="" />
                        </div>

                        <div class="col-10">
                            <p class="mb-2"><strong>Marta Dolores</strong></p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                                inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                                Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                            </p>
                        </div>
                    </div>

                    <!-- Comment -->
                    <div class="row mb-4">
                        <div class="col-2">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(25).jpg"
                                class="img-fluid shadow-1-strong rounded-5" alt="" />
                        </div>

                        <div class="col-10">
                            <p class="mb-2"><strong>Valeria Groove</strong></p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                                inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                                Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                            </p>
                        </div>
                    </div>

                    <!-- Comment -->
                    <div class="row mb-4">
                        <div class="col-2">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
                                class="img-fluid shadow-1-strong rounded-5" alt="" />
                        </div>

                        <div class="col-10">
                            <p class="mb-2"><strong>Antonia Velez</strong></p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                                inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                                Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                            </p>
                        </div>
                    </div>
                </section>
                <!--Section: Comments-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-4">
                <!--Section: Sidebar-->
                <section class="sticky-top" style="top: 80px;">
                    <!--Section: Ad-->
                    <section class="text-center border-bottom pb-4 mb-4">
                        <div class="bg-image hover-overlay ripple mb-4">
                            <img src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/standard/about/assets/mdb5-about.webp"
                                class="img-fluid" />
                            <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
                                <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                            </a>
                        </div>
                        <h5>Material Design for Bootstrap 5</h5>

                        <p>
                            500+ components, free templates, 1-min installation, extensive tutorial, huge
                            community. MIT license - free for personal & commercial use
                        </p>
                        <a role="button" class="btn btn-primary" href="https://mdbootstrap.com/docs/standard/"
                            target="_blank">Download for free<i class="fas fa-download ms-2"></i></a>
                    </section>
                    <!--Section: Ad-->

                    <!--Section: Video-->
                    <section class="text-center">
                        <h5 class="mb-4">Learn the newest Bootstrap 5</h5>

                        <div class="embed-responsive embed-responsive-16by9 shadow-4-strong">
                            <iframe class="embed-responsive-item rounded-5"
                                src="https://www.youtube.com/embed/c9B4TPnak1A" allowfullscreen></iframe>
                        </div>
                    </section>
                    <!--Section: Video-->
                </section>
                <!--Section: Sidebar-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
</main>
<!--Main layout-->



<?php
  } // end while
} // end if
get_footer();