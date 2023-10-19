<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking</title>
    <link rel="stylesheet" href="style.css" />
</head>
@include('partials._header')

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form class="sign-in-form" autocomplete="off" method="POST" action ="/membership"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="logo">

                            <h2>Gurus <span>Fitness</span></h2>
                        </div>

                        <div class="heading">
                            <h3>Book Your Plan Now </h3>
                        </div>
                        @if ($errors->any())
                            <div id="error-message" class="alert alert-danger"
                                style="text-align:center;color:red; font-weight:400">
                                <ul>
                                    <li><i class="fa-solid fa-triangle-exclamation" style="color: red;"></i>
                                        {{ $errors->first() }}</li>
                                </ul>
                            </div>
                        @endif
                        {{-- To Make This  Message Disappear --}}
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script>
                            setTimeout(function() {
                                $('#error-message').fadeOut('slow');
                            }, 2000);
                        </script>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="name" class="input-field" autocomplete="off"
                                    value="{{ old('name') }}" />
                                <label><i class="fa-solid fa-user"></i> Name</label>
                            </div>

                            <div class="input-wrap">
                                <input type="text" name="email" class="input-field" autocomplete="off"
                                    value="{{ old('email') }}" />
                                <label><i class="fa-solid fa-envelope"></i> Email</label>
                            </div>
                            <div class="input-wrap">
                                <input type="tel" name="phone" class="input-field" autocomplete="off"
                                    value="{{ old('phone') }}" />
                                <label><i class="fa-solid fa-phone"></i> Phone</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" name="planname" class="input-field" autocomplete="off"
                                    value="{{ old('planname') }}" />
                                <label><i class="fa-regular fa-id-card"></i> Plan Name</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" name="duration"class="input-field" autocomplete="off"
                                    value="{{ old('duration') }}" />
                                <label><i class="fa-solid fa-calendar-week"></i> Duration(in months)</label>
                            </div>

                            <input type="submit" value="Book" class="sign-btn" />


                        </div>
                    </form>


                </div>

                <div class="carousel">
                    <div class="images-wrapper">

                        <img src="{{ asset('images/gymmbg.jpg') }}"class="image img-1 show" alt="" />
                    </div>


                </div>
            </div>
        </div>
    </main>


