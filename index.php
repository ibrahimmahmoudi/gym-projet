
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- SEO -->
        <meta name="keywords" content="GYM MHD, Gym ,Fitness ,Health ,Calorie Calculator ,Healthy Body ,Workout,Exercise,Training,Fitness Tips,Nutrition,Personal Trainer,Weight Loss,Strength Training,Cardio,Muscle Building,Wellness,Healthy Lifestyle,Fitness Programs,Fitness Classes,Online Coaching,  حساب السعرات الحرارية">
        <meta name="description" content="Welcome to GYM MHD, your premier fitness hub designed to help you achieve a healthy and strong body. Our integrated calorie calculator and expertly curated tips make it easier than ever to reach your fitness goals. Join GymMHD today and embark on a transformative journey towards a healthier you!">
        <link rel="website icon" type="png" href="./images/logogym.png">
        <title>GYM MHD</title>
        <!-- css file  -->
        <link rel="stylesheet" href="./css/gymcs.css">
        <!-- all element normally  -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- google font  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- font Awesome  -->
        <link rel="stylesheet" href="css/all.min.css">
    </head>
    <body>   
    
        <header id="home">
            <div class="container">
                <div class="contentlogin" id="signup">
                    <div class="wrapper" id="wrapper">
                        <span class="icon-close" id="icon-close"><i class="fa-solid fa-xmark"></i></span>
                        <div class="signup">
                            <h1>sign up</h1>
                            <form action="includ/login.php" method="post">
                                <div class="input-box">
                                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                                    <input type="email" name="email"  require >
                                    <label for="">Email</label>
                                </div>
                                <div class="input-box">
                                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                                    <input type="password" name="password" require >
                                    <label for="">password</label>
                                </div>
                                <span><?php if(!empty($_GET['errlogin'])){ echo $_GET['errlogin'] ;} ?></span>
                                <button type="submit" class="btn" >login</button>
                            </form>
                        </div>
                    </div>
                </div> 
                <nav>
                    <img class="logo" src="images/logogy.png" alt="logo">
                    <ul>
                        <li><a href="#home">home</a> </li>
                        <li><a href="#healthy">healthy body</a> </li>
                        <li><a href="#calculat">calculat your bmi</a> </li>
                        <li><a href="#footer">cantact</a> </li>
                    </ul>
                </nav>
                <div class="article1">
                    <h1> welcome to <span>gym mhd</span> , <br> the ultimate destination for fitness enthusiasts! </h1>
                    <p>
                        Our gym website is designed to help you achieve <br> your fitness goals by providing you with all the <br> information
                        you need to make informed decisions <br> about your health and wellness.
                    </p>

                    <div class="singup" >
                        <span id="btnsignup">Sing up</span>
                    </div>
                </div>
            </div>
        </header>
        <main  id="healthy">
            <div class="contact" id="contact">
                <div class="conticones">
                    <i class="fa-brands fa-facebook" style="color: #efefef;"></i>
                    <i class="fa-brands fa-instagram" style="color: #efefef;"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-tiktok"></i>
                </div>
            </div>
            <div class="container">
                <div class="article1">
                    <img src="images/img1.jpg" alt="photo">
                    <div class="steps">
                        <span class="firsttitle"> building a healthy body </span>
                        <h1>  important steps to follow for building a healthy body: </h1>
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
                        <h1>calculat your BMI</h1>
                        <form action="./includ/information.php" method="POST">
                            <div class="inform">
                                <div class="formleft">
                                    <div class="notsex">
                                        <label for="">your height : (الطول)</label><br>
                                        <input type="number"  placeholder=" 170 cm" name="height" value="<?= isset($_GET['hght'])? $_GET['hght'] :'' ?>" min='50' max='300' require id="height"><br>
                                        <span id="errheight"><?= isset($_GET['erhgh']) ? $_GET['erhgh'] : '' ?></span><br>
                                        <label for="">your weight :(الوزن)</label><br>
                                        <input type="number"  placeholder=" 70 kg " name="weight" value="<?= isset($_GET['wght'])? $_GET['wght'] :'' ?>" min='20' max='200' require id="weight"><br>
                                        <span id="errweight"> <?= isset($_GET['erwght']) ? $_GET['erwght'] :'' ?> </span><br>
                                    </div>
                                    <div class="sex">
                                        <label for="">gender :(الجنس)</label><br>
                                        <input type="radio" name="gender" value="" checked style="display:none ;" id="gender">
                                        <input type="radio" name="gender" value="male"  id="male" > Male
                                        <input type="radio" name="gender" value="female" id="female" > Female <br>
                                        <span id="errgender"><?= isset($_GET['ergnd']) ?  $_GET['ergnd'] : '' ?></span><br>
                                    </div>
                                </div>
                                <div class="formright">
                                    <label for="">your age :(العمر)</label><br>
                                    <input type="number" name="age" placeholder="22 years" value="<?= isset($_GET['ag']) ? $_GET['ag']:'' ?>" min=10 max=80 require id="age"><br>
                                    <span id="errage"> <?= isset($_GET['erage'])? $_GET['erage'] :''?></span><br>
                                    <label for=""> activity :(النشاط)</label><br>
                                    <select name="activite" id="activite">
                                        <option value="" selected id="activitee"> Select activite</option>
                                        <option value="many sit">many sit (little or non-activity)</option>
                                        <option value="light activity">light activity(light exercises /  sport 1-3 days per weeks)</option>
                                        <option value="medium activity">medium activity (moderate exercises/ sport 3-5 days per week)</option>
                                        <option value="high activity">high activity (arduous exercises/ sport 6-7 days per week)</option>
                                        <option value="super activity">super activity(very difficult exercises / sport physical function or multiplier training)</option>
                                    </select> <br>
                                    <span id="erractiv"><?= isset($_GET['eract'])?$_GET['eract'] :'' ?></span><br>
                                </div>
                            </div>
                            <div class="finaal">
                                <!-- <input  name="submit"  value="calculete now" id="winn"> -->
                                <button type="button" onclick="send()">Calculete</button>
                                <div class="resultas">
                                    <?= isset($_GET['reslt'])? $_GET['reslt'].' calories' :''  ?> 
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
                <div class="secendimg">
                    <img src="images/threimg.jpg" alt="photo">
                </div>
                <div class="loadercont" id="loader">
                    <div id="loader">
                        <canvas id="circularLoader" width="200" height="200"></canvas>
                    </div>
                </div>
            </div>

        </section>
        <footer id="footer">
            <div class="container">
                <div class="leftfooter">
                    <h1>gym mhd</h1>
                    <div class="conticones">
                        <i class="fa-brands fa-facebook" style="color: #efefef;"></i>
                        <i class="fa-brands fa-instagram" style="color: #efefef;"></i>
                        <i class="fa-brands fa-youtube"></i>
                        <i class="fa-brands fa-tiktok"></i>
                    </div>
                </div>
                <div class="centerfooter">
                    <h1>quick contacts </h1>
                    <div class="box1">
                        <div class="lefticoncenter">
                            <i class="fa-solid fa-envelope" style="color: #efefef;"></i>
                            <i class="fa-brands fa-internet-explorer" style="color: #efefef;"></i>
                        </div>
                        <div class="contanticonfooter">
                            <a href="mailto:gymmhd@gmail.com?subject=contact"><h5>gymmhd@gmail.com</h5></a>
                            <a href=""><h5>www.gymmhd.com</h5></a>
                        </div>
                    </div>
                </div>
                <div class="rightfooter">
                    <h3>Did the content of the page help you reach what you wanted?</h3>
                    <div class="like">
                        <button id="likebtn" type="submit">
                            <i class="fa-solid fa-thumbs-up" style="color: #efefef;" id="iconlike"></i>
                            <input type="number" id="counter1" value="149">
                        </button>
                        <button id="dislikebtn" type="submit"  >
                            <i class="fa-solid fa-thumbs-down" style="color: #efefef;" id="iconsdis"></i> 
                            <input type="number" name="" id="counter2" value="0" >
                        </button>
                    </div>
                </div>
            </div>
            <div class="liknsfooter">
                <ul>
                    <li> <a href="#home">home</a> </li>
                    <li> <a href="#healthy"> healthy body</a> </li>
                    <li> <a href="#calculat"> calculat your bmi</a> </li>
                    <li> <a href="#">cantact</a> </li>
                </ul>
            </div>
            <div class="copyright">
                &copy;2023 <span>gymmhd</span> All Right Reserved  
            </div>
        </footer>
        <script src="./js/main.js"></script>   
        <script src="./js/loader.js"></script>

    </body>
</html>

