<?php get_header(); ?>

<?php get_header(); ?>

<main class='container'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <h1 class='my-3'><?php the_title(); ?>!!</h1>
            <?php the_content(); ?>

        <?php    }
    }?>

    <div class="lista-productos my-5">
        <h2 class="text-center my-5">PRODUCTOS</h2>
        <div class="row">
        <?php
        $args = array(
            'post_type' => 'producto',
            'post_per_page' => -1,
            'order'         => 'ASC',
            'orderby'       =>  'title'
        );


        $productos = new WP_Query($args);

        if($productos -> have_posts()){
            while($productos->have_posts()){
               $productos->the_post();
               ?>

               <div class="card col-4" style="width: 18rem;">
               <h5 class="card-title text-center d-flex justify-content-center"> <?php the_title();?></h5> 
                   <img class="card-img-top">
                   <?php the_post_thumbnail('large'); ?>
                    </img>
                    <div class="card-body d-flex align-items-end justify-content-center">
                        <div class="d-flex justify-content-center ">                     
                         <a href="<?php the_permalink(); ?>" class="btn btn-primary d-flex justify-content-center ">Ver Producto</a>
                        </div>   
                    </div>
               </div>

            <?php }
        }

        ?>
     </div>
    </div>
</main>

<?php get_footer(); ?>