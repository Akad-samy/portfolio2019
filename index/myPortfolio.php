<?php
    try{
      $bdd = new PDO('mysql:host=localhost; dbname=portfolio; charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }catch(Exception $e){

      die('Erreur : '.$e->getMessage());
  }
                                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>My Portfolio</title>
</head>
<body>

<div class="lds-circle">
  <div></div>
</div>  
        
    <div class="iam d-none" >

        <img src="../imgs/logo.png" alt="logo SA." class="img_iam">
        <i class="bars fa fa-bars d-none"></i>
        <div class="nav-mob d-none" >
                <p class="close" style="float:right; font-size:25px; font-weight: bold; padding: 15px; cursor:pointer">X</p>
                <a href="#home" class="active">Home</a>
                <a href="#about">About</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#contact">Contact</a>
              
        </div>

        
        <div class="container">

            <div class="topnav" id="myTopnav">
                <a href="#home" class="active">Home</a>
                <a href="#about">About</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#contact">Contact</a>
            </div>

            

          <!-- <nav>
                <ul class="topnav" id="myTopnav">
                    <li><a href="#home">Home</a></li>
                    <li class="active"><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                      <i class="fa fa-bars"></i>
                    </a>
                </ul>
          </nav> -->

          <?php
            if(isset($_POST['send'])){
              if(mail('akhouad.samy@gmail.com', $_POST['name'], $_POST['message'], 'From: '.$_POST['email'])){
                ?>
                  <div class="alert alert-success text-center"> Mail Sended</div>
                <?php
              }else{
                ?>
                  <div class="alert alert-danger text-center"> Mail Not Sended</div>
                <?php
              }
            }
          ?>

            <!-- <div class="content"> -->
                    <!-- <div class="row" id="home">
                      <div class="hero col-md-6">
                        <div class="htext">
                          <span>Hello,</span>
                          <h2>I'm Samy</h2>
                          <p>Web Developer</p>
                          <button type="button" class="btn btn-warning mt-3">Portfolio</button>
                        </div>
                      </div>
                      <div class="hero col-md-6">
                        <img src="imgs/logo.png" alt="logo">
                      </div>
                    </div> -->
                    
                    <div class="mySlides" id="home">
                      <div class="hero">
                          <div class="htext">
                              <p class="text-left">I AM</p>
                              <h2>Samy</h2>
                              <h6 class="b-para text-right">a junior <span style="color:#ffd32a">Web Developer/</span></h6>
                              <!-- <button type="button" class="btn btn-warning mt-3">Portfolio</button> -->
                            </div>
                      </div>
                    </div>
                    <div class="mySlides d-none" id="about">
                        <div class="row">
                            <div class="hero col-md-6">
                                <div class="picture">
                                    <img src="../imgs/myPic.jpg" alt="logo SA." id="myPic">
                                    <div class="skills p-3">
                                      <p class="text-left">My Skills</p>
                                        <p>HTML</p>
                                        <div class="progress mb-1" style="height:1px">
                                          <div class="progress-bar w-75 bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>CSS</p>
                                        <div class="progress mb-1" style="height:1px">
                                          <div class="progress-bar w-75 bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>JS</p>
                                        <div class="progress mb-1" style="height:1px">
                                          <div class="progress-bar w-75 bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>PHP</p>
                                        <div class="progress mb-1" style="height:1px">
                                          <div class="progress-bar w-75 bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero col-md-6">
                                    <div id="myText">
                                        <h3 class="text-center">about <span style="color:#ffd32a">me</span></h3>
                                        <br>
                                        <p class="py-3">I'm Samy AKHOUAD, a Front-End Developer & UX Designer with 5 years experience.<br><br>I live in Morocco and work worldwide.<br>
                                        <br>For years I've been working to help turn great ideas in both website design and layout into a noteworthy reality.<br><br>If you like unconventional solutions and value clean website design as much as I like them, then we go the same way.
                                      </p>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <p>Name: <br> <span style="color:#ffd32a">Samy AKHOUAD</span></p>
                                        <p>Phone: <br> <span style="color:#ffd32a">+212 634 658 257</span></p>
                                      </div>
                                      <div class="col-md-6">
                                          <p>Email: <br> <span style="color:#ffd32a">akhouad.samy@gmail.com</span></p>
                                          <p>Linkedin: <br> <a href="https://www.linkedin.com/in/samy-akhouad-b0a93a13b/"><span style="color:#ffd32a">Samy akhouad</span></a></p>
                                        </div>
                                    </div>  
                                  </div> 
                            </div>
                        </div>
                    </div>
                    <div class="mySlides d-none" id="portfolio"> 
                      <h2 class="portitle">portfolio</h2>
                      <div class="row">
                        <?php
                          $limit = 6;
                          $page = isset($_GET['page']) ? $_GET['page'] : 1 ;
                          $start = ($page - 1) * $limit;
                          $reponse = $bdd->query("SELECT * FROM data ORDER BY id DESC LIMIT $start, $limit");

                          $reponse1 = $bdd->query("SELECT count(id) AS id FROM data");
                          $projCount = $reponse1->fetch();
                          // var_dump($projCount[0]);
                          $total = $projCount['id'];
                          $pages =ceil($total / $limit);

                          $Previous = $page - 1;
	                        $Next = $page + 1;


                          while($donnees = $reponse->fetch()){
                        ?>
                        <div class="myImg top col-md-4" data-image="../imgs/<?= $donnees['image'] ?>">
                          <img src="../imgs/<?= $donnees['image'] ?>" alt="<?= $donnees['title'] ?>" class="center">
                          <h3 class="text-center"><?= $donnees['title'] ?></h3>

                        </div>

                          

                        <?php
                          }
                        ?>
                          <div id="myModal" class="modal">
                            <span class="close" onclick="fermer()">X</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                          </div>

                        <nav aria-label="Page navigation example" class="d-flex justify-content-center align-items-end" style="height:100px">
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled px-3">
                              <a href="myPortfolio.php?page=<?= $Previous; ?>" tabindex="-1" aria-disabled="true"  style="color: #ffd32a!important">Previous</a>
                            </li>
                            <?php for($i = 1; $i<= $pages; $i++) : ?>
                                <li class="px-3"><a href="myPortfolio.php?page=<?= $i; ?>" class="pages" style="color: #ffd32a!important"><?= $i; ?></a></li>
                            <?php endfor; ?>
                            <li class="page-item px-3">
                              <a href="myPortfolio.php?page=<?= $Next; ?>"  style="color: #ffd32a!important">Next</a>
                            </li>
                          </ul>
                        </nav>


                      </div>
                    </div>
                    <div class="mySlides d-none" id="contact">
                        <div class="row">
                          <div class="col-md-6">
                              <h2 class="contacTitle">Contact</h2>
                              <p style="margin:65px 0; padding-right: 60px">I'm always intersted in creating and building amazing and mind blowing stuffs. If you want to hire me or need help to achieve your design project, reach out to me.<br>You can also just say 'Hey', i'm cool with that.  </p>
                              <p>Name: <br> <span style="color:#ffd32a">Samy AKHOUAD</span></p>
                              <p>Phone: <br> <span style="color:#ffd32a">+212 634 658 257</span></p>
                              <p>Email: <br> <span style="color:#ffd32a">akhouad.samy@gmail.com</span></p>
                          </div>
                          <div class="col-md-6">
                            <h2 class="getTitle">Get in Touch</h2>
                            <div class="email">
                              <form action="" method="post">
                                
                                <div class="form-group">
                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Email" name="email">
                                </div>
                                <div class="form-group">
                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Your Message" name="message"></textarea>
                                </div>
                                <button type="submit" name="send" class="btn btn-warning btn-lg btn-block">Send Message</button>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div>
            <!-- </div> -->
        </div>
        <footer>
          <ul style="list-style: none; margin: 0; padding: 0">
            <a href=""><li><i class="fa fa-facebook-square"></i></li></a>
            <a href=""><li><i class="fa fa-google-plus-square"></i></li></a>
            <a href=""><li><i class="fa fa-linkedin-square"></i></li></a>
          </ul>
        </footer> 
    </div>







    <script src="myPortfolio.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>