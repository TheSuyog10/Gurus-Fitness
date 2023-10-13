<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a48f842f69.js" crossorigin="anonymous"></script>
    <title>Forum</title>
</head>

<body>
    @include('partials._header')

    <a href="postforum">

        <div class="searchbar">
            <div class="searchbar-wrapper">
                <div class="user-info">
                    @auth
                        <p style="font-size: 20px; font-weight: 400; text-align: center;">
                            <i class="fa-solid fa-circle-user" style="font-size: 20px;"></i>
                            {{ auth()->user()->name }}
                        </p>
                    @endauth
                </div>
                <div class="searchbar-left">
                    <div class="search-icon-wrapper">
                        <span class="search-icon searchbar-icon">

                        </span>
                    </div>
                </div>

                <div class="searchbar-center">
                    <div class="searchbar-input-spacer"></div>

                    <input type="text" class="searchbar-input" maxlength="2048" name="q" autocapitalize="off"
                        autocomplete="off" title="Search" role="combobox" placeholder="Whats's on your Mind" readonly>
                </div>

                <div class="searchbar-right">
                    <i class="fas fa-paper-plane"></i>
                </div>
            </div>
        </div>
    </a>
    @foreach ($forum as $forums)
        <div class="container">

            <h1>
                <p style="font-size: 20px; font-weight:800px;"> <i class="fa-solid fa-circle-user"
                        style="font-size:20px;"></i> {{ $forums->name }}
                </p>
            </h1>
            <p style="font-size: 20px; font-weight:400px; margin:8px 40px;">{{ $forums->description }}</p>

            <img src="{{ asset('storage/' . $forums->image) }}" alt="">




        </div>
    @endforeach

    <x-flash-message />
</body>
<style>
    body {
        background-color: #4d787b;
    }

    .user-info {
        text-align: center;
        font-size: 20px;
        font-weight: 800;
    }

    .user-info p {
        display: inline;
        /* Display it inline with the search bar */
    }

    .container {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        border-radius: 19px;
        background: #638a8c;
        box-shadow: inset 5px 5px 10px #608688,
            inset -5px -5px 10px #668e90;

    }

    .container img {
        width: 70%;
        height: ;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius: 20px;
    }

    h1 {
        font-size: 24px;
        color: #333;
    }


    p {
        color: black;
        font-size: 16px;
    }

    #description {
        font-size: 18px;
        margin-top: 20px;
    }

    button {
        border: none;
        color: brown;
        font-weight: 600;
        background-image: linear-gradient(30deg, #a9fff5, #7eafb2);
        border-radius: 20px;
        background-size: 100% auto;
        font-family: inherit;
        font-size: 17px;
        padding: 0.6em 1.5em;
    }

    button:hover {
        background-position: right center;
        background-size: 200% auto;
        -webkit-animation: pulse 2s infinite;
        animation: pulse512 1.5s infinite;
    }

    .searchbar {
        font-size: 14px;
        font-family: arial, sans-serif;
        color: #202124;
        display: flex;
        z-index: 3;
        height: 44px;
        background: white;
        border: 1px solid #dfe1e5;
        box-shadow: none;
        border-radius: 24px;
        margin: 20px auto;
        width: 600px;
        max-width: 100%;
        /* Make it responsive to the viewport width */
        min-width: 200px;
    }

    .searchbar:hover {
        box-shadow: 0 1px 6px rgb(32 33 36 / 28%);
        border-color: rgba(223, 225, 229, 0);
    }

    .searchbar-wrapper {
        flex: 1;
        display: flex;
        padding: 5px 8px 0 14px;
    }

    .searchbar-left {
        font-size: 14px;
        font-family: arial, sans-serif;
        color: #202124;
        display: flex;
        align-items: center;
        padding-right: 13px;
        margin-top: -5px;
    }

    .search-icon-wrapper {
        margin: auto;
    }

    .search-icon {
        margin-top: 3px;
        color: #9aa0a6;
        height: 20px;
        line-height: 20px;
        width: 20px;
    }

    .searchbar-icon {
        display: inline-block;
        fill: currentColor;
        height: 24px;
        line-height: 24px;
        position: relative;
        width: 24px;
    }

    .searchbar-center {
        display: flex;
        flex: 1;
        flex-wrap: wrap;
    }

    .searchbar-input-spacer {
        color: transparent;
        flex: 100%;
        white-space: pre;
        height: 34px;
        font-size: 16px;
    }

    .searchbar-input {
        background-color: transparent;
        border: none;
        margin: 0;
        padding: 0;
        color: rgba(0, 0, 0, .87);
        word-wrap: break-word;
        outline: none;
        display: flex;
        flex: 100%;
        margin-top: -37px;
        height: 34px;
        font-size: 16px;
        max-width: 100%;
        width: 100%;
    }

    .searchbar-right {
        font-size: 14px;
        font-family: arial, sans-serif;
        color: #202124;
        display: flex;
        align-items: center;
        padding-right: 13px;
        margin-top: -5px;
    }

    .searchbar-clear-icon {
        margin-right: 12px;
    }

    .voice-search {
        flex: 1 0 auto;
        display: flex;
        cursor: pointer;
        align-items: center;
        border: 0;
        background: transparent;
        outline: none;
        padding: 0 8px;
        width: 2.8em;
    }

    /* Add media queries for responsiveness */
    @media screen and (max-width: 768px) {
        .searchbar {
            width: 90%;
            /* Adjust the width for smaller screens */
        }

        .searchbar-input {
            font-size: 14px;
            /* Adjust font size for smaller screens */
        }
    }

    @keyframes pulse512 {
        0% {
            box-shadow: 0 0 0 0 #05bada66;
        }

        70% {
            box-shadow: 0 0 0 10px rgb(218 103 68 / 0%);
        }

        100% {
            box-shadow: 0 0 0 0 rgb(218 103 68 / 0%);
        }
    }

    /* Add animation CSS class */
    .fadeIn {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>
<script>
    // JavaScript to add animation when the page loads
    window.onload = function() {
        const description = document.getElementById("description");
        description.classList.add("fadeIn");
    };
</script>
@include('partials._footer')

</html>
