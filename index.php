<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Social Platform for International Students</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/index1.css" />
    <script type="module" src="js/index.js"></script>
</head>

<body>
<div class="header">
    <div class="header_c inner_c">
        <h1>
            <a href="#">
                CulturEase Nexus
            </a>
        </h1>
        <div class="all_pro">
            <a class="type" href="#">Student Life Guide<span class="icon"></span></a>
            <div class="kind ">
                <div class="kind_inner  inner_c">
                    <ul class="inn_nav">

                        <li><a href="#">Academic Success</a></li>
                        <li><a href="#">Health and Wellness</a></li>
                        <li><a href="#">Cultural Integration</a></li>
                        <li><a href="#">Practical Living</a></li>
                        <li><a href="#">Social Engagement</a></li>
                    </ul>
                    <ul class="inn_detail">
                        <li class="common_wd">
                            <div class="pic">
                                <img src="images/study.png" alt="">
                            </div>
                            <div class="content">
                                Campus Resources
                            </div>
                            <a href="resource.php" class="mask">
                                <span class="btn">Find in Details</span>
                            </a>
                        </li>
                        <li class="common_wd">
                            <div class="pic">
                                <img src="images/event.png" alt="">
                            </div>
                            <div class="content">
                                Popular Events
                            </div>
                            <a href="resource.php" class="mask">
                                <span class="btn">Find in Details</span>
                            </a>
                        </li>
                        <li class="common_wd">
                            <div class="pic">
                                <img src="images/social.png" alt="">
                            </div>
                            <div class="content">
                                Social Engagement
                            </div>
                            <a href="resource.php" class="mask">
                                <span class="btn">Find in Details</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header_nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="resource.php">Resources </a></li>
                <li><a href="activity.php">Activities</a></li>
                <li><a href="news.php">News</a></li>
            </ul>
        </div>

        <a href="search.php"><div class="search"></div></a>
        <div class="login">
            <?php
            session_start();
            if (isset($_SESSION['username'])) {
                echo "Welcome, " . $_SESSION['username'] . "!";
            } else {
                echo '<a href="login.php">Login </a><span>|</span><a href="register.php">Register </a>';
            }
            ?>
        </div>
    </div>
</div>

<div class="banner" >
    <div class="banner_c">
        <ul id="try1">
            <li class='cur1 abc'><a href="login.php"><img src="images/banner1.png" alt=""></a></li>
            <li class='cur2 abc'><a href="#"><img src="images/banner2.png" alt=""></a></li>
            <li class='cur3 abc'><a href="resource.php"><img src="images/banner3.png" alt=""></a></li>
        </ul>
    </div>
    <a href=""></a>
    <div class="btns">
        <ol>
            <li class="cur4 def"></li>
            <li class="cur5 def"></li>
            <li class="cur6 def"></li>
        </ol>
    </div>
</div>
<div class="dancer">
    <div class="common_title">
        <h3>Popular Events</h3>
        <p>Explore the Latest Buzzing Events! Join Us for the Hottest Activities in Town!</p>
    </div>
    <div class="artist inner_c">
        <ul>
            <li class="common_wd">
                <div class="pic">
                    <a href="https://riverdance.com/" >
                        <img src="images/riverdance.png" alt="">
                    </a>
                </div>
                <div class="content">
                    Riverdance
                </div>
            </li>
            <li class="common_wd">
                <div class="content">
                    <a href="#" >
                        <img src="images/Culture.png" alt="">
                        Culture Communication
                </div>
            </li>
            <li class="common_wd">
                <div class="content">
                    <a href="#" >
                        <img src="images/coffee.png" alt="">
                        Coffee Time
                </div>
            </li>
            <li class="common_wd">
                <div class="pic">
                    <a href="#" >
                        <img src="images/tyy.png" alt="">
                    </a>
                </div>
                <div class="content">
                    Taylor Swift Concert
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="photo inner_c">
    <div class="common_title">
        <h3>Key Services</h3>
        <p>Unlock Our Top Picks - Elevate Your Experience Today!</p>
    </div>
    <div class="content">
        <div class="left pic" >
            <a href="#">
                <img src="images/img31.png" alt="">
            </a>
            <span></span>
        </div>
        <div class="right">
            <div class="r_top pic">
                <a href="#">
                    <img src="images/img32.png" alt="">
                </a>
                <span></span>
            </div>
            <div class="r_bottom pic">
                <a href="#">
                    <img src="images/img33.png" alt="">
                </a>
                <span></span>
            </div>
        </div>
    </div>
</div>

