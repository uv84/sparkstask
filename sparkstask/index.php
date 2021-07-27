<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include 'navbar.php';
    ?>


    <section id="title-section">
        <div class="container-fluid">
            <div class="title">
                <div class="first-line">
                    Welcome to SPARK BANK.
                </div>
                <div class="sub-line">
                    Making Your Banking Experience Simply the Best...
                </div>
            </div>
        </div>
    </section>

    <section id="features">
        <div class="row">
            <div class="features-box col-sm-4">
                <div class="img center"></div>
                <a href="transactionhistory.php"><button type="button">Transaction History</button></a>
            </div>
            <div class="features-box col-sm-4">
                <div class="img2 center"></div>
                <a href="transfermoney.php"><button type="button">Transfer Money</button></a>
            </div>
            <div class="features-box col-sm-4">
                <div class="img3 center"></div>
                <a href="viewusers.php"><button type="button">View Users</button></a>
            </div>
        </div>
    </section>

    <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Urval Chikhale</b> <br> The Sparks Foundation</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</body>

</html>