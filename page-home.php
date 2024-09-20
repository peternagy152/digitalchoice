<?php get_header(); ?>
<?php $home_content = get_field("home_group") ;  ?>
<h1> Welcome From Home Page</h1>

<!-- Hero Banner  --> 
 <h2> <?php echo $home_content['hero_title'] ;  ?></h2>
 <h2> <?php echo $home_content['hero_desc'] ;  ?></h2>
 <img src="<?php echo $home_content['hero_image'] ?>" alt="">
 <a href="<?php echo $home_content['hero_button']['url'] ?>"> <?php echo $home_content['hero_button']['title'] ; ?></a>


 <!-- Services  -->
  <h2> <?php echo $home_content['service_title'] ;  ?></h2>
  <!-- Services Array  -->
   <?php foreach($home_content['services_repeater'] as $one_services){ ?>
    <img src="<?php echo $one_services['service_icon'] ?>" alt="">
    <h2><?php $one_services['service_title'] ?></h2>
    <h2><?php $one_services['service_desc'] ?></h2> 
    <?php } ?>


<!--  About Section  -->
  <?php foreach($home_content['about_repeater'] as $about){ ?>
    <img src="<?= $about['about_image'] ?>" alt="">
    <h3><?= $about['about_title'] ?></h3>
   <p> <?= $about['about_content'] ?> </p> 
   <a href="<?= $about['about_button']['url'] ?>"> <?= $about['about_button']['title'] ?></a>


    <?php  } ?>

<!-- Projects  -->
 <h2><?php echo $home_content['projects_section_title'] ?></h2>


 <!-- Projects Array --> 
  <?php foreach($home_content['project_repeater'] as $one_project){ ?>
    <img src="<?php echo $one_project['project_image'] ?>" alt="">
    <h3><?= $one_project['project_title']?></h3>
    <h3><?= $one_project['project_subtitle']?></h3>
    <?php } ?>


<!-- Last Section  -->
 <h3><?= $home_content['last_title'] ?></h3>
 <h3><?= $home_content['last_subtitle'] ?></h3>
 <a href="<?php echo $home_content['last_button']['url'] ?>"> <?php echo $home_content['last_button']['title'] ;  ?></a>

<?php get_footer(); ?>