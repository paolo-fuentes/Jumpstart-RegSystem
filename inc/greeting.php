<style>
        body{
            background-image : url("reg2.png");
            background-repeat: no-repeat;
            background-size:cover;
            overflow-x:hidden;
        }
        </style>
        <div class="container">
            <form>
                <h5>ID Number</h5>
                <h1><?php echo $student['id_number']; ?></h1>
                <h2>Get ready for a wicket good time,</h2>
                <h2><?php echo $student['fname']; ?></h2>
            <div class="btn-container">
                <input type="submit" name="done" value="DONE" class="btn btn-success">
            </div>
            </form>
        </div>