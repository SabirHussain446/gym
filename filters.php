<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Filterable Table</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
    <table class="table table-bordered table-striped" border="1px">
                                            <thead style="background-color: dodgerblue">
                                                <tr style="color: white">
                                                    <th>Name</th>
                                                    <th>F_Name</th>
                                                    <th>Image</th>
                                                    <th>Address</th>
                                                    <th>Gender</th>
                                                    <th>Age</th>
                                                    <th hidden="">Plan</th>
                                                    <th hidden="">Package</th>
                                                    <th>View</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody id="myTable">
  <?php 
  $conn = mysqli_connect('localhost', 'root', '', 'gym');
  $query = mysqli_query($conn, "SELECT trainee.trainee_id, trainee.name, trainee.f_name, trainee.image, trainee.address, trainee.gender, trainee.age, plans.plan_id, plans.name as plan_id, packages.package_id, packages.name as package_id from trainee inner join plans on trainee.plan_id=plans.plan_id inner join packages on trainee.package_id=packages.package_id");
 while($data = mysqli_fetch_array($query)){
 $trainee_id = $data['trainee_id'];
 ?>
                                         <tr>
                                         <td><?php echo $data['name'] ?></td>
                                         <td><?php echo $data['f_name'] ?></td>
                                         <td><img height="100px" width="100px" src=" <?php echo "images/".$data['image']; ?>" alt="images"/></td>
                                        <td><?php echo $data['address'] ?></td>
                                         <td><?php echo $data['gender'] ?></td>
                                         <td><?php echo $data['age'] ?></td>
                                        <td hidden=""><?php echo $data['plan_id'] ?></td>
                                         <td hidden=""><?php echo $data['package_id'] ?></td>
                                         <td><?php echo "<a href='view.php?trainee_id=$trainee_id'> View more</a> " ?></td>

                                         <td><?php echo "<a href='updatetrainee.php? trainee_id=$trainee_id'>update </a> " ?></td>  

                                         <td><?php echo "<a href='deletetrainee.php?trainee_id=$trainee_id'> delete </a> " ?></td> 
                                                                                             
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                                
                                            
                                            </tbody>

                                        </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
