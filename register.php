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

<div class="uk-grid"style="padding-top: 100px;
                               padding-bottom: 50px;">
    <div class="uk-width-1-3"></div>
    <div class="uk-width-1-3">
        <div style="width: 350px;
                        height: 300px;
                        background-color: #e6d6c6;
                        margin: 0 auto;
                        position: relative;
                        padding-top: 20px;
                        box-shadow: 0 1px 1px black;">
            <div class="big" style="width: 300px;
                                    height: 250px;
                                    padding-top: 20px;
                                    background-color: #e2d5c9;
                                    margin: 0 auto;">
                <center>
                    <form class="uk-form uk-width-medium-1-3" style="text-align: center;line-height: 30px" method="post" action="register.php">
                        <fieldset>
                            <legend>REGISTER</legend>
                        </fieldset>
                    </form>
                </center>
                <div class="uk-grid">
                    <div class="uk-width-1-6"></div>
                    <form class="uk-form uk-width-medium-1-3" style="padding-left: 40px; margin-bottom: 20px" method="post" action="users.php">
                        <fieldset>
                            <div class="uk-form-row">
                                <label>
                                    <input type="text" name="username" placeholder="email/phone number/name">
                                </label>
                            </div>
                            <hr class="hr1"  color="#f8f8f8">
                            <div class="uk-form-row">
                                <label>
                                    <input type="password" name="password" placeholder="enter your password">
                                </label>
                            </div>
                            <hr class="hr1" color="#f8f8f8">
                            <div class="uk-form-row">
                                <div class="uk-grid">
                                    <div class="uk-width-1-6"></div>
                                    <div class="uk-button-group">
                                        <button  style="width: 60px" class="uk-button uk-button-primary" name="register">Register</button>
                                        <button style="width: 60px" class="uk-button" href="login.php"><a href="login.php">Login</a></button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>



                <div class="top">
                    <div class="img1"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="uk-width-1-3"></div>
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
</html>
