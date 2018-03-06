<?php

get_header();

 ?>

 <!--Cover-letter-->
 <div class="col-md-8 px-0">
     <section class="cover-letter">
         <article class="letter shadow">
             <span> <?php echo $post->post_date; ?></span><br>
             <?php echo $post->post_except; ?>
             <span> <?php echo $post->post_title; ?></span><br>
             <?php echo $post->post_content; ?>
         </article>
         <article class="education shadow">
             <div class="row">
                 <div class="col-2">
                     <span class="fa fa-graduation-cap "></span>
                 </div>
                 <div class="col-10 px-md-0 square">
                     <div class="hr">
                         <h2>References</h2>
                         <h4>Mr John Doe</h4>
                         <h5>Founder & Ceo, Lorem ipsum</h5>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         </p>
                     </div>
                     <div class="hr">
                         <h4>Mr Anwar Hosein</h4>
                         <h5>Co-founder & Ceo, Media-id</h5>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         </p>
                     </div>

                 </div>
             </div>
         </article>

     </section>
 </div>





 <?php
 get_footer();
?>
