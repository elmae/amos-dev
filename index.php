<?php get_header(); ?>


<div class="p-5 text-center bg-image" style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 400px;
    ">
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3">Heading</h1>
        <h4 class="mb-3">Programing is poetry</h4>

      </div>
    </div>
  </div>
</div>
<!--Main layout-->
<main class="my-5">
  <div class="container">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-md-9 mb-4">
        <!--Section: Content-->
        <section>
          <?php 
            if ( have_posts() ) {
            while ( have_posts() ) {
            the_post(); 
            ?>
          <!-- Post -->
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                <?php the_post_thumbnail( 'medium-large',array('class' => 'img-fluid') ); ?>
                <a href="<?php echo get_permalink(); ?>">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

            <div class="col-md-8 mb-4">
              <h5><?php the_title(); ?></h5>
              <p>
                <?php the_excerpt(); ?>
              </p>

              <a href="<?php echo get_permalink(); ?>"><button type="button" class="btn btn-primary float-end me-5">Read
                  More</button></a>
            </div>
          </div>
          <?php  } // end while
                        } // end if
                    ?>



        </section>
        <!--Section: Content-->
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 mb-4">
        <!--Section: Sidebar-->


        <?php dynamic_sidebar( 'sidebar-1' ); ?>

        <!--Section: Sidebar-->
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->

    <!-- Pagination -->
    <nav class="my-4" aria-label="...">
      <ul class="pagination pagination-circle justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</main>
<!--Main layout-->


<?php

get_footer();