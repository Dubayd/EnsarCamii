<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <style>
    .topnav {
      overflow: hidden;
      border-bottom: green solid 5px;
      z-index: 1;
      background-color: white;
      position: fixed;
      width: 100%;
    }

    .topnav a {
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      font-size: 17px;
      text-decoration-line: none;
    }


    .topnav .icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
      }

      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav {
        overflow: hidden;
        border-bottom: green solid 5px;
        z-index: 1;
        background-color: white;
        position: fixed;
        width: 100%;
      }

      .topnav.responsive {
        position: fixed;
        width: 100%;
      }

      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }

      img {
        width: 125px;
        margin: none;
        position: absolute;
        padding-top: 2px;
      }

      .center {
        display: flex;
        justify-content: center;
      }
    }

    @media screen and (min-width: 600px) {

      img {
        width: 125px;
        margin: none;
        position: absolute;
        padding-top: 2px;
      }

      .center {
        display: block;
        float: right;
        padding-right: 150px;
      }
    }

    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }

    .sticky+.content {
      padding-top: 60px;
    }

    .Anav:hover {
      background-color: green;
      color: white;
      transition: background-color 0.3s ease;
    }

    .Anav {
      font-family: "roboto" "Sans-Serif";
      font-weight: bolder;
      background-color: white;
      
    }
  </style>
</head>

<body>

  <div class="topnav" id="myTopnav">
    <a class="Anav" href="index.php" class="active">Home</a>
    <a class="Anav" href="">Over ons</a>
    <a class="Anav" href="Beleidsplan.php">Beleidsplan</a>
    <a class="Anav" href="Financiën.php">Financiën</a>
    <a class="Anav" href="contact.php">Contact</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i></a>
  </div>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.classList.contains("responsive")) {
        x.classList.remove("responsive"); // Verwijder de class "responsive"
        x.classList.remove("sticky"); // Verwijder de class "sticky"
      } else {
        x.classList.add("responsive"); // Voeg de class "responsive" toe
        x.classList.add("sticky"); // Voeg de class "sticky" toe
      }
    }

    window.onscroll = function() {
      myFunction1();
    };

    var navbar = document.getElementById("myTopnav");
    var sticky = navbar.offsetTop;

    function myFunction1() {
      if (window.innerWidth <= 600 && navbar.classList.contains("responsive")) {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky");
        } else {
          navbar.classList.remove("sticky");
        }
      } else {
        navbar.classList.add("sticky");
      }
    }
  </script>

</body>

</html>