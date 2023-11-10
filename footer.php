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
</style>

<body>
    <footer class="footer">
        <div class="content">
            <div class="text1">
                <a>Home</a>
                <a>Over ons</a>
                <a>Beleidsplan</a>
                <a>Financiën</a>
                <a>Contact</a>
            </div>

            <div class="text2">
                <a>Contact:</a><br>
                <a></a>
                <a></a>
            </div>
        </div>
        <div class="copyright">
            <small>&copy; Copyright 2023, Ensarcamii</small>
        </div>
    </footer>
</body>

</html>