<body>
    <header class="header">
        <h1 class="logo"><a href="index.php">United <span style="color: #006d77;">Limited</span></a></h1>
        <ul class="main-nav">
            <li>
                <p><a href="index.php"><i class="fa-solid fa-house"></i>
                        <span> Home</span>
                    </a></p>
            </li>
            <!-- 
            <li><a href="booking.php"><i class="fa-regular fa-calendar-days"></i><span> Booking</span></a></li> -->
            <li><a href="#"><i class="fa-solid fa-newspaper"></i> <span>News & Events</span></a></li>
            <li><a href="listing.php"><i class="fa-solid fa-clipboard-list"></i> <span>Listing</span></a></li>
            <li><a href="aboutUs.php"><i class="fa-solid fa-circle-info"></i> <span>About Us</span></a></li>
            <li><a href="contactUs.php"><i class="fa-solid fa-phone-volume"></i> <span>Contact Us</span></a></li>
            <li><a href="admin\index.php"><i class="fa-solid fa-right-to-bracket"></i> <span>Login</span></a></li>
        </ul>
    </header>
    <div class="footer">
        <div class="heading">
            <h2 style="align-text:center">United <span style="color: #006d77;">Limited</span></h2>
        </div>
        <main>
            {{$slot}}
        </main>
        <div class="content">
            <div class="services">
                <h2 class="sub-heading">Services</h2>
                <p><a href="aboutUs.php#services">Property Management</a></p>
                <p><a href="aboutUs.php#services">Residential Sales & Leasing</a></p>
                <p><a href="aboutUs.php#services">Real Estate Consulting</a></p>
                <p><a href="aboutUs.php#services">Brokerage Services</a></p>
                <p><a href="aboutUs.php#services">Real Estate
                        Appraisal</a> </p>
            </div>
            <div class="social-media1">
                <h2 class="sub-heading">Quick Links</h2>
                <p>
                    <a href="index.php">Home</a>
                </p>
                <p>
                    <a href="aboutUs.php">About Us</a>
                </p>
                <p>
                    <a href="booking.php">Book Now</a>
                </p>
                <p>
                    <a href="listing.php">Listing</a>
                </p>
                <p>
                    <a href="#">News And Events</a>
                </p>


            </div>
            <div class="links">
                <h2 class="sub-heading">Contact</h2>
                <p>Bharatpur-4, Chitwan, Nepal</p>
                <p>Phone: +977 9845911212</p>
                <p>Email: <a href="mailto:united.limited@gmail.com">united.limited@gmail.com</a></p>
                <p>Website: <a href="http://www.unitedlimited.com.np">www.unitedlimited.com.np</a></p>

                <p><a href="" class="icon"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-x-twitter fa-2xl"></i></a>
                </p>
            </div>
        </div>
        <footer>

            All rights reserved © 2023 United Limited
        </footer>
    </div>
</body>
<style>
    /* For Footer */
    html {
        height: 100%;
        /* Ensure the HTML element takes the full viewport height */
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        /* Remove default margin */
        padding: 0;
        /* Remove default padding */
    }

    .icon {
        margin-right: 20px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .sub-heading {
        padding: 10px 15px;
        text-transform: uppercase;
        text-align: center;
        display: block;
        font-family: 'Montserrat', sans-serif;
    }

    .footer {
        flex-shrink: 0;
        background-color: #83c5be;
        color: #4a4e69;
        width: 100%;
        bottom: 0;
        left: 0;
        margin-top: auto;
        /* Push the footer to the bottom using 'auto' margin */
        border: 1px solid #a2a2a2;
        -webkit-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }

    .footer .heading {
        color: #6f1d1b;
        max-width: 1010px;
        width: 90%;
        text-transform: uppercase;
        margin: 0 auto;
        margin-bottom: 3rem;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        font-weight: 1000px;
    }

    .footer .content {
        display: flex;
        flex: 1 0 auto;
        justify-content: space-evenly;
        margin: 1.5rem;
    }

    .footer .content p {
        margin-bottom: 1.3rem;
    }

    .footer .content a {
        text-decoration: none;
        color: #4a4e69;
    }

    .footer .content a:hover {


        color: #006d77 !important;
    }

    .footer .content h4 {
        margin-bottom: 1.3rem;
        font-size: 19px;
    }

    footer {
        text-align: center;
        padding-bottom: 20px
    }

    footer hr {
        margin: 2rem 0;
    }

    @media (max-width: 767px) {
        .footer .content {
            display: flex;
            flex-direction: column;
            font-size: 14px;
        }

        .footer {
            position: unset;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {

        .footer .content,
        .footer {
            font-size: 14px;
        }
    }

    @media (orientation: landscape) and (max-height: 500px) {
        .footer {
            position: unset;
        }
    }
    /* For Header */
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