<div class="zx">
    <div class="zx_inner inner_c">
        <div class="common_title">
            <h3>Contact Information</h3>
            <p>Let's know each other!</p>
        </div>
        <div class="content">
            <ul>
                <li class="zx_content">
                    <div class="zx_top">
                        <img src="images/img61.png" alt="">
                    </div>
                    <div class="zx_bottom">
                        <p class="title">
                            <span>Harry Potter</span>
                        </p>
                        <p class="detail">
                            Hi, I'm Harry Potter. Just a regular guy until I found out I'm a wizard. Survived Voldemort's attack. Went to Hogwarts, learned magic, made great friends like Hermione and Ron. Fight dark forces. Believe in love, courage, justice. Protect loved ones and wizarding world.
                        </p>
                        <p class="footer">
                            2024.03.10 07:55
                        </p>
                    </div>
                </li>
                <li class="zx_content">
                    <div class="zx_top">
                        <img src="images/img62.png" alt="">
                    </div>
                    <div class="zx_bottom">
                        <p class="title">
                            <span>Cedric Diggory</span>
                        </p>
                        <p class="detail">
                            Hi, I'm Cedric Diggory. I come from Hufflepuff House at Hogwarts. I work hard at school, striving for excellence and fairness. I believe that with friendship and teamwork, we can achieve greater accomplishments.
                        </p>
                        <p class="footer">
                            2024.3.22 18:32
                        </p>
                    </div>
                </li>
                <li class="zx_content">
                    <div class="zx_top">
                        <img src="images/img63.png" alt="">
                    </div>
                    <div class="zx_bottom">
                        <p class="title">
                            <span>Hermione Granger</span>
                        </p>
                        <p class="detail">
                            Hi, everyone, I'm Hermione Granger. I'm a Gryffindor student studying at Hogwarts School of Witchcraft and Wizardry. I'm someone who loves knowledge and is diligent in my studies.
                        </p>
                        <p class="footer">
                            2024-1-10 07:55
                        </p>
                    </div>
                </li>
                <li class="zx_content">
                    <div class="zx_top">
                        <img src="images/img64.png" alt="">
                    </div>
                    <div class="zx_bottom">
                        <p class="title">
                            <span>Luna Lovegood</span>
                        </p>
                        <p class="detail">
                            Hi, everyone, I'm Luna Lovegood. I'm a student from Ravenclaw, studying at Hogwarts School of Witchcraft and Wizardry. I'm someone who's unique and imaginative, always believing in the existence of miracles and mysteries.
                        </p>
                        <p class="footer">
                            2024-2-10 07:55
                        </p>
                    </div>
                </li>

            </ul>
        </div>
        <div class="btn-container">

            <!-- Login/register button -->
            <button

                    id="loginBtn"
                    style="display: none;"
                    onclick="redirectToLoginPage()">Register/Login to view details

            </button>
        </div>
    </div>
</div>

<div id="map" style="height: 400px;"> </div>

<div class="footer">
    <div class="footer_c inner_c">
        <div class="f_top">
            <div class="copy">
                <a href="#">
                    <img src="images/logo.png" alt="">
                </a>
                <p>
                    CulturEase Nexus is a social platform tailored to international students, providing them with a space to communicate, share experiences, and build social networks. Offering services such as a guide to student life, cultural exchange activities, job search information, etc., to help international students better integrate into local society.
                </p>
            </div>

            <dl class="about">
                <dt>About Us</dt>
                <dd>Our Brand</dd>
                <dd>Our News</dd>
                <dd>Our Experience</dd>
                <dd>Our Production</dd>
            </dl>
            <dl class="about">
                <dt>Address1</dt>
                <dd>Address2</dd>
                <dd>Address3</dd>
                <dd>Address4</dd>
                <dd>Address5</dd>
            </dl>
            <dl class="about">
                <dt>Person1</dt>
                <dd>Person2</dd>
                <dd>Person3</dd>
                <dd>Person4</dd>
                <dd>Person5</dd>
            </dl>
            <div class="wb ewm">
                <img src="images/img72.png" alt="">
                <span>CulturEase Nexus</span>
            </div>
        </div>
        <div class="f_bottom">
            <div class="f_icon">
                <p>2024@CulturEase Nexus</p>
            </div>
        </div>
    </div>

    <div class="fix_top">
        <a href="#">
            <p>↑</p>
        </a>
    </div>

</body>
</html>

<script type="text/javascript">
    var index=0;
    //change the pic
    function ChangeImg() {
        index++;
        var a=document.getElementsByClassName("abc");
        var b=document.getElementsByClassName("def");
        if(index>=a.length) index=0;
        for(var i=0;i<a.length;i++){
            a[i].style.display='none';
            b[i].style.color="#FFF";
        }
        a[index].style.display='block';
        b[index].style.color="#C78A49";
    }
    setInterval(ChangeImg,2000);
</script>

<script type="text/javascript">
    // Initialize map function
    let map;

    function initMap() {
        const position = { lat: -25.344, lng: 131.031 };
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: position,
            mapId: "DEMO_MAP_ID",
        });

        const marker = new google.maps.Marker({
            position: position,
            map: map,
            title: "Uluru",
        });
    }

    // Function to load Google Maps API
    (function() {
        var script = document.createElement("script");
        script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyD_l2Fy4YjENADcJEDy2e0CbC6lXt0TqQ0&callback=initMap";
        script.defer = true;
        script.async = true;
        document.head.appendChild(script);
    })();


    // Function to handle login button click
    function redirectToLoginPage() {
        window.location.href = 'login.php';
    }

    // Function to handle page load
    window.onload = function() {
        // Initialize map
        initMap();

        // Set login button display logic
        var loggedIn = <?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>; // Tourist or logged user
        var zxContentItems = document.querySelectorAll('.zx_content');


        if (!loggedIn) {
            zxContentItems.forEach(function(item) {
                item.classList.add('blur');
            });
            document.getElementById('loginBtn').style.display = 'block';
        }
    };
</script>

