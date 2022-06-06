<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet" type="text/css">
    <title>Interlake Cricket Club | Home</title>
    <link rel="icon" type="image/x-icon" href="/src/images/ICC LOGO.svg">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style = "margin-left: 30px;" >
            <a class="navbar-brand" href="#">
                <img height="60px" src="/src/images/ICC LOGO.svg"/>
            </a>
            <a class="navbar-brand" href="#">
                <span style = "font-size: 25px; font-family: Avenir; vertical-align: middle;">Interlake Cricket Club</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto nav-pills" style = "font-size: 16px; font-family: Avenir;">
                    <li class="nav-item">
                        <a class="nav-link active" style = "color: white;" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://my-store-b94780.creator-spring.com/">Club Merch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="announcements">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:jumpScroll(1)">Join the Club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matchesList" style = "display: flex; text-align: center; vertical-align: middle;">Matches<span class="badge bg-secondary">New</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="IYANVGO">IYANVGO!</a>
                    </li>
                </ul>
                <span class="navbar-text"></span>
            </div>
        </div>
    </nav>

    <div class = "image1">
        <h2 id = "iccWelcome" class = "red">- <span class = "blue">WELCOME TO THE</span> -</h2>
        <br>
        <h1 id = "iccHeading" class = "blue">Interlake <span class = "red">Cricket Club</span></h1>
    </div>
    <br>
    <div class = "schedule">
        <h2 id = "eventHeader"><span class = "red">- </span>Upcoming Events<span class = "red"> -</span></h2>
        <div class = "mobileShow">
            <h4>You can scroll to the right of the table</h4>
        </div>

        <div class="table-responsive">
            <table class = "schedule table table-hover">
                <th scope="col">Meeting List</th>
                <th scope="col">Are we meeting?</th>
                <th scope="col">When?</th>
                <th scope="col">Where?</th>
                <th scope="col">Notes</th>

                <?php
                    $host = "ibcasserver.mysql.database.azure.com";
                    $username = "ibcasvismay@ibcasserver";
                    $password = "jointechsavvyyouth1!";
                    $db_name = "cricket";
                    
                    $conn = mysqli_init();
                    mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
        
                    $sql = "SELECT * FROM days LIMIT 4;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if($row['meeting'] == "Yes!"){
                                echo "
                                    <tr> 
                                        <td scope=\"row\">". $row['meetingDate'] ."</td>
                                        <td class = \"yes\">Yes!</td>
                                        <td>". $row['meetingTime'] ."</td>
                                        <td>". $row['meetingLocation'] ."</td>
                                        <td><p class = \"comments\">". $row['meetingNotes'] ."</p></td>
                                    </tr>
                                ";
                            }
                            else{
                                echo "
                                    <tr>
                                        <td scope=\"row\">". $row['meetingDate'] ."</td>
                                        <td class = \"no\">No!</td>
                                        <td>". $row['meetingTime'] ."</td>
                                        <td>". $row['meetingLocation'] ."</td>
                                        <td><p class = \"comments\">". $row['meetingNotes'] ."</p></td>
                                    </tr>
                                ";
                            }
                        }
                    }
                ?>
            </table>
        </div>
        <br>
    </div>
    <h3 style="text-align: center; font-family: Avenir; font-size: 45px; text-decoration: underline;">Club Leadership</h3>
    <div class = "president">
        <br>
        <img style = "height: 150px;" src = "/src/images/manthan.png"/>
        <h5>President Manthan Jain</h5>
    </div>
    <div class = "officers">
        <br>
        <img style = "height: 150px;" src = "/src/images/frog.jpg"/>
        <h5>Vice President Akshar Adurty</h5>
        <br>
        <img style = "height: 150px;" src = "/src/images/Vismay.jpg"/>
        <h5>Secretary/Treasurer Vismay Patel</h5>
        <br>
        <img style = "height: 150px;" src = "/src/images/aniketh.png"/>
        <h5>Director of Media Aniketh Bondada</h5>
        <br>
        <img style = "height: 150px;" src = "/src/images/krish.png"/>
        <h5>Director of Media Krish Wasson</h5>
        <br>
    </div>
    <div class = "joinUs">
        <br>
        <h3 style="text-align: center; font-family: Avenir; font-size: 45px; text-decoration: underline;">Join the Club!</h3>
        <p class="joinP">So you want to join us eh? Don't worry, Interlake Cricket Club is a COED Club for all ages and experience level. 
            Many of our members have never played cricket before! We teach YOU how to play cricket and improve your skills!
            Fill out the <a href = "https://bit.ly/ihscricket">sign up form</a> below to get started!
        </p>
        <iframe width="640px" height= "480px" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=OUFKmQZ8HkmAmHkAbVdd4PenFEDA0ZNFh6k9e82wj6tURFM2R0w4SzZWVVY1VEVWMEpKQzk4TTNPTC4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
    </div>

    <br>

    <div class = "social">
        <h3 style="text-align: center; font-family: Avenir; font-size: 45px; text-decoration: underline;">Club Socials</h3>
        <br>
        <div id = "socialImages">
            <a href = "https://www.youtube.com/channel/UCVnFvXDmsIuIW6kGuTGuiqA">
                <img style = "height: 50px;" src = "/src/images/YouTube-icon.png">
            </a>
            <a href = "https://instagram.com/interlakecricketclub">
                <img style = "height: 50px;" src = "/src/images/instagram.jpg">
            </a>
            <a href = "http://discord.gg/WXGcGRkzam">
                <img style = "height: 50px;" src = "/src/images/discord.png">
            </a>
            <a href = "mailto:interlakecricket@gmail.com">
                <img style = "height: 50px;" src = "/src/images/gmail.png">
            </a>
        </div>
    </div>
    <br><br>
    <footer>
        <h3 style = "font-size: 16px;">Created and Coded by <a style = "color: white; text-decoration: underline;" href = "https://vismaypatel.com">Vismay Patel</a> © 2022</h3>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function jumpScroll(x) {
            if(x == 1){
                window.scroll(0,2175);
            }
        }
    </script>
    <script async type="text/javascript" src="https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/9fdba4aeb90f4cefa1a765a546621a4c2edc31ab17944f228c859cd1dab8908d.js"></script>
</body>
</html>