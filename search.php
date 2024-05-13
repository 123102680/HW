<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CulturEase Nexus</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
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
            <a href="login.php">Login </a><span>|</span><a href="register.php">Register </a>
        </div>
    </div>
</div>

<div class="box">
    <div class="box_text">
        <div class="box_text_content">
            <input type="text" placeholder="Pls enter your content here" name="text" id="text" value="" autofocus="autofocus"/>
            <input type="button" name="bdyx" id="btn" value="Search"/>
        </div>
    </div>
</div>

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
<style>
    .box {
        width:100%;
        padding-top: 200px;
        padding-left: 5%;
        height: 436px;
        background-color: #ffffcc;
        background-image: url('images/bg.png');
        background-size: 1400px 500px;
        background-position: center;
        background-repeat: no-repeat;
    }
    .box_text {
        width: 100%;
        height: 36px;
    }

    .box_text_content {
        width: 640px;
        height: 36px;
        margin: 0 auto;
    }

    #text {
        width: 540px;
        height: 36px;
        box-sizing: border-box;
        margin-top: 3px;
        text-indent: 4px;
        outline: none;
    }

</style>
</html>


<script type="text/javascript">
    var otext = document.getElementById("text");
    ose = document.querySelector("#search");
    lis = document.getElementsByClassName("li1");
    otext.onkeyup = function () {
        ose.style.display = otext.value ? "block" : "none";
        var osc = document.createElement("script");
        osc.src = "https://suggestqueries.google.com/complete/search?client=firefox&q=" + otext.value;
        document.body.appendChild(osc);
        if (event.keyCode === 13) {
            window.location.href = "https://www.google.com/search?q=" + otext.value
        }
    }
    function iptShow(thisId) {
        otext.value = arr[thisId].innerHTML;
        window.location.href = "https://www.google.com/search?q=" + otext.value
    }

    btn.onclick = function () {
        var otext = document.getElementById("text").value;
        if (otext === "" || otext == null) {
            alert('Input can not be empty');
        } else {
            window.location.href = "https://www.google.com/search?q=" + otext
        }
    }
</script>