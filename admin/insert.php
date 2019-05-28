<?php
    require("header.php");
    if(isset($_POST['submit'])){
        require('upload.php');
        $title = $_POST['title'];
        $file = $_FILES['file']['name'];
        var_dump($file);

        try{
            $bdd = new PDO('mysql:host=localhost; dbname=portfolio; charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch(Exception $e){
        
            die('Erreur : '.$e->getMessage());
        }
        
        if(!empty($title) && !empty($file)){
        
            $reponse = $bdd->query("INSERT INTO data VALUES('', '$title', '$file')");
            $reponse->closeCursor();
             ?>
                 <div class="alert alert-success text-center">success</div>
             <?php
             header('location: ./dashboard.php');
         }else{
             ?>
        
                 <div class="alert alert-danger text-center">Veuillez Remplir les champs vide SVP</div>
        
             <?php
         }
        
        }


?>

            <h1 class="text-center py-4" style="text-transform: uppercase">Insert</h1>
            <div class="container">
            
                <div class="row">
                    <div class="col-md-9">
                        <div style="height: 80vh">

                            <form class="p-3" action="insert.php" method="post" enctype="multipart/form-data" style="position:absolute; width:100%; top:50%; transform: translateY(-50%)">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="title" name="title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                                    </div>
                                </div>
                                <a href="insert.php"><button type="submit" name="submit" class="btn btn-warning">Add Project</button></a> 
                                <a href="dashboard.php"><button type="button" class="btn btn-dark">Back</button></a> 
                            
                            </form>

                        </div>
                        
                    </div>
                </div>

            </div>





        </div>
    
    </body>
</html>