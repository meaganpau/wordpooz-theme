<?php
/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>
<?php $heroImage = get_field('header-hero') ?>
<header class="hero" style="background-image:url('<?php echo $heroImage['url']; ?>')">
    <div class="hero-content">
      <?php $headerLogo = get_field('header-logo'); ?>
      <img src="<?php echo $headerLogo['url'] ?>" alt="" />
      <h1><?php the_field('header-title') ?></h1>
      <h2><?php the_field('header-tagline') ?></h2>
      <a class="btn___header" href="<?php the_field('header-link'); ?>"><?php the_field('header-link-text'); ?></a>
    </div>
</header>
<section class="about" id="about">
  <div class="wrapper">
      <h1><?php the_field('about-title'); ?></h1>
      <h2><?php the_field('about-tagline'); ?></h2>
        <div class="about___icons">
      <?php
        while(have_rows('about-icons')) : the_row();
        ?>
          <div class="about___icons---box">
            <?php $imageUrl = get_sub_field('about-icon-image'); ?>
            <img src="<?php echo $imageUrl['url'] ?>" alt="" />
            <h3><?php the_sub_field('about-icon-title'); ?></h3>
            <p>
              <?php the_sub_field('about-icon-content'); ?>
            </p>
          </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<section class="projects" id="projects">
  <div class="wrapper">
    <h1><?php the_field('project-title') ?></h1>
    <h2><?php the_field('project-tagline') ?></h2>
      <div class="project-wrapper">
        <div class="figure-container">
        <?php
        while(have_rows('project-box')) : the_row();
        ?>
            <figure>
              <?php $projectImage = get_sub_field('project-image'); ?>
              <img src="<?php echo $projectImage['url'] ?>" alt="">
            </figure>
            <?php endwhile; ?>
        </div>
        <div class="figure-container-2">
            <?php while(have_rows('project-box-two')) : the_row();
            ?>
            <figure>
              <?php $projectImage = get_sub_field('project-image-two'); ?>
              <img src="<?php echo $projectImage['url'] ?>" alt="">
            </figure>                 
            <?php endwhile; ?>  
        </div>
        <div class="figure-container-3">
            <?php while(have_rows('project-box-three')) : the_row();
            ?>
            <figure>
              <?php $projectImage = get_sub_field('project-image-three'); ?>
              <img src="<?php echo $projectImage['url'] ?>" alt="">
            </figure>                 
            <?php endwhile; ?>  
        </div>
      </div>
  </div>
</section>
<section class="work">
  <?php while(have_rows('work-container')) : the_row();  ?>
  <?php $workImage = get_sub_field('work-bg-image'); ?>
  <div class="work-container" style="background-image:linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)),url(<?php echo $workImage['url']?>)">
    <div>
      <h2><?php the_sub_field('work-title') ?></h2>
      <p><?php the_sub_field('work-tagline') ?></p>
    </div>
  </div>  
  <?php endwhile; ?>  
</section>
<section class="blog">
  <div class="wrapper">
  </div>
</section>

<?php get_footer(); ?>
