<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    if (isset($_POST['edit'])) {
        $idnumber = mysqli_real_escape_string($db, $_POST['edit']);
    } elseif (isset($_POST['delete'])) {
        $idnumber = mysqli_real_escape_string($db, $_POST['delete']);
        header("location: index.php");
    }


    $sql = "SELECT * FROM escolas WHERE IdEscolas = '$idnumber'";
    $results = mysqli_query($db, $sql);

    $row2 = mysqli_fetch_array($results);

    //echo $row2[1];

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V1.3</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div class="container profile profile-view" id="profile">
    <div class="row">
        <div class="col-md-12 alert-col relative">
            <div class="alert alert-info absolue center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <span>Profile save with success</span></div>
        </div>
    </div>
    <form>
        <div class="form-row profile-row">
            <div class="col-md-4 relative">
                <div class="avatar">
                    <div class="avatar-bg center"></div>
                </div>
                <input type="file" class="form-control" name="avatar-file"></div>
            <div class="col-md-8">
                <h1>Profile </h1>
                <hr>
                <div class="form-row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label>ID:</label><input disabled placeholder="<?php echo $row2[0]; ?>"
                                                                         class="form-control" type="text"
                                                                         name="firstname"></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label>Lastname </label><input class="form-control" type="text"
                                                                               name="lastname"></div>
                    </div>
                </div>
                <div class="form-group"><label>Email </label><input class="form-control" type="email" autocomplete="off"
                                                                    required="" name="email"></div>
                <div class="form-row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label>Password </label><input class="form-control" type="password"
                                                                               name="password" autocomplete="off"
                                                                               required=""></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label>Confirm Password</label><input class="form-control"
                                                                                      type="password" name="confirmpass"
                                                                                      autocomplete="off" required="">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-md-12 content-right">
                        <button class="btn btn-primary form-btn" type="submit">SAVE</button>
                        <button class="btn btn-danger form-btn" type="reset">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>


