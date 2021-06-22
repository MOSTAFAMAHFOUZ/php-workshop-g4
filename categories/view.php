<?php require_once '../inc/header.php';
include '../inc/conn.php';
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);

?>     

    <div class="jumbotron p-2 m-4">
        <h3 class=""> 
            <a class="btn btn-success btn-lg" href="<?php echo URL ."categories/add.php"; ?>" role="button">Add New Category </a>
        </h3>
    </div>
    <h1 class=" p-3 border display-4">  All Categories  </h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($row =  mysqli_fetch_array($result)): ?> 
                    <tr>
                        <th scope="row">1</th>
                        <td> <?php echo $row['name']; ?> </td>
                        <td>
                            <a href="#" class="btn btn-info">Edit <i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger">Delete <i class="bi bi-x-square-fill"></i></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                    
                </tbody>
                </table>

               
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

<?php require_once '../inc/footer.php'; ?>     




