<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>


    @include('partials._header');
    <x-flash-message />
    <header class="section__container header__container">
        <div class="header__content">
            <span class="bg__blur"></span>
            <span class="bg__blur header__blur"></span>
            <h4>BEST FITNESS IN THE TOWN</h4>
            <h1><span>MAKE</span> YOUR BODY SHAPE</h1>
            <p>
                Unleash your potential and embark on a journey towards a stronger,
                fitter, and more confident you. Sign up for 'Make Your Body Shape' now
                and witness the incredible transformation your body is capable of!
            </p>
            <a href="membership" class="btn">Get Started</a>
        </div>
        <div class="header__image">
            <img src="{{ asset('images/header4.png') }}" alt="header" />
        </div>
    </header>

    <section class="section__container explore__container">
        <div class="explore__header">
            <h2 class="section__header">EXPLORE OUR PROGRAM</h2>
            <div class="explore__nav">
                <span><i class="ri-arrow-left-line"></i></span>
                <span><i class="ri-arrow-right-line"></i></span>
            </div>
        </div>
        <div class="explore__grid">
            <div class="explore__card">
                <span><i class="ri-boxing-fill"></i></span>
                <h4>Strength</h4>
                <p>
                    Embrace the essence of strength as we delve into its various
                    dimensions physical, mental, and emotional.
                </p>
                <a href="membership">Join Now <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="explore__card">
                <span><i class="ri-heart-pulse-fill"></i></span>
                <h4>Physical Fitness</h4>
                <p>
                    It encompasses a range of activities that improve health, strength,
                    flexibility, and overall well-being.
                </p>
                <a href="membership">Join Now <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="explore__card">
                <span><i class="ri-run-line"></i></span>
                <h4>Fat Lose</h4>
                <p>
                    Through a combination of workout routines and expert guidance, we'll
                    empower you to reach your goals.
                </p>
                <a href="membership">Join Now <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="explore__card">
                <span><i class="ri-shopping-basket-fill"></i></span>
                <h4>Weight Gain</h4>
                <p>
                    Designed for individuals, our program offers an effective approach
                    to gaining weight in a sustainable manner.
                </p>
                <a href="membership">Join Now <i class="ri-arrow-right-line"></i></a>
            </div>

        </div>
    </section>

    <section class="section__container class__container">
        <div class="class__image">
            <span class="bg__blur"></span>
            <img src="{{ asset('images/class-1.jpg') }}" alt="class" class="class__img-1" />
            <img src="{{ asset('images/class-2.jpg') }}" alt="class" class="class__img-2" />
        </div>
        <div class="class__content">
            <h2 class="section__header">THE CLASS YOU WILL GET HERE</h2>
            <p>
                Led by our team of expert and motivational instructors, "The Class You
                Will Get Here" is a high-energy, results-driven session that combines
                a perfect blend of cardio, strength training, and functional
                exercises. Each class is carefully curated to keep you engaged and
                challenged, ensuring you never hit a plateau in your fitness
                endeavors.
            </p>
            <a href="membership" class="btn">Book A Class</a>
        </div>
    </section>



</body>


@include('partials._footer')

