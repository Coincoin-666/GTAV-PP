<?php
require "../includes/header.php";
require "../controllers/pics_ctrl.php";
?>

<main class="container current-text mt-3">
    <h1 class="_title">Properties</h1>
    <h2 class="_title text-muted">or how to spend your money in GTAV.</h2>
    <div class="row g-3">
        <p>At the end of the game you'll earn a few dozens of millions of dollars, with <a href="#">the Big One</a> Score.<br>
            First thing you should know, some property are buyable only by one character.
            Second thing you should know, if you wanna buy the Golf Course, <strong>do not spend anything during the game</strong>.</p>
        <p>Here how to spend it.</p>

        <div class="container m-3">
            <h3 class="hand green">Franklin's Properties</h3>
            <div class="container border-f mb-2">
                <div class="row g-3">
                    <h4 class="hand" data-bs-toggle="collapse" href="#downtownCabCollapse" role="button" aria-expanded="false" aria-controls="downtownCabCollapse">Downtown Cab Company</h4>
                    <form method="POST" name="DowntownCabCo">
                        <div class="collapse" id="downtownCabCollapse">
                            <div class="card card-body propertyCollapse">
                                <div class="container">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <figure class="figure properties">
                                                <img src="<?= $img_path_array['5']['0'] ?>" class="figure-img img-fluid rounded" alt="DowntownCabCo front sign">
                                                <figcaption class="figure-caption">DowntownCabCo Front Sign</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-6">
                                            <figure class="figure properties">
                                                <img src="<?= $img_path_array['6']['0'] ?>" class="figure-img img-fluid rounded" alt="DowntownCabCo front">
                                                <figcaption class="figure-caption">DowntownCabCo Entrance</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt me-2"></i>0897 Mirror Park Boulevard – East Vinewood</li>
                                                <li><i class="fas fa-dollar-sign me-2"></i>200,000</li>
                                                <li><i class="fas fa-dollar-sign me-1"></i><i class="fas fa-sign-in-alt me-2"></i>2,000</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <p>Located at the corner of Mirror Park Boulevard and Tangerine Street, the purchase of this property will give you free Taxi rides. The manager can also call you from time to time to handle a ride for a special client.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container border-f mb-2">
                <div class="row g-3">
                    <h4 class="hand" data-bs-toggle="collapse" href="#smotwCollapse" role="button" aria-expanded="false" aria-controls="smotwCollapse">Smoke On The Water</h4>
                    <form method="POST" name="SmokeOnTheWater">
                        <div class="collapse" id="smotwCollapse">
                            <div class="card card-body propertyCollapse">
                                <div class="container">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <figure class="figure properties">
                                                <img src="<?= $img_path_array['7']['0'] ?>" class="figure-img img-fluid rounded" alt="DowntownCabCo front sign">
                                                <figcaption class="figure-caption">Smoke On The Water</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-6">
                                            <figure class="figure properties">
                                                <img src="" class="figure-img img-fluid rounded" alt="Sorry, the developer forgot to save screenshots when buying the property in the game.">
                                                <figcaption class="figure-caption">Hello Friend.</figcaption>
                                            </figure>
                                            <p>But, so you can forgive me, here's a gift:</p>
                                            <iframe src="https://open.spotify.com/embed/track/5MMnwYs0hIxkENRsbkWJ2G?theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                            <p>And a thought: Music is a VERY important part of the games, and I must say the multiple radio station and their playlists are responsible for a good part of my musical culture.
                                                <br>So, next section: The Music Of Grand Theft Auto! <span class="text-muted">But not now. Now I don't have time.</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt me-2"></i>Vespucci Beach Sidewalk – Vespucci Beach</li>
                                                <li><i class="fas fa-dollar-sign me-2"></i>204,000</li>
                                                <li><i class="fas fa-dollar-sign me-1"></i><i class="fas fa-sign-in-alt me-2"></i>9,600</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <p>Ideally located in South Los Santos, beach front. The owner might call you to handle some deliveries to the store.</p>
                                            <p>The name of the store is a reference to a song by Deep Purple, and the whole neighborhood looks a lot like Venice Beach in Los Angeles.<span class="text-muted">Please note that medical use of weed has been legal in California since 1996 and its adult use since 2016.</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container border-f mb-2">
                <div class="row g-3">
                    <h4 class="hand" data-bs-toggle="collapse" href="#LSCcollapse" role="button" aria-expanded="false" aria-controls="LSCcollapse">Los Santos Custom</h4>
                    <form method="POST" name="LosSantosCustom">
                        <div class="collapse" id="LSCcollapse">
                            <div class="card card-body propertyCollapse">
                                <div class="container">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <figure class="figure properties">
                                                <img src="<?= $img_path_array['9']['0'] ?>" class="figure-img img-fluid rounded" alt="LSC front by night">
                                                <figcaption class="figure-caption">Los Santos Custom – Front. By night. Yeah I need a better picture.</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-6">
                                            <figure class="figure properties">
                                                <img src="<?= $img_path_array['10']['0'] ?>" class="figure-img img-fluid rounded" alt="LSC interior.">
                                                <figcaption class="figure-caption">Inside LSC</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt me-2"></i>Road 68, Harmony – Center San Andreas</li>
                                                <li><i class="fas fa-dollar-sign me-2"></i>349,000</li>
                                                <li><i class="fas fa-dollar-sign me-1"></i><i class="fas fa-sign-in-alt me-2"></i>1,600</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <p>What a not-so-profitable investment you might say?</p>
                                            <p>Purchasing this store of the Los Santos Custom franchise will allow Franklin to mod all the vehicles he wants for free. So that's a good way to have fun.</p>
                                            <p>You can also take advantage of this situation by "stealing" one of your friend's car: Michael's or Trevor's but also the ones from Amanda and Tracey.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- -------------------------------------this is just a separator---------------------------------- -->

        <div class="container m-3">
            <h3 class="hand blue">Michael's Properties</h3>
            <div class="container border-m mb-2">
                <div class="row g-3">
                    <h4 class="hand" data-bs-toggle="collapse" href="#tivoliCollapse" role="button" aria-expanded="false" aria-controls="tivoliCollapse">Tivoli Cinema</h4>
                    <form method="POST" name="Tivoli">
                        <div class="collapse" id="tivoliCollapse">
                            <div class="card card-body propertyCollapse">
                                <div class="container">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <figure class="figure properties">
                                                <img src="<?= $img_path_array['8']['0'] ?>" class="figure-img img-fluid rounded" alt="LSC front by night">
                                                <figcaption class="figure-caption">Tivoli Cinema – Entrance</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-6">
                                            <p>No other pictures because the neighborhood was SO crowded that I couldn't have a good shot.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt me-2"></i>Corner of Morningwood Bld & Cougar Avenue – Morningwood</li>
                                                <li><i class="fas fa-dollar-sign me-2"></i>30,000,000</li>
                                                <li><i class="fas fa-dollar-sign me-1"></i><i class="fas fa-sign-in-alt me-2"></i>142,300</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <p>So, yeah...that's a lot of money, and you probably won't be able to buy it until you've finished the game.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container m-3">
                <h3 class="hand orange">Trevor's Properties</h3>
                <div class="container border-t mb-2">
                    <div class="row g-3">
                        <h4 class="hand" data-bs-toggle="collapse" href="#macKenzieCollapse" role="button" aria-expanded="false" aria-controls="macKenzieCollapse">MacKenzie's Airfield</h4>
                        <div class="collapse" id="macKenzieCollapse">
                            <div class="card card-body propertyCollapse">
                                <img src="" alt="">
                                <p>Weapon smuggling + 7500 by air + 5000 by land</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>


<?php
require "../includes/footer.php";
?>