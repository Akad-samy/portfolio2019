<?php
    require('header.php');
    try{
        $bdd = new PDO('mysql:host=localhost; dbname=portfolio; charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch(Exception $e){
    
        die('Erreur : '.$e->getMessage());
    }
?>

    <h1 class="text-center py-4" style="text-transform: uppercase">Dashboard</h1>

    <div class="container">
        <div class="d-flex justify-content-center align-items-center  flex-column" style="height:80vh">
            <table class="table table-striped table-dark text-center">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">U.D</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            $reponse = $bdd->query('SELECT * FROM data ORDER BY id DESC');
                            while($donnees = $reponse->fetch()){
                        ?>
                    <tr>
                        <th scope="row"><?= $donnees['id'] ?></th>
                        <td><?= $donnees['title'] ?></td>
                        <td><img src="../imgs/<?= $donnees['image'] ?>" alt="" width="50"></td>
                        <td>
                            <a href="update.php?id=<?= $donnees['id'];?>"><button type="submit" class="btn btn-success">Update</button></a>
                            <a href="delete.php?id=<?= $donnees['id'];?>&delete=<?= $donnees['image'];?>"><button type="submit" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
            <a href="insert.php"><button type="submit" class="btn btn-warning">Add Project</button></a> 
        </div>
    </div>
















    </div>
    
</body>
</html>