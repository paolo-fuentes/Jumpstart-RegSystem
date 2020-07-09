<style>
    body{
        background-image : url("reg.png");
        background-repeat: no-repeat;
        background-size:cover;
        overflow-x:hidden;
    }
</style>
<div class="container">
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" autocomplete="off">
            <div class="form-group">
                <h4>ID NUMBER</h4>
                <input type="text" name="id" class="form-control" placeholder="ID Number">
            </div>
        <div class="btn-container">
            <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary">
        </div>
        </form>
    </div>