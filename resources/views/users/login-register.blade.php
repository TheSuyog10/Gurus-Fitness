<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />


    <script src="https://kit.fontawesome.com/d5cb331474.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
@include('partials._header')
    <main>
        <div class="contents">
            @if(request()->has('message'))
    <div class="alert-message">
        {{ request()->get('message') }}
    </div>
    <script>
        $(document).ready(function() {
            $(".alert-message").delay(2000).fadeOut("slow");
        });
    </script>
    <style>.alert-message {
        position: absolute;
        top: 10%;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        display: flex;
        justify-content: center;
        background-color: #50ff50f9;
        color: rgba(8, 6, 6, 0.982);
        padding: 10px 40px;
        font-weight: bold;
        border-radius: 20px;
        
    }</style>
@endif
            <img src="..\assets\listingimages\house.jpg" alt="">
            <div style="position:absolute"></div>
            <H1 style="left:left;">Registor to Buy Property @auth
                <li>
                  <span class="font-bold uppercase">Welcom {{auth()->user()->name}}</span>
                </li> @endauth</H1>
        </div>
        
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form method="post" autocomplete="off" class="sign-in-form" action="/users/authenticate">
                        <div class="logo">
                            <img src="../assets\images\logo.png" alt="" />
                            <h4>Gurus<span id="span"> Fitness</span></h4>
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registred yet?</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>
                        @csrf
                    
                    
                    @if ($errors->any())
                    <div id="error-messages" class="alert alert-danger" style="text-align:center;color:red; font-weight:600">
                        <ul>
                            <li><i class="fa-solid fa-triangle-exclamation" style="color: #red;"></i> {{ $errors->first()}}</li> 
                        </ul>
                    </div>

                @endif
                <script>setTimeout(function() {
                    $('#error-messages').fadeOut('slow');
                }, 2000);
            </script>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="email" id="email" class="input-field" value="{{old('email')}}"
                                    autocomplete="off" />
                                <label><i class="fa-solid fa-at"></i> Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password"  class="input-field" name="password"
                                    autocomplete="off" />
                                <label><i class="fas fa-lock"></i> Password</label>
                            </div>

                            <input type="submit" name="signIn" value="Sign In" class="sign-btn" />


                        </div>
                    </form>
                   
                    <form id="signupForm" action="/users" method="POST"autocomplete="off" class="sign-up-form"  >
                        @csrf
                        <div class="logo">
                            <img src="../assets\images\logo.png " alt="Gurus Fitness" />
                            <h4>Gurus<span id="span"> Fitness</span></h4>
                        </div>

                        <div class="heading">
                            <h2>Get Started
                            </h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in </a>
                            <div id="error-message"> 
                            </div>
                        </div>
                        
                    
                
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text"  name="name" id="name" class="input-field" value="{{old('name')}}"
                                    autocomplete="off" />
                                <label><i class="fas fa-user-tie"></i> Name</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" name="email" id="email" class="input-field" value="{{old('email')}}"
                                    autocomplete="off" />
                                <label><i class="fa-solid fa-at"></i> Email</label>
                            </div>

                            

                            <div class="input-wrap">
                                <input type="password" name="password" id="password" class="input-field" value="{{old('password')}}"
                                    autocomplete="off" />
                                <label><i class="fas fa-lock"></i> Password</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="input-field"
                                    autocomplete="off" />
                                <label><i class="fas fa-lock"></i> Confirm Password</label>
                            </div>


                            <input type="submit" id="signupBtn" name="signUp" value="Sign Up" class="sign-btn" />

                            <p class="text">
                                By signing up, I
                                agree to the
                                Terms of Services and
                                Privacy Policy
                            </p>
                        </div>
                    </form>
                    <script>
                    $(document).ready(function() {
                        $('#signupForm').on('submit', function(e) {
                            e.preventDefault();
                    
                            $.ajax({
                                url: '/users',
                                method: 'post',
                                data: $(this).serialize(),
                                success: function(response) {
                                    

                                    // Handle successful validation and form submission here
                                    window.location.href = '/'
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    // Handle failed validation here
                                    if(jqXHR.status === 422) {
                                        var errors = jqXHR.responseJSON.errors;
                                        // Display errors on your form
                                        for(var error in errors) {
                                            $('#error-message').html('<div class="alert alert-danger" style="text-align:center;color:red; font-weight:600"><i class="fa-solid fa-triangle-exclamation" style="color: red;"></i> ' + errors[error][0] + '</div>').fadeIn();
                                            setTimeout(function() {
                                                $('#error-message').fadeOut('slow');
                                            }, 2000);
                                        }
                                    }
                                }
                            });
                        });
                    });
                    
                    </script>
                                
                </div>

                <!-- <div class="carousel">
                    <div class="images-wrapper">
                        <img src="./img/image1.png" class="image img-1 show" alt="" />
                        <img src="./img/image2.png" class="image img-2" alt="" />
                        <img src="./img/image3.png" class="image img-3" alt="" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Create your own courses</h2>
                                <h2>Customize as you like</h2>
                                <h2>Invite students to your class</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

    </main>

    <!-- Javascript file -->

    <script>const inputs = document.querySelectorAll(".input-field");
        const toggle_btn = document.querySelectorAll(".toggle");
        const main = document.querySelector("main");
        const bullets = document.querySelectorAll(".bullets span");
        const images = document.querySelectorAll(".image");
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


    

        toggle_btn.forEach((btn) => {
            btn.addEventListener("click", () => {
                main.classList.toggle("sign-up-mode");
            });
        });

       
    </script>
@include('partials._footer')
</body>

</html>