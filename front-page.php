<?php get_header(); ?>

<main>
    <div class="hero-image-area">
        <img class="hero-image" ngSrc="assets/images/hero.png" width="1920" height="400" alt="ett mixerbord">
        <button class="book-button-frontpage"><a routerLink="/contact">Boka ett första möte</a></button>
    </div>

    <h1>Hi-Hat Sound</h1>
    <p class="p-presentation">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo </p>

    
    <!--Introduction to services-->
    <div class="info-section">

        <div class="info-flexbox">
            <?php
                query_posts('category_name=startsida-services&posts_per_page=2');
                if(have_posts()) {
                    while(have_posts()) {
                        the_post();
                        ?>

                    <article class="info-article">
                
                        <div class="info-image-div">
                            <?php the_post_thumbnail('info-image-small'); ?>
                        </div>
                            
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p> <!--gör kanske om till en div, har det i kattcaf+eet och det är nog av en anledning-->

                    </article>
                    <?php
                    }
                }
            ?>
            
            <!--Eventplanering-->
            <!-- <article class="info-article">
                <div class="info-image-div">
                    <img class="info-image" ngSrc="assets/images/event-png.png" width="300" height="350" alt="ett event" >
                </div>

                <h2>Eventplanering</h2>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in <a routerLink="/event">reprehenderi</a>.
                </p>
            </article> -->
        </div>
    </div>

    <img class="decoration-image" src="<?php echo get_template_directory_uri(); ?>/css/images/mixerbord1.png" alt="ett mixerbord">

    <article class="home-course-article">
        <h2>Kurs i poddklippning</h2>
        <p>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam.
        </p>
        <p>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in <a routerLink="/course">reprehenderi</a>.
        </p>
    </article>

</main>

<?php get_footer(); ?>