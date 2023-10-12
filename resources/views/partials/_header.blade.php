<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gurus Fitness</title>
    <script src="https://kit.fontawesome.com/d5cb331474.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <h1 class="logo"><a href="index.php">Gurus <span style="color: #006d77;">Fitness</span></a></h1> @auth
            Welcome, {{ auth()->user()->name }}
        @endauth


        <ul class="main-nav">
            <li>
                <p><a href="index.php"><i class="fa-solid fa-house"></i>
                        <span> Home</span>
                    </a></p>
            </li>
            <!--
            <li><a href="booking.php"><i class="fa-regular fa-calendar-days"></i><span> Booking</span></a></li> -->
            <li><a><i class="fa-solid fa-dumbbell"></i><span>Trainers</span></a></li>
            <li><a href="#"><i class="fa-solid fa-newspaper"></i> <span>Classes</span></a></li>
            <li><a href="listing.php"><i class="fa-regular fa-id-card"></i> <span>Membership</span></a></li>
            <li><a href="aboutUs"><i class="fa-solid fa-circle-info"></i> <span>About Us</span></a></li>
            <li><a href="contactUs"><i class="fa-solid fa-phone-volume"></i> <span>Contact Us</span></a></li>
            @auth
                <li>
                    <a>
                        <form action="/logout" class="inline" method="Post" style="margin: 0; padding: 0;">
                            @csrf
                            <button type="submit" class="logout-button"
                                style="background: none;   font-size: 1em;                
                    font-weight: bold;border: none; padding: 0; color: #001427;  margin: 0;">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </a>
                </li>
            @else
                <li><a href="login"><i class="fa-solid fa-arrow-right-to-bracket"></i> <span>Login</span></a></li>
            @endauth



        </ul>
    </header>

</body>
<style>
    * {
        box-sizing: border-box;
    }


    html {
        scroll-behavior: smooth;
    }



    body {
        font-family: 'Montserrat', sans-serif;
        line-height: 1.6;
        margin: 0;
        min-height: 100vh;

    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }



    h2,
    h3,
    a,
    span {
        color: #001427;
    }

    a {
        text-decoration: none;
    }



    .logo {
        margin: 0;
        font-size: 1.45em;
        color: #001427;
    }

    .main-nav {
        margin-top: 5px;

    }

    .main-nav a {
        color: #001427;
        font-size: 1.5em;
        /* Increase the font size */
        font-weight: bold;
        /* Make the font bold */
    }

    .logo a,
    .main-nav a {
        padding: 10px 15px;
        text-transform: uppercase;
        text-align: center;
        display: block;
    }

    .main-nav a,
    .main-nav span {
        color: #001427;
        font-size: .99em;
    }


    .main-nav span:hover {
        color: #006d77;

    }



    .header {
        padding-top: .5em;
        padding-bottom: .5em;
        border: 1px solid #a2a2a2;
        background-color: #83c5be;
        -webkit-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }


    /* =================================
  Media Queries
==================================== */

    @media (max-width: 769px) {
        .main-nav span {
            display: none;
            /* Hide text */
        }

        .main-nav i {
            font-size: 18px !important;
        }

        .main-nav a:hover {
            color: #006d77;
            ;
        }

        .main-nav i {
            display: block !important;
        }

        .main-nav {
            display: flex;
            /* Display icons in a row */
            justify-content: space-around;
            /* Add space between icons */
        }
    }








    .header,
    .main-nav {
        display: flex;
    }

    .header {
        flex-direction: column;
        align-items: center;

        /* .header {
            width: 80%;
            margin: 0 auto;
            max-width: 1150px;
        } */
    }



    @media (min-width: 1199px) {
        .header {
            flex-direction: row;
            justify-content: space-between;
        }


    }
</style>

</html>