<style>
    html,
    body {
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
            border-radius: 100px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #3e5c76;
            border-radius: 100px;
        }
    }

    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

    :root {
        --primary-color: rgb(77, 123, 123);
        --primary-color-light: #588b8b;
        --primary-color-extra-light: #67a3a3;
        --secondary-color: #003d50;
        --secondary-color-dark: #264653;
        --text-light: #d1d5db;
        --white: #ffffff;
        --max-width: 1200px;
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .section__container {
        max-width: var(--max-width);
        margin: auto;
        padding: 5rem 1rem;
    }

    .section__header {
        margin-bottom: 1rem;
        font-size: 2.25rem;
        font-weight: 600;
        text-align: center;
        color: var(--white);
    }

    .section__subheader {
        max-width: 600px;
        margin: auto;
        text-align: center;
        color: var(--text-light);
    }

    .btn {
        padding: 1rem 2rem;
        outline: none;
        border: none;
        font-size: 1rem;
        color: var(--white);
        background-color: var(--secondary-color);
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        background-color: var(--secondary-color-dark);
    }

    img {
        width: 100%;
        display: flex;
    }

    a {
        text-decoration: none;
    }

    .bg__blur {
        position: absolute;
        box-shadow: 0 0 1000px 50px var(--secondary-color);
        z-index: -1;
    }

    body {
        font-family: "Poppins", sans-serif;
        background-color: var(--primary-color);
    }

    .header__container {
        position: relative;
        padding-top: 2rem;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
        gap: 2rem;
    }

    .header__container::before {
        content: "FITNESS";
        position: absolute;
        bottom: 5rem;
        right: 20rem;
        font-size: 10rem;
        font-weight: 700;
        line-height: 7rem;
        color: var(--white);
        opacity: 0.05;
        z-index: -1;
    }

    .header__blur {
        bottom: 5rem;
        right: 0;
    }

    .header__content h4 {
        margin-bottom: 1rem;
        font-size: 1rem;
        font-weight: 600;
        color: var(--secondary-color);
    }

    .header__content h1 {
        margin-bottom: 1rem;
        font-size: 5rem;
        font-weight: 700;
        line-height: 6rem;
        color: var(--white);
    }

    .header__content h1 span {
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke: 1px var(--white);
    }

    .header__content p {
        margin-bottom: 2rem;
        color: var(--text-light);
    }

    .header__image {
        position: relative;
    }

    .header__image::before {
        content: "o";
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        font-size: 40rem;
        font-weight: 400;
        line-height: 20rem;
        color: var(--secondary-color);
        opacity: 0.1;
        z-index: -1;
    }

    .header__image img {
        max-width: 350px;
        margin: auto;
    }

    .explore__header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
    }

    .explore__nav {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    .explore__nav span {
        padding: 0 6px;
        font-size: 1.5rem;
        color: var(--white);
        border: 2px solid var(--white);
        border-radius: 100%;
        cursor: pointer;
        transition: 0.3s;
    }

    .explore__nav span:hover {
        color: var(--secondary-color);
        border-color: var(--secondary-color);
    }

    .explore__grid {
        margin-top: 4rem;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 2rem;
    }

    .explore__card {
        padding: 1rem;
        background-color: var(--primary-color-light);
        border: 2px solid transparent;
        border-radius: 10px;
        transition: 0.3s;
    }

    .explore__card:hover {
        background-color: var(--primary-color-extra-light);
        border-color: var(--secondary-color);
    }

    .explore__card span {
        display: inline-block;
        padding: 2px 9px;
        margin-bottom: 1rem;
        font-size: 1.75rem;
        color: var(--white);
        background-color: var(--secondary-color-dark);
        border-radius: 5px;
    }

    .explore__card h4 {
        margin-bottom: 0.5rem;
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--white);
    }

    .explore__card p {
        margin-bottom: 1rem;
        color: var(--text-light);
    }

    .explore__card a {
        color: var(--white);
        transition: 0.3s;
    }

    .explore__card a:hover {
        color: var(--secondary-color);
    }

    .class__container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }

    .class__image {
        position: relative;
    }

    .class__image .class__img-1 {
        position: absolute;
        right: 0;
        top: 0;
        max-width: 500px;
        border-radius: 10px;
    }

    .class__image .class__img-2 {
        position: absolute;
        left: 0;
        bottom: 0;
        max-width: 300px;
        border-radius: 10px;
    }

    .class__content {
        padding: 2rem 0;
    }

    .class__content .section__header {
        text-align: left;
        max-width: 400px;
    }

    .class__content p {
        margin-bottom: 4rem;
        color: var(--text-light);
    }

    @media (width < 900px) {

        .header__container {
            grid-template-columns: repeat(1, 1fr);
        }

        .header__image {
            grid-area: 1/1/2/2;
        }

        .explore__grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .class__container {
            grid-template-columns: repeat(1, 1fr);
        }

        .class__image {
            min-height: 500px;
        }


    }

    @media (width < 600px) {
        .explore__header {
            flex-direction: column;
        }

        .explore__grid {
            grid-template-columns: repeat(1, 1fr);
        }


    }
</style>

</html>
