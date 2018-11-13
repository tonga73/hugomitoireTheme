<div class="blog-sidebar col-4 right-sidebar">
   <?php if ( is_active_sidebar( 'right-sidebar-1' ) ) : ?>
      <?php dynamic_sidebar( 'right-sidebar-1' ); ?>
   <?php else : ?>
   <p class="text-light h5">
      No sidebar active.
   </p>
   <?php endif; ?>
</div>