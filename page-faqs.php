<?php get_header() ;  ?> 
<?php $faqs = get_faqs() ; ?>

<?php foreach($faqs as $faq){ ?> 
    <h3> <?= $faq->post_title ?></h3> 
    <p> <?= $faq->post_content  ?></p>
    <?php }  ?>

    
<?php get_footer() ;  ?>