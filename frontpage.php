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
            <!--Poddklippnings-->
            <article class="info-article">
                <div class="info-image-div">
                    <img class="info-image" ngSrc="assets/images/edit_program.png" width="300" height="350" alt="ett ljudmixerprogram" priority >
                </div>

                <h2>Poddklippning</h2>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in <a routerLink="/podd">reprehenderi</a>.
                </p>
            </article>
            
            <!--Eventplanering-->
            <article class="info-article">
                <div class="info-image-div">
                    <img class="info-image" ngSrc="assets/images/event-png.png" width="300" height="350" alt="ett event" >
                </div>

                <h2>Eventplanering</h2>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in <a routerLink="/event">reprehenderi</a>.
                </p>
            </article>
        </div>
    </div>

    <img class="decoration-image" ngSrc="assets/images/mixerbord1.png" width="1920" height="400" alt="En person pratar in i en mick i en studio">

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