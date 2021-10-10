<?php
require "includes/header.php";
?>

<main class="container">

    <div class="row g-3 py-auto my-auto">
        <h1 class=" _title gold">Welcome back to San Andreas</h1>
        <h2 class="_title text-muted">an amazing noob project.</h2>
        <section class="row justify-content-center align-items-center">
            <figure class="col-sm-12 col-md-4">
                <!-- NEED A WELCOME TO LOS SANTOS PANEL -->
            </figure>

            <article class="col-sm-12 col-md-6 current-text">
                <h3>Project Description</h3>
                <p>This came to me as a project mainly for two reasons:</p>
                <ul class="list-unstyled">
                    <li>
                        like blahblahblah
                        <!-- As we must focus on building a responsive website, I've noticed that most of the video game online guides are in fact responsive, but there is not really a mobile version. So my actual intention to build a mobile version only with the main informations. -->
                    </li>
                    <li>
                        <!-- Secondely, we need an updatable database. Since I haven't finished the game entirely, I thought that could be good idea to create an evolving website. As I'll find new items, I'll updates the articles etc. -->
                    </li>
                </ul>
            </article>
        </section>
        <hr>
        
        <div class="row">
            <section class="col-sm-12 col-md-4">
                <div class="main_btn mt-4">

                    <img src="assets/imgs/svg/missions_btn.svg" alt="big nav button to go to missions">
       
                </div>
            </section>
            <section class="col-sm-12 col-md-4">
                <div class="main_btn mt-4">
                    <a href="views/vehicles_gallery.php">
                        <img src="assets/imgs/svg/vehicles_btn.svg" alt="big nav button to go to vehicles gallery">
                    </a>
                </div>
            </section>
            <section class="col-sm-12 col-md-4">
                <div class="card">
                    <p class="text-dark text-center card-title">interactive map</p>
                    <!-- It's a card, but also: a big button to go to the selected page -->
                </div>
            </section>
        </div>
    </div>

</main>

<?php
require "includes/footer.php";
?>