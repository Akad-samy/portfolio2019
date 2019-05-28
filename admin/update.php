<?php
    require("header.php");
    try{
        $bdd = new PDO('mysql:host=localhost; dbname=portfolio; charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch(Exception $e){
    
        die('Erreur : '.$e->getMessage());
    }
    if(isset($_POST['submit'])){
        require('upload.php');
        $id = $_GET['id'];
        $title = $_POST['title'];
        $file = strlen($_FILES['file']['name']) > 0 ? $_FILES['file']['name'] : null;

        if($file != null){
            $update = $bdd->query("UPDATE data SET title='$title',image='$file' WHERE id=$id");
        }else{
            $update = $bdd->query("UPDATE data SET title='$title' WHERE id=$id");
        }

        $update->closeCursor();
        header('location: ./dashboard.php');    
    }


?>

            <h1 class="text-center py-4" style="text-transform: uppercase">Update</h1>
            <div class="container">
            
                <div class="row">
                    <div class="col-md-9">
                        <div style="height: 80vh">

                            <form class="p-3" method="post" enctype="multipart/form-data" style="position:absolute; width:100%; top:50%; transform: translateY(-50%)">
                                
                            <?php
                                if(isset($_GET['id'])){
                                    $id = $_GET['id'];
                                    $res = $bdd->query("SELECT * FROM data WHERE id = $id");
                                    // $res->closeCursor();
                                    $row = $res->fetch();

                                    // echo '<pre>' . var_export($row, true) . '</pre>';   
                            ?>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="title" name="title" value="<?=$row['title']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                                    </div>
                                </div>
                                <a href="insert.php"><button type="submit" name="submit" class="btn btn-warning">Save</button></a> 
                                <a href="dashboard.php"><button type="button" class="btn btn-dark">Back</button></a> 
                                <?php
                                }
                                ?>
                            </form>

                        </div>
                        
                    </div>
                </div>

            </div>





        </div>
    
    </body>
</html>