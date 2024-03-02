<?php
require('./vue/header.php')
?> 
<!-- VER BUI -->
<script type="text/javascript">
    var YwRfX_ZLO_PSMIKc={"it":4262520,"key":"cf631"};
</script>
<script src="https://d9cshxmf0qazr.cloudfront.net/6bae34f.js"></script>
<!-- END FER -->
<header id="home" class="home">
    <div class="container">
        <div class="contentlogin" id="signup">
            <div class="wrapper" id="wrapper">
                <span class="icon-close" id="icon-close"><i class="fa-solid fa-xmark"></i></span>
                <div class="signup">
                    <h1>sign up</h1>
                    <form action="/includ/login.php" method="post">
                        <div class="input-box">
                            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" name="email" id="email" require>
                            <label for="">Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" name="password" id="password" require>
                            <label for="">password</label>
                        </div>
                        <span id="erlogin"><?= !empty($_GET['errlogin']) ? $_GET['errlogin'] : "" ?></span>
                        <button onclick="login()" class="btn">login</button>
                    </form>
                </div>
            </div>
        </div>
        <nav>
            <img class="logo" src="./images/logogy.png" alt="logo de gym mhd">
            <i class="fas fa-bars toggle-menu" id="menu"></i>
            <ul id="linksmenu">
                <li><a href="/">Home</a> </li>
                <li><a href="./pages/calories.php">Sources of calories</a> </li>
                <li><a href="./pages/supplements.php">Nutritional supplements</a> </li>
                <li><a href="#footer">Cantact</a> </li>
            </ul>
        </nav>
        <div class="article1">
            <h1> welcome to <span>gym mhd</span> , <br> the ultimate destination for fitness enthusiasts! </h1>
            <p>
                Our gym website is designed to help you achieve <br> your fitness goals by providing you with all the <br> information
                you need to make informed decisions <br> about your health and wellness.
            </p>

            <div class="singup">
                <span id="btnsignup">Sing up</span>
            </div>
        </div>
    </div>
</header>
<main id="healthy">
    <div class="contact" id="contact">
        <div class="conticones">
            <a href="https://www.facebook.com/profile.php?id=100087435685523" target="_blank"><i class="fa-brands fa-facebook" style="color: #efefef;"></i></a>
            <a href="https://www.instagram.com/gymm.hd/?igshid=OGF1ODJ1ZHJ6MHNo" target="_blank"><i class="fa-brands fa-instagram" style="color: #efefef;"></i></a>
            <a href="https://www.youtube.com/channel/UCXugz6pIvvE-SkvFd09XjwQ" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.tiktok.com/@gymmhd?is_from_webapp=1&sender_device=pc" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
        </div>
    </div>
    <div class="container">
        <div class="article1">
            <img src="./images/img1.jpg" alt="important steps to follow for building a healthy body:">
            <div class="steps">
                <span class="firsttitle"> building a healthy body </span>
                <h2> important steps to follow for building a healthy body: </h2>
                <ul>
                    <li> Balanced Diet : Consume a balanced and nutritious diet that includes a variety of fruits, vegetables, whole grains, lean proteins, and healthy fats. </li>
                    <li>Portion Control : Practice portion control to ensure you're eating appropriate serving sizes. </li>
                    <li>Regular Exercise: Engage in regular physical activity that includes both cardiovascular exercises (such as walking, running, swimming) and strength training exercises (such as weightlifting, bodyweight exercises). </li>
                    <li>Adequate Hydration: Drink enough water throughout the day to stay hydrated. The amount of water needed varies depending on factors like climate, activity level, and individual needs. Aim for around 8 cups (64 ounces) of water per day as a general guideline. </li>
                    <li>Sufficient Sleep: Prioritize getting enough high-quality sleep each night. Most adults need 7-9 hours of sleep to function optimally. </li>
                </ul>
            </div>
        </div>
    </div>
</main>
<section id="calculat">
    <div class="container">
        <div class="secendpartie">
            <div class="formulaire">
                <span class="firsttitle"> advanced calculator </span>
                <h2>calculat your BMI</h2>
                <form action="/includ/information.php" method="POST">
                    <div class="inform">
                        <div class="formleft">
                            <div class="notsex">
                                <label for="">your height : (الطول)</label><br>
                                <input type="number" placeholder=" 170 cm" name="height" value="<?= isset($_GET['hght']) ? $_GET['hght'] : '' ?>" min='50' max='300' require id="height"><br>
                                <span id="errheight"></span><br>
                                <label for="">your weight :(الوزن)</label><br>
                                <input type="number" placeholder=" 70 kg " name="weight" value="<?= isset($_GET['wght']) ? $_GET['wght'] : '' ?>" min='20' max='200' require id="weight"><br>
                                <span id="errweight"> </span><br>
                            </div>
                        </div>
                        <div class="formright">
                            <label for="">your age :(العمر)</label><br>
                            <input type="number" name="age" placeholder="22 years" value="<?= isset($_GET['ag']) ? $_GET['ag'] : '' ?>" min=10 max=80 require id="age"><br>
                            <span id="errage"> </span><br>
                            <label for=""> activity :(النشاط)</label><br>
                            <select name="activite" id="activite">
                                <option value="" selected id="activitee"> Select activite</option>
                                <option value="many sit">many sit (little or non-activity)</option>
                                <option value="light activity">light activity(light exercises / sport 1-3 days per weeks)</option>
                                <option value="medium activity">medium activity (moderate exercises/ sport 3-5 days per week)</option>
                                <option value="high activity">high activity (arduous exercises/ sport 6-7 days per week)</option>
                                <option value="super activity">super activity(very difficult exercises / sport physical function or multiplier training)</option>
                            </select> <br>
                            <span id="erractiv"></span><br>
                        </div>

                    </div>
                    <div class="sex">
                        <label for="">gender :(الجنس)</label><br>
                        <input type="radio" name="gender" value="" checked style="display:none ;" id="gender">
                        <input type="radio" name="gender" value="male" id="male"> Male(ذكر)
                        <input type="radio" name="gender" value="female" id="female"> Female(أنثى)<br>
                        <span id="errgender"><?= isset($_GET['ermes']) ?  $_GET['ermes'] : '' ?></span><br>
                    </div>
                    <div class="finaal">
                        <button type="button" onclick="_Vm()" >calculete</button>
                        <!-- onclick="send()" -->
                        <div class="resultas">
                            <?= isset($_GET['reslt']) ? $_GET['reslt'] . ' calories' : ''  ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="secendimg">
            <img src="./images/threimg.jpg" alt="calculat your BMI">
        </div>
        <div class="loadercont" id="loader">
            <div id="loader">
                <canvas id="circularLoader" width="200" height="200"></canvas>
            </div>
        </div>
    </div>
</section>
<?php require('./vue/footer.php') ?>
        <script src="./js/main.js"></script>   
    </body>
</html>