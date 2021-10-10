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
                    <h4 class="hand" data-bs-toggle="collapse" href="#inpoundCollapse" role="button" aria-expanded="false" aria-controls="inpoundCollapse">Towing Inpound</h4>
                    <p>
                    </p>
                    <div class="collapse" id="inpoundCollapse">
                        <div class="card card-body propertyCollapse">
                            <img src="" alt="">
                            <p>$500 per vehicle</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container border-f mb-2">
                <div class="row g-3">
                    <h4 class="hand" data-bs-toggle="collapse" href="#smotwCollapse" role="button" aria-expanded="false" aria-controls="smotwCollapse">Smoke On The Water</h4>
                    <p>
                    </p>
                    <div class="collapse" id="smotwCollapse">
                        <div class="card card-body propertyCollapse">
                            <img src="" alt="">
                            <p>smoke some weeeed and Hello Deep Purple</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        // }
        ?>


        <div class="container m-3">
            <h3 class="hand blue">Michael's Properties</h3>
            <div class="container border-m mb-2">
                <div class="row g-3">
                    <h4 class="hand" data-bs-toggle="collapse" href="#tivoliCollapse" role="button" aria-expanded="false" aria-controls="tivoliCollapse">Cinema Tivoli</h4>
                    <p>
                    </p>
                    <div class="collapse" id="tivoliCollapse">
                        <div class="card card-body propertyCollapse">
                            <img src="" alt="">
                            <p>Free cine + lots of $$$</p>
                        </div>
                    </div>
                </div>
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