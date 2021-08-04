<?php get_header(); ?>

<main class='container my-3'>
    <?php if(have_posts()){
        while(have_posts()){
            the_post();
            ?>
                <h1 class="my-3"><?php the_title() ?></h1>
                <div class="row">
                    <div class="col-4">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <div class="col-8">
                        <?php the_content(); ?>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto maxime quia fugit delectus aspernatur facilis quo. Odio rerum, dolores non nam accusamus distinctio molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam saepe temporibus, eligendi maiores quidem doloribus, asperiores doloremque voluptatibus sint exercitationem hic eius impedit cupiditate sunt odit facilis reprehenderit nihil ullam! 
                    <hr/>  

                    </br>

                    <div class="d-flex flex-row bd-highlight mb-4 align-items-center">
                    <button type="submit" class="btn btn-success btn-lg my-4 p-2 bd-highlight ">Comprar</button>
                    <p class="p-2 bd-highlight my-2">Cantidad:</p>
                    <input type="text" class="form-control border-success p-1 bd-highlight">
                    </div>

                    <p class="font-weight-bold"> Quieres más información? </p>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    <button type="button" class="btn btn-warning btn-sm my-3">Enviar</button>
                        <?php 
                             ?>       
                    </div>
                </div>
               
            <?php
        }
    } ?>

</main>


<div class="footer-single"><?php get_footer(); ?> </div>