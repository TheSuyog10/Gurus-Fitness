<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="assets\images\logo1.png">
</head>

<body>
    @include('partials._header');

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col1">
                    <img src="{{ asset('images/logo1.png') }}">

                </div>

                <div class="about-col2">
                    <h1 class="sub-title" style="color:#2f0e07;">About US </h1>
                    <p> Welcome to Gurus of Fitness, where we're committed to helping you achieve your health and
                        wellness goals in a vibrant and welcoming environment. Our state-of-the-art gym is equipped with
                        top-notch cardio and strength training equipment, making it the ideal destination for fitness
                        enthusiasts of all levels. In addition, we offer invigorating Zumba and serene yoga classes in
                        the mornings and evenings, providing a well-rounded fitness experience that goes beyond
                        traditional workouts.





                    </p>
                    <br>
                    <div class="tab-titles">
                        <p class="tab-link active-link" onclick="opentab('skills')">Our Missions</p>
                        <p class="tab-link" onclick="opentab('experience')">Why Us?</p>
                        <p class="tab-link" onclick="opentab('education')">Our Values</p>
                    </div>

                    <div>
                        <ul class="tab-content active-tab " id="skills">
                            <li class="tittle-name">Inspiration and Empowerment</li><br>
                            <li class="tittle-name">Inclusivity</li><br>
                            <li class="tittle-name">Passion for Fitness</li><br>
                            <li class="tittle-name">Lifestyle Transformation</li>


                        </ul>
                    </div>
                    <div>
                        <ul class="tab-content" id="experience">


                            <li class="tittle-name">Diverse Offerings
                            </li><br>
                            <li class="tittle-name">Expert Instructors
                            </li><br>
                            <li class="tittle-name">Latest Technology
                            </li><br>
                            <li class="tittle-name">Social and Online Support
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="tab-content" id="education">
                            <li class="tittle-name">Quality and Excellence </li><br>
                            <li class="tittle-name">Passion for Wellness</li><br>
                            <li class="tittle-name">Sustainability and Responsibility</li><br>
                            <li class="tittle-name">Communication and Collaboration</li>
                        </ul>
                    </div>






                </div>



            </div>


        </div>
    </div>
    <script>
        var tablinks = document.getElementsByClassName("tab-link");
        var tabcontents = document.getElementsByClassName("tab-content");

        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");

        }
    </script>
    <!---------------------------------Secvices--------------------------->
    <div id="services">
        <div class="container">
            <h1 class="sub-title" style="color:#2f0e07;"> Our Services</h1>
            <div class="services-list">
                <div>
                    <img src="{{ asset('images/gym.png') }}" alt="" style="width:60px; height:60px;">


                    <h2>Gym Access</h2>
                    <p>Experience unlimited access to our state-of-the-art gym, equipped with the latest cardio and
                        strength training equipment. Our facility provides a comprehensive workout experience, enabling
                        you to achieve your fitness goals. Enjoy a transformative fitness journey.
                    </p>

                </div>
                <div>
                    <img src="{{ asset('images/zumba.png') }}" alt=""
                        style="position: sticky; width:60px; height:60px; top:-40px padding-bootom:0;">

                    <h2>Zumba Classes</h2>
                    <p> Immerse yourself in the world of dynamic and high-energy Zumba classes. Designed for fitness
                        enthusiasts who relish the joy of dance, our Zumba sessions offer a vibrant and effective way to
                        stay fit while having a blast. Join the rhythm and let the music move you.</p>

                </div>
                <div>
                    <img src="{{ asset('images/yoga-pose.png') }}" alt="" style="width:60px; height:60px;">
                    <h2>Yoga Classes</h2>
                    <p>Indulge in serene and calming yoga classes that emphasize flexibility, mindfulness, and
                        relaxation. Our expert instructors guide you through postures and breathing techniques,
                        fostering a tranquil and balanced state of mind while enhancing your physical flexibility.</p>

                </div>
                <div>
                    <img src="{{ asset('images/sauna.png') }}" alt="" style="width:60px; height:60px;">
                    <h2>Sauna Room</h2>
                    <p> Step into our serene sauna room, a tranquil haven designed for post-workout relaxation and
                        muscle recovery. Immerse yourself in the gentle, soothing heat that helps melt away tension,
                        reduce stress, and promote a deep sense of well-being. </p>

                </div>
                <div>
                    <img src="{{ asset('images/private_trainer.png') }}" alt=""
                        style="width:60px; height:60px;">
                    <h2>Private Instructor</h2>
                    <p>Elevate your fitness journey with personalized training sessions led by our certified trainers.
                        Tailored to your unique goals, these one-on-one sessions maximize your potential and ensure you
                        reach the heights of your fitness aspirations.</p>

                </div>
                <div>
                    <img src="{{ asset('images/forum.png') }}" alt="" style="width:60px; height:60px;">
                    <h2>Social Connectivity</h2>
                    <p>
                        Stay engaged with our vibrant fitness community through interactive online
                        forums and seamless social media integration. Connect with fellow fitness enthusiasts, share
                        experiences, and find the motivation you need to thrive in your fitness journey.</p>

                </div>


            </div>

        </div>

    </div>
    @include('partials._footer');
