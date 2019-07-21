<?php $featured_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<section id="page-hero" class="conatainer-fluid animated fadeIn" style="background: url('<?php echo $featured_img['0'];?>')">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 mx-auto">
                <h2 class="white animated fadeInUp"><?php the_title(); ?></h2>
             </div>
         </div>
     </div>
</section>