<?php
    require('config/config.php');
    
    if(isset($_POST['submit'])) {
        
        $id_number = mysqli_real_escape_string($conn, $_POST['id']);
        date_default_timezone_set('Asia/Manila');
        $timestamp = date('Y-m-d h:i:s');
        $result = mysqli_query($conn, "SELECT * FROM `master` WHERE id_number = {$id_number}");
        $student = mysqli_fetch_assoc($result);

        if($id_number == $student['id_number']) {
            // echo 'Same';
            $query = "INSERT INTO `participants`(id_number, time_registered) VALUES (?,?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("is", $id_number, $timestamp);
            $stmt->execute();

            header('location: index.php?id=' . $student['id_number'] . '&fname=' . strtoupper($student['fname'])); 
            session_destroy();
        } else {
            $invalid = "INVALID ID NUMBER";
            echo $invalid;
        }        
    } 
    
    if(isset($_POST['done'])) {
        header('location: index.php');
    }
?>

<?php include('inc/header.php') ?>
    <?php if(isset($_GET['id'])): 
        $result = mysqli_query($conn, "SELECT * FROM `master` WHERE id_number = {$_GET['id']}");
        $student = mysqli_fetch_assoc($result);
    ?>
    <?php include('inc/greeting.php'); ?>
    <?php else: ?>
        <?php include('inc/register.php'); ?>
    <?php endif; ?>
<?php include('inc/footer.php') ?>