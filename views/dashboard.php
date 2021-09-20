<?php
require "../includes/dashboard_header.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container justify-content-center align-items-center">
        <h2 class="_title">Dashboard Homepage</h2>
        <div class="container border border-dark p-5">
            <form action="" method="POST">
                <div class="d-flex justify-content-evenly text-center">

                    <button type="submit" name="goto_vehicles_btn" class="btn btn-lg btn-dark"><a href="add_vehicles.php"><i class="fas fa-car fs-1"></i></a></button>

                    <button type="submit" name="goto_missions_btn" class="btn btn-lg btn-dark"><i class="fas fa-globe fs-1"></i></button>

                    <button type="submit" name="goto_mapEl_btn" class="btn btn-lg btn-dark"><i class="fas fa-map-marked-alt fs-1"></i></button>

                </div>
            </form>
        </div>
    </div>
</div>

<?php
require "../includes/footer.php";
?>