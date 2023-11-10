<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
    <title>Footer</title>
</head>
<style>
    footer {
        border-top: darkgreen solid 4px;
        background-color: green;
        color: white;
        margin: 0;
        font-weight: lighter;
    }

    .text1 {
        display: flex;
        flex-direction: column;
    }

    .text2 {
        display: flex;
        flex-direction: column;
    }

    .content {
        display: flex;
        justify-content: space-around;
        padding-top: 20px;
    }

    .copyright {
        padding-top: 20px;
        display: flex;
        justify-content: center;
    }

    .afooter {
        position: relative;
        color: #000;
        text-decoration: none;
    }

    .afooter:hover {
        color: black;
        cursor: pointer;
    }

    .afooter::before {
        content: "";
        position: absolute;
        display: block;
        width: 100%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: black;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .afooter:hover::before {
        transform: scaleX(1);
    }

    .afooter {
        color: white;
    }
</style>

<body>
    <footer class="footer">
        <div class="content">
            <div class="text1">
                <a class="afooter">Home</a>
                <a class="afooter">Over ons</a>
                <a class="afooter">Beleidsplan</a>
                <a class="afooter">Financiën</a>
                <a class="afooter">Contact</a>
            </div>

            <div class="text2">
                <a class="Fcontact">Contact:</a><br>
                <a>Stalpearstraat 5, <br>1813 CG Alkmaar</a><br>
                <a>Tel: 06-24667600</a>
            </div>
        </div>
        <div class="copyright">
            <small>&copy; Copyright 2023, Ensarcamii</small>
        </div>
    </footer>
</body>

</html>