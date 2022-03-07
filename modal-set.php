<!DOCTYPE html>
<html style="font-family: 'Schoolbell' !important;">

<?php 
 session_start();
 include "php/db.php";
?>
<?php 
if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])) {
    
}else{
    header("Location: https://localhost/sberna");
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nastavení upozornění</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Schoolbell">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>


</style>

<body>

<div class="container" style="margin-top:100px">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        
            <h2>Nastavení notifikace</h2>
            <form action="assets/php/nofication-set.php" method="POST">
            <div class="form-group">
                <label for="heading">Nadpis</label>
                <input type="text" class="form-control" id="heading" name="heading" required>
                
            </div>
            <div class="form-group">
                <label for="content">Obsah zprávy</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="isVisible">Zveřejnit</label>
            </div>
            <input type="submit" class="btn btn-success" value="Potvrdit">
     
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>


<script>

</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>