</body>
<style>
    body {
        background-color: #588b8b;

    }



    /*------------------about-------------------*/
    #about {
        padding: 5% 4% 0 4%;

        color: lightgray;
    }

    .row {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .about-col1 {
        flex-basis: 35%;
    }

    .about-col1 img {
        width: 100%;
        border-radius: 15px;
        height: 100%;

        transition: transform 0.4s;
    }

    .about-col1 img:hover {
        transform: scale(1.1);
        background-color: #264653;
    }

    .about-col2 {
        flex-basis: 60%;
    }

    .about-col2 p {
        font-size: 20px;
        text-align: justify;
        color: lightgray;
        line-height: 35px;
    }

    .sub-title {
        font-size: 60px;
        font-weight: 600;
        color: aliceblue;
    }

    .tab-titles {
        display: flex;
        /*margin: -490px 540px 40px;*/


    }

    .tab-link {
        margin-right: 50px;
        cursor: pointer;
        position: relative;
        color: #2f0e07 !important;
        font-weight: 700;
        font-size: 23px !important;

        font-family: 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .tab-link::after {
        content: "";
        width: 0%;
        height: 3px;
        position: absolute;
        background: #264653;
        left: 0;
        bottom: 0;
        transition: 0.5s;
    }

    .tab-link.active-link::after {
        width: 50%;
    }

    .tab-content {
        /*margin: -340px 540px 40px;*/
        margin-top: 10px;
        list-style: none;
        font-size: 18px;
    }

    .tittle-name span {}

    .tab-content {
        display: none;
    }

    .tab-content.active-tab {
        display: block;
    }

    /*-----------------Services------------------*/
    #services {
        padding: 5% 4%;
    }

    .services-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-template-areas:
            "item1 item2 item3"
            "item4 item5 item6";
        grid-gap: 40px;
        margin-top: 50px;
    }

    .services-list div:nth-child(1) {
        grid-area: item1;
    }

    .services-list div:nth-child(2) {
        grid-area: item2;
    }

    .services-list div:nth-child(3) {
        grid-area: item3;
    }

    .services-list div:nth-child(4) {
        grid-area: item4;
    }

    .services-list div:nth-child(5) {
        grid-area: item5;
    }

    .services-list div:nth-child(6) {
        grid-area: item6;
    }

    .services-list div {
        background: #6c757d;
        padding: 40px;
        font-size: 16px;

        font-weight: 500;
        border-radius: 15px;
        transition: background 0.5s, transform 0.5s;
    }

    .services-list div i {
        font-size: 0px;
        margin-bottom: 30px;
    }

    .services-list div h2 {

        font-size: 25px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .services-list div a {
        text-decoration: none;
        color: #ffff;
        font-size: 12px;
        display: inline-block;
    }

    .services-list div p {
        display: flex;
        text-align: justify;
        color: whitesmoke;
        margin-bottom: 20px;
        font-size: 18px;
    }

    .services-list div:hover {
        background-color: #264653;
        transform: translateY(-10px);
    }

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

    @media only screen and (max-width: 900px) {


        .sub-title {
            font-size: 30px;
        }

        .about-col1,
        .about-col2 {
            flex-basis: 100%;
        }

        .about-col1 {
            margin-bottom: 50px;
        }

        .about-col2 {
            font-size: 16x;
        }


        .tab-link {
            font-size: 18px;
        }

        .tab-content {
            font-size: 17px;
            margin-bottom: 60px;
        }

        .services-list {
            grid-template-columns: 1fr;
            grid-template-rows: repeat(6, 1fr);
            grid-template-areas:
                "item1"
                "item2"
                "item3"
                "item4"
                "item5"
                "item6";
        }

        .about-col2 p {
            font-size: 17px;
            text-align: justify;
            color: lightgray;
        }

        ::-webkit-scrollbar {
            width: 6px;
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
</style>

</html>
