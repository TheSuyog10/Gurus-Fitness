<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepals -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Post Forum</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

@include('partials._header')

<body>
    <div class="body">
        <div class="containers">
            <div class="wrapper">
                <section class="posts">
                    <header>Create Post</header>
                    <form action="/forum" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div id="error-message" class="alert alert-danger"
                                style="text-align:center;color:rgb(241, 19, 19); font-weight:400">
                                <ul>
                                    <li><i class="fa-solid fa-triangle-exclamation" style="color: #de3131;"></i>
                                        {{ $errors->first() }}</li>
                                </ul>
                            </div>
                        @endif
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script>
                            setTimeout(function() {
                                $('#error-message').fadeOut('slow');
                            }, 2000);
                        </script>
                        <div class="contents">
                            <div class="details">
                                <p style="font-size: 20px; font-weight:800px;"> <i class="fa-solid fa-circle-user"
                                        style="font-size:20px;"></i> @auth
                                        {{ auth()->user()->name }}
                                    @endauth
                                </p>
                            </div>
                        </div>
                        <textarea name="description" placeholder="What's on your mind, @auth {{ auth()->user()->name }} @endauth"
                            spellcheck="false" required></textarea>
                        <input type="hidden" name="name" id=""
                            value="@auth {{ auth()->user()->name }} @endauth">
                        <div class="options">
                            <label for="image" style="margin-right:10px;">
                                <i class="fa fa-cloud-upload"></i> Upload
                            </label>
                            <br>
                            <input id="image" name="image" type="file" title="No image chosen" />
                        </div>
                        <button>Post</button>
                    </form>
                </section>
            </div>

            <script>
                const container = document.querySelector(".container"),
                    privacy = container.querySelector(".posts .privacy"),
                    arrowBack = container.querySelector(".audience .arrow-back");

                privacy.addEventListener("click", () => {
                    container.classList.add("active");
                });

                arrowBack.addEventListener("click", () => {
                    container.classList.remove("active");
                });
            </script>
        </div>
    </div>
</body>
@include('partials._footer')

<style>
    /* Import Google Font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    * {
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        min-height: 100vh;
        background-color: #4d787b;
        height: 180vh;
    }

    .body {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    ::selection {
        color: #fff;
        background: #1a81ff;
    }

    .containers {
        margin: 150px;
        width: 500px;
        height: 480px;
        overflow: hidden;
        background: #fff;
        border-radius: 10px;
        transition: height 0.2s ease;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
    }

    .container.active {
        height: 590px;
    }

    .container .wrapper {
        width: 3000px;
        display: flex;
    }

    .container .wrapper section {
        width: 500px;
        background: #fff;
    }

    .container img {
        cursor: pointer;
    }

    .container .posts {
        transition: margin-left 0.18s ease;
    }

    .container.active .posts {
        margin-left: -500px;
    }

    .posts header {
        font-size: 22px;
        font-weight: 600;
        padding: 17px 0;
        text-align: center;
        border-bottom: 1px solid #bfbfbf;
    }

    .posts form {
        margin: 20px 25px;
    }

    .posts form .contents {
        display: flex;
        align-items: center;
    }

    .posts form .contents img {
        cursor: default;
        max-width: 52px;
    }

    .posts form .contents .details {
        margin: -3px 0 0 12px;
    }

    form .contents .details p {
        font-size: 17px;
        font-weight: 500;
    }

    form :where(textarea, button) {
        width: 100%;
        outline: none;
        border: none;
    }

    form textarea {
        resize: none;
        font-size: 18px;
        margin-top: 30px;
        min-height: 100px;
    }

    form textarea::placeholder {
        color: #858585;
    }

    form textarea:focus::placeholder {
        color: #b3b3b3;
    }

    form :where(.theme-emoji, .options) {
        display: flex;
        align-items: center;
        justify-contents: space-between;
    }

    .theme-emoji img:last-child {
        max-width: 24px;
    }

    form .options {
        height: 57px;
        margin: 15px 0;
        padding: 0 15px;
        border-radius: 7px;
        border: 1px solid #B9B9B9;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    form .options {
        display: flex;
        align-items: center;
        justify-contents: flex-end;
    }

    form .options p {
        color: #595959;
        font-size: 15px;
        font-weight: 500;
        cursor: default;
    }

    form button {
        height: 53px;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        border-radius: 7px;
        background: #e2e5e9;
        transition: all 0.3s ease;
    }

    form textarea:valid~button {
        cursor: pointer;
        background: #4599FF;
    }

    form textarea:valid~button:hover {
        background: #1a81ff;
    }

    .container .audience {
        opacity: 0;
        transition: opacity 0.12s ease;
    }

    .container.active .audience {
        opacity: 1;
    }

    @media screen and (max-width: 768px) {
        .containers {
            width: 90%;
            margin: 20px 50px
        }
</style>


</html>
