<?php
require "../includes/dashboard_header.php";
require "../controllers/vehicles_ctrl.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container justify-content-center align-item-center">
        <h2 class="_title">Select a vehicle brand</h2>
        <div class="container border border-dark p-5">
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <div class="row">
                    <div class="col">
                        <label for="select_vehicle_brand" class="form_label">Brand</label>
                        <select name="select_vehicle_brand" id="select_vehicle_brand" required>
                            <option value="default" selected>Choose...</option>
                            <?php

                            foreach ($get_brand_names_and_id as $brand_name) {
                            ?>
                                <option value="<?= $brand_name['vehicles_brand_id'] ?>" data-brand="<?= $brand_name['brand_name'] ?>"><?= $brand_name['brand_name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col">
                        <div class="container d-flex justify-content-evenly">
                            <figure>
                                <img src="" alt="" id="brand_logo">
                            </figure>
                        </div>
                    </div>
                </div>
                <script>
                    var select_brand = document.getElementById('select_vehicle_brand');
                    select_brand.addEventListener('change', function() {
                        var logo = this.options[this.selectedIndex].text;
                        brand_logo.src = `../assets/imgs/vehicles/brands_logo/${logo}_logo.png`;
                    })
                </script>
                <div class="text-end mt-3">
                    <button type="submit" name="select_vehicle_brand_btn" class="btn btn-dark">SELECT</button>
                </div>
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST['select_vehicle_brand'])) {
    ?>
        <h2 class="_title mt-2">New Vehicle</h2>
        <div class="container border border-dark">
            <form action="" method="POST">
                <div class="row g-3 mt-3">
                    <div class="col">
                        <!-- Vehicle Brand -->
                        <!-- from dbtable: vehicles_brands -->
                        <label for="brand_name" class="form-label">Brand</label>
                        <input type="text" name="vehicle_brand_id" class="form-control" value="<?= $_POST['select_vehicle_brand'] ?>" readonly hidden>
                        <?php
                        foreach ($get_brand_names_and_id as $brand_name) {
                            if ($brand_name['vehicles_brand_id'] == $_POST['select_vehicle_brand']) {
                        ?>
                                <p><?= $brand_name['brand_name'] ?></p>

                    </div>
                    <div class="col">
                        <!-- Brand Logo -->
                        <!-- from dbtable: vehicles_brand_logo -->
                        <img src="/<?= $brand_name['brand_logo_path'] ?>">

                <?php
                            }
                        }
                ?>
                    </div>
                    <div class="col">
                        <!-- Brand Country -->
                        <!-- from dbtable: vehicles_brands -->
                        <label for="brand_origin" class="form-label">Country of Origin</label>
                        <input type="text" name="vehicle_brand_id" value="<?= $_POST['select_vehicle_brand'] ?>" readonly hidden>
                        <?php
                        foreach ($get_brand_infos as $brand_infos) {
                            if ($brand_infos['vehicles_brand_id'] == $_POST['select_vehicle_brand']) {
                        ?>
                                <p><?= $brand_infos['brand_origin'] ?></p>

                    </div>

                    <div class="col">
                        <!-- Brand Price Category (high, mid, low) -->
                        <!-- from dbtable: vehicles_brand -->
                        <label for="brand_cat" class="form-label">Price Tag</label>
                        <input type="text" name="vehicle_brand_categroy" value="<?= $_POST['select_vehicle_brand'] ?>" readonly hidden>

                        <p><?= $brand_infos['brand_category'] ?></p>
                <?php
                            }
                        }
                ?>
                    </div>
                </div>
                <div class="row g-3 mt-3">
                    <div class="col">
                        <!-- Vehicle Model -->
                        <!-- from dbtable: vehicles -->
                        <label for="model" class="form-label">Model</label>
                        <input type="text" name="model" id="model" class="form-control">
                    </div>

                    <div class="col">
                        <!-- Vehicle Type (offroad, sport, super etc) -->
                        <!-- from dbtable: vehicles -->
                        <label for="v_type" class="form-label">Vehicle Category</label>
                        <input type="text" name="v_type" id="v_type" class="form-control">
                    </div>

                    <div class="col">
                        <!-- Vehicle Terrain (land, sea, sky) -->
                        <!-- from dbtable: vehicles -->
                        <label for="terrain" class="form-label">Terrain</label>
                        <input type="text" name="terrain" id="terrain" class="form-control">
                    </div>
                </div>

                <div class="row g-3 mt-3">

                    <div class="col">
                        <!-- Vehicle Spec (possibly a data table with basic spec) -->
                        <!-- from dbtable: vehicles -->
                        <label for="spec_table" class="form-label">Vehicle Spec.</label>
                        <input type="text" name="spec_table" id="spec_table" class="form-control">
                        <input type="hidden" name="vehicle_brand_id" value="<?= $_POST['select_vehicle_brand'] ?>">
                    </div>
                </div>

                <div class="text-end mt-3">
                    <button name="add_vehicle_btn" class="btn btn-dark">SAVE</button>
                </div>
            </form>
        </div>
    <?php
    }
    ?>


</div>

<?php
require "../includes/footer.php";

?>