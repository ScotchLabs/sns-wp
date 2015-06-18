<?php /* Template Name: Show Page */ ?>
<?php get_header(); ?>

<div class="container">
  <div class="content">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="sns-content">
            <!-- content -->
            <?php if (has_post_thumbnail()) { ?>
              <div class="row">
                <div class="col-md-12">
                  <?php the_post_thumbnail('post-thumbnail', 'style=width:100%'); ?>
                </div>
              </div>
            <?php } ?>
            <h1><?php the_title(); ?></h1>
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                  <?php the_content(); ?>
                <?php endwhile; endif; ?>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!--/row-->
  </div><!--/content-->
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<?php get_footer(); ?>