</body>
@include('partials._footer')

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    *,
    *::before,
    *::after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body,
    input {
        font-family: "Poppins", sans-serif;
    }

    main {
        width: 100%;
        min-height: 100vh;
        overflow: hidden;
        background-color: #43878a;
        padding: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .box {
        position: relative;
        width: 100%;
        max-width: 1020px;
        height: 640px;
        background-color: #fff;
        border-radius: 3.3rem;
        box-shadow: 0 60px 40px -30px rgba(0, 0, 0, 0.27);
    }

    .inner-box {
        position: absolute;
        width: calc(100% - 4.1rem);
        height: calc(100% - 4.1rem);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .forms-wrap {
        position: absolute;
        height: 100%;
        width: 45%;
        top: 0;
        left: 0;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;
        transition: 0.8s ease-in-out;
    }

    form {
        max-width: 260px;
        width: 100%;
        margin: 0 auto;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        grid-column: 1 / 2;
        grid-row: 1 / 2;
        transition: opacity 0.02s 0.4s;
    }

    form.sign-up-form {
        opacity: 0;
        pointer-events: none;
    }

    .logo {
        display: flex;
        align-items: center;
    }


    .logo h2 {
        font-size: 1.9rem;
        margin-top: -9px;
        letter-spacing: -0.5px;
        color: rgb(0, 20, 39)
    }

    .logo span {
        color: rgb(0, 109, 119)
    }

    .heading h2 {
        font-size: 2.1rem;
        font-weight: 600;
        color: #151111;
    }





    .input-wrap {
        position: relative;
        height: 37px;
        margin-bottom: 2rem;
    }

    .input-field {
        position: absolute;
        width: 100%;
        height: 100%;
        background: none;
        border: none;
        outline: none;
        border-bottom: 1px solid #bbb;
        padding: 0;
        font-size: 0.95rem;
        color: #151111;
        transition: 0.4s;
    }

    label {
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0.95rem;
        color: #bbb;
        pointer-events: none;
        transition: 0.4s;
    }

    .input-field.active {
        border-bottom-color: #151111;
    }

    .input-field.active+label {
        font-size: 0.75rem;
        top: -2px;
    }

    .sign-btn {
        display: inline-block;
        width: 100%;
        height: 43px;
        background-color: #151111;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 0.8rem;
        font-size: 1.3rem;
        margin-bottom: 2rem;
        transition: 0.3s;
        font-weight: 600;
    }

    .sign-btn:hover {
        background-color: rgb(13, 87, 87)
    }



    main.sign-up-mode form.sign-in-form {
        opacity: 0;
        pointer-events: none;
    }

    main.sign-up-mode form.sign-up-form {
        opacity: 1;
        pointer-events: all;
    }

    main.sign-up-mode .forms-wrap {
        left: 55%;
    }

    main.sign-up-mode .carousel {
        left: 0%;
    }

    .carousel {
        position: absolute;
        height: 91%;
        width: 55%;
        left: 45%;
        top: 0;
        background-color: #ffffff;
        border-radius: 2rem;
        display: grid;
        grid-template-rows: auto 1fr;

        overflow: hidden;
        transition: 0.8s ease-in-out;
    }

    .images-wrapper {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;
    }

    .image {
        width: 100%;
        height: 100%;
        grid-column: 1/2;
        grid-row: 1/2;
        opacity: 0;
        transition: opacity 0.3s, transform 0.5s;
        display: cover;
    }





    .image.show {
        opacity: 1;
        transform: none;
    }



    @media (max-width: 850px) {
        .box {
            height: auto;
            max-width: 550px;
            overflow: hidden;
        }

        .inner-box {
            position: static;
            transform: none;
            width: revert;
            height: revert;
            padding: 2rem;
        }

        .forms-wrap {
            position: revert;
            width: 100%;
            height: auto;
        }

        form {
            max-width: revert;
            padding: 1.5rem 2.5rem 2rem;
            transition: transform 0.8s ease-in-out, opacity 0.45s linear;
        }

        .heading {
            margin: 2rem 0;
        }

        form.sign-up-form {
            transform: translateX(100%);
        }

        main.sign-up-mode form.sign-in-form {
            transform: translateX(-100%);
        }

        main.sign-up-mode form.sign-up-form {
            transform: translateX(0%);
        }

        .carousel {
            position: revert;
            height: 100%;
            width: 100%;
            padding: 3rem 2rem;
            display: flex;
        }

        .images-wrapper {
            display: none;
        }

        .text-slider {
            width: 100%;
        }
    }

    @media (max-width: 530px) {
        main {
            padding: 1rem;
        }

        .box {
            border-radius: 2rem;
        }

        .inner-box {
            padding: 1rem;
        }

        .carousel {
            padding: 1.5rem 1rem;
            border-radius: 1.6rem;
            display:
                none;
        }

        .text-wrap {
            margin-bottom: 1rem;
        }

        .text-group h2 {
            font-size: 1.2rem;
        }

        form {
            padding: 1rem 2rem 1.5rem;
        }
    }
</style>
<script>
    const inputs = document.querySelectorAll(".input-field");


    window.onload = function() {
        inputs.forEach((inp) => {
            inp.addEventListener("focus", () => {
                inp.classList.add("active");
            });
            inp.addEventListener("blur", () => {
                if (inp.value != "") {
                    inp.classList.add("active");
                } else {
                    inp.classList.remove("active");
                }
            });
            // Check if input has value on page load
            if (inp.value != "") {
                inp.classList.add("active");
            }
        });
    }
</script>

</html>
