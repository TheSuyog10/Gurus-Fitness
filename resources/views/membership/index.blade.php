<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membership</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
</head>
@include('partials._header')

<body>
    <section class="section__container price__container">
        <h2 class="section__header">OUR PRICING PLAN</h2>
        <p class="section__subheader">
            Our pricing plan comes with various membership tiers, each tailored to cater to different preferences and
            fitness aspirations. All memberships are applied for 1 month.

        </p>
        <div class="price__grid">
            <div class="price__card">
                <div class="price__card__content">
                    <h4>Basic Plan</h4>
                    <h3>Rs.3000</h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Access to gym
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        At home workouts
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Nutritional guidance
                    </p>
                </div>
                <a href="booking" class="btn price__btn">Join Now</a>
            </div>
            <div class="price__card">
                <div class="price__card__content">
                    <h4>Zumbastic Membership</h4>
                    <h3>Rs. 5,000</h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Basic Gym
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        4 Zumba classes / week
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Community support
                    </p>
                </div>
                <a href="booking" class="btn price__btn">Join Now</a>
            </div>
            <div class="price__card">
                <div class="price__card__content">
                    <h4>Yogastic Membership</h4>
                    <h3>Rs. 5,000</h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Full Gym Access
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        4 Yoga classes
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Guided Yoga
                    </p>

                </div>
                <a href="booking" class="btn price__btn">Join Now</a>
            </div>
            <div class="price__card">
                <div class="price__card__content">
                    <h4>Sauna/Steam (per use)</h4>
                    <h3>Rs. 1,500</h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Relaxation & Detox< </p>
                            <p>
                                <i class="ri-checkbox-circle-line"></i>
                                Rejuvenate Body & Mind
                            </p>
                            <p>
                                <i class="ri-checkbox-circle-line"></i>
                                Pay Per Use
                            </p>

                </div>
                <a href="booking" class="btn price__btn">Join Now</a>
            </div>
            <div class="price__card">
                <div class="price__card__content">
                    <h4>Platinum Membership</h4>
                    <h3>Rs. 12,000</h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Unlimited Access< </p>
                            <p>
                                <i class="ri-checkbox-circle-line"></i>
                                Priority Booking
                            </p>
                            <p>
                                <i class="ri-checkbox-circle-line"></i>
                                Exclusive Events
                            </p>

                </div>
                <a href="booking" class="btn price__btn">Join Now</a>
            </div>
            <div class="price__card">
                <div class="price__card__content">
                    <h4>Private Trainer</h4>
                    <h3>Rs. 10,000</h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Professional Trainer< </p>
                            <p>
                                <i class="ri-checkbox-circle-line"></i>
                                One-on-one Training
                            </p>
                            <p>
                                <i class="ri-checkbox-circle-line"></i>
                                Progress Tracking
                            </p>
                            <p>
                                <i class="ri-checkbox-circle-line"></i>
                                Customized Plans
                            </p>

                </div>
                <a href="booking" class="btn price__btn">Join Now</a>
            </div>
        </div>
    </section>

    <section class="review">
        <div class="section__container review__container">
            <span><i class="ri-double-quotes-r"></i></span>
            <div class="review__content">
                <h4>MEMBER REVIEW</h4>
                <p>
                    What truly sets this gym apart is their expert team of trainers. The
                    trainers are knowledgeable, approachable, and genuinely invested in
                    helping members achieve their fitness goals. They take the time to
                    understand individual needs and create personalized workout plans,
                    ensuring maximum results and safety.
                </p>
                <div class="review__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                </div>
                <div class="review__footer">
                    <div class="review__member">
                        <img src="{{ asset('images/member.png') }}" alt="member" />
                        <div class="review__member__details">
                            <h4>Suyog Gautam</h4>
                            <p>Student</p>
                        </div>
                    </div>
                    <div class="review__nav">
                        <span><i class="ri-arrow-left-line"></i></span>
                        <span><i class="ri-arrow-right-line"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
@include('partials._footer')
<style>
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







    .price__grid {
        margin-top: 4rem !important;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }

    .price__card {
        padding: 3rem 2rem !important;
        display: flex;
        flex-direction: column;
        background-color: var(--primary-color-light);
        border: 2px solid transparent;
        border-radius: 10px;
        transition: 0.3s;
    }

    .price__card:hover {
        background-color: var(--primary-color-extra-light);
        border-color: var(--secondary-color);
    }

    .price__card__content {
        flex: 1;
        margin-bottom: 2rem;
    }

    .price__card h4 {
        margin-bottom: 1rem;
        font-size: 1.2rem;
        font-weight: 500;
        color: var(--white);
    }

    .price__card h3 {
        padding-bottom: 1rem;
        margin-bottom: 2rem;
        font-size: 2rem;
        font-weight: 600;
        color: var(--white);
        border-bottom: 2px solid var(--white);
    }

    .price__card p {
        margin-bottom: 0.75rem;
        color: var(--white);
    }

    .price__card p i {
        margin-right: 0.5rem;
        font-size: 1.2rem;
        color: var(--secondary-color);
    }

    .price__btn {
        color: var(--secondary-color);
        background-color: transparent;
        border: 2px solid var(--secondary-color);
    }

    .price__btn:hover {
        color: var(--white);
        background-color: var(--secondary-color);
    }

    .review {
        background-color: var(--primary-color-light);
    }

    .review__container {
        display: flex;
        gap: 2rem;
    }

    .review__container>span {
        font-size: 6rem;
        color: var(--secondary-color);
        opacity: 0.5;
    }

    .review__content {
        flex: 1;
    }

    .review__content h4 {
        margin-bottom: 1rem;
        font-size: 1.3rem;
        font-weight: 600;
        color: var(--white);
    }

    .review__content p {
        max-width: 800px;
        margin-bottom: 2rem;
        color: var(--text-light);
    }

    .review__rating span {
        font-size: 1.5rem;
        color: var(--secondary-color);
    }

    .review__footer {
        margin-top: 4rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
    }

    .review__member {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }

    .review__member img {
        max-width: 60px;
        border-radius: 100%;
    }

    .review__member__details h4 {
        margin-bottom: 0;
    }

    .review__nav {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    .review__nav span {
        font-size: 2rem;
        color: var(--secondary-color);
        cursor: pointer;
    }



    @media (width < 900px) {


        .price__grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .review__container {
            gap: 2rem;
        }


    }

    @media (width < 600px) {


        .price__grid {
            grid-template-columns: repeat(1, 1fr);
        }

        .review__container {
            flex-direction: column;
            gap: 0;
        }

        .review__footer {
            flex-direction: column;
        }


    }
</style>

</html>
