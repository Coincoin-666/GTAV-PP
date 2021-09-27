<?php
require "../includes/dashboard_header.php";
require "../controllers/vehicles_ctrl.php";
?>


<div class="col-7 mt-4 current_text container">
    <div class="container">
        <h2 class="_title">In-Game Vehicle Brands</h2>
        <div class="container border border-dark p-5">
            <table class="table table-striped table-dark table-hover text-center">
                <thead>
                    <th scope="col">Logo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Origin</th>
                    <th scope="col">Category</th>
                    <th scope="col">Add Vehicle</th>
                </thead>

                <?php
                foreach ($get_brand_infos as $brand_infos) {
                ?>
                    <tr>
                        <td>
                            <img src="/<?= $brand_infos['brand_logo_path'] ?>" class="small_logo">
                        </td>
                        <td>
                            <?= $brand_infos['brand_name'] ?>
                        </td>
                        <td>
                            <?= $brand_infos['brand_origin'] ?>
                        </td>
                        <td>
                            <?= $brand_infos['brand_category'] ?>
                        </td>
                        <td>
                            <form action="" method="GET">
                                <a href="add_vehicles.php" type="submit" name="add_vehicle_from_brand"><i class="fas fa-car"></i></a>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
</div>

<?php
include "../includes/footer.php";
?>