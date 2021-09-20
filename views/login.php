<?php
include "../includes/dashboard_header.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container justify-content-center align-item-center">
        <form action="" method="POST">
            <h2 class="_title">Login</h2>
            <div class="container border border-dark p-5">
                <div class="row g-3">
                    <div class="col-6">
                        <label for="pseudonymn" class="form-label">Username</label>
                        <input type="text" name="pseudonymn" id="pseudonymn" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="offset-1">
                    <button type="submit" name="login_btn" class="btn btn-dark ms-2">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<?php
include "../includes/footer.php";
?>