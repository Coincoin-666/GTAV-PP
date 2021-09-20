<?php
require "../includes/dashboard_header.php";
require "../controllers/user_ctrl.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container justify-content-center align-item-center">
        <h2 class="_title">Sign Up</h2>
        <div class="container border border-dark p-5">
            <form action="" method="POST">
                <div class="row g-3">
                    <div class="col">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="row g-3 justify-content-evenly">
                        <div class="col-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="confirm_password" class="form-label">Confirm password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <button name="add_user_btn" class="btn btn-dark ms-2">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require "../includes/footer.php";
?>