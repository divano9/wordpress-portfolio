<?php

get_header();

 ?>

 <div class="col-md-8 px-0 news-d">
     <section class="single">
         <article class="s-news shadow">
             <figure>
               <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
                 <img src="<?php echo $pimage[0]; ?>" alt=""/>
             </figure>
             <div class="bg" style="background-color: #f15c5b;">
                 <h2><?php echo $post->post_title; ?></h2>
                 <p>branding, ui-ux, article,</p>
             </div>
             <div class="bottom-txt">
                 <?php echo $post->post_content; ?>
             </div>
         </article>

         <article class="comments mt-5">
             <div class="comment d-flex mb-4 shadow">
                 <figure>
                     <img src="img/avatar1.jpg" alt=""/>
                 </figure>
                 <div class="comment-content">
                     <h4>Jenny Doe</h4>
                     <small>February 18.2015 at 2:56 pm</small>
                     <p>
                         Lorem ipsum dolor sit amet, consectetur
                         adipiscing elit, sed do eiusmod tempor
                         incididunt ut labore et dolore magna aliqua.
                     </p>
                 </div>
             </div>
             <div class="comment d-flex ml-5 shadow">
                 <figure>
                     <img src="img/avatar2.png" alt=""/>
                 </figure>
                 <div class="comment-pic">
                     <div class="comment-content">
                         <h4>Jenny Doe</h4>
                         <small>February 18.2015 at 2:56 pm</small>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur
                             adipiscing elit, sed do eiusmod tempor
                             incididunt ut labore et dolore magna aliqua.
                         </p>
                     </div>
                 </div>
         </article>

         <article class="comment-form shadow mt-5">
             <form class="contact-form" method="get" action="">
                 <div class="form-group">
                     <input class="form-control" type="text" name="name" placeholder="Name" value="">
                     <div class="error"></div>
                 </div>
                 <div class="form-group">
                     <input class="form-control" type="email" name="email" placeholder="Email" value="" >
                     <div class="error"></div>
                 </div>
                 <div class="form-group">
                     <textarea class="form-control" placeholder="Write Here" name="message" rows="3"></textarea>
                     <div class="error"></div>
                 </div>
                 <div class="form-group">
                     <button class="btn btn-primary shadow" type="submit">COMMENT</button>
                 </div>

             </form>
         </article>

     </section>
 </div>


 <?php

 get_footer();

  ?>
