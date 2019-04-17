<?php
Header("Cache-Control: no-cache, no-store, must-revalidate");
Header("Pragma: no-cache");
Header("Expires: 0");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HaeBin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="/HaeBin/img/skull.png">
    <link rel="icon" type="image/x-icon" href="/HaeBin/img/skull.png">
</head>

<body id="bod" style="background-image: url('/HaeBin/img/bg-hallo.jpg');background-size: cover;background-repeat: no-repeat; background-color: #151719;">
    <div id="con" class="container my-5">
        <div class="jumbotron py-4" style="background-color: rgba(255,135,0,0.3);background-image: url('/HaeBin/img/pumpkin-512.png'); background-size:70px;">
            <span id="sign" class="text-light">
                <h1>
                Send a request to
                <small id="url" class="text-info">
                </small>
                </h1>
                <h1>
                    Refresh <button class="btn btn-success btn-lg" onclick="location.reload()"><i class="fas fa-sync-alt"></i> </button>
                    Clear Log <button class="btn btn-danger btn-lg" onclick="clean()"><i class="fas fa-times-circle"></i> </button>
                    Home <button class="btn btn-primary btn-lg" onclick="location.href='/HaeBin'"><i class="fas fa-home"></i> </button>
                </h1>
            </span>
        </div>
        <div id="list">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <audio id="scream" src="/HaeBin/img/nmh_scream1.mp3"></audio>
</body>

</html>

