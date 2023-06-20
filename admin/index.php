<?php
inclugide '../includes/header.php';
?>
<style>
    html,
    body {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
</style>


<div class="container">
    <div class="card border">
        <h3 style="text-align: center;">Login</h3>
        <form action="">
            <div class="card-body">
                <div class="m-2" style="margin: 5px;">
                    <input type="text" class="form-control" name="" id="" placeholder="username">
                </div>
                <div class="m-2" style="margin: 5px;">
                    <input type="password" class="form-control" name="" id="" placeholder="password">
                </div>
            </div>
            <div style="margin: 5px; width: auto;">
                <button>Login</button>
            </div>
        </form>
    </div>
</div>

<?php
include '../includes/footer.php';
?>