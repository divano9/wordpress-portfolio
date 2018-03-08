
<?php

get_header();

//Uzimanje ID-ija kategorije koju smo selektovali
$cat_id = get_query_var('cat');

$args = array(
  "numerposts" => -1, // broj postova koji se selektuje ako je -1 to je selekcija svih postova
  "order" => "DESC", //descending sortiranje, najnoviji ide prvi
  "orderby" => "post_date", // sortiranje postova po datumu
  "category" => "$cat_id" // filtriranje postova po kategoriji
);

$posts = get_posts($args);

 ?>



 <!--Blog-->


 <div class="col-md-8 px-0 news-d">
     <section class="blog ml-3">
         <div class="row masonery">

<?php foreach ($posts as $pt) { ?>

             <div class="col-md-6 one-n">
                 <article class="shadow">
                     <figure>

                       <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($pt->ID), 'medium'); ?>
                       <!-- <?php print_r($pimage); ?> -->
                       <a href="<?php echo get_permalink($pt->ID);   ?>">
                         <img src="<?php echo $pimage[0]; ?>" alt=""/>
                       </a>

                     </figure>
                     <div class="bg" style="background-color: #f15c5b;">
                         <h2><?php echo $pt->post_title; ?></h2>
                         <p>branding, ui-ux, article,</p>
                     </div>

                     <p>
                        <?php echo portfolio_get_more_excerpt($pt->post_content); ?>
                     </p>
                 </article>
             </div>
<?php } ?>



         </div>

     </section>
 </div>




<?php

get_footer();

 ?>
