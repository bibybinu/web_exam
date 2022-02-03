<!DOCTYPE html>
<html>
<head>
	<title>Grocery Management</title>
</head>
<style>
  
   
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<body style="background-color: #eee;"><br>
<center class="row">
    <h3>Enter Product Details</h3>
    <form action="insert.php" method="POST" class="col-md-2 col-md-offset-5">
        
        
        <input type="text" class="form-control" name="name" required="" id="name" placeholder="Product Name" pattern="[A-Z,a-z, ]{3,}" onblur="isnull(this.value)"><br>

        <input type="text" class="form-control" name="brand" required="" id="brand" placeholder="Brand" onblur="isnull(this.value)"> <br>
       
        <select  name="category" class="form-control" required="">
            <option selected="" disabled="">Select Category</option>    
            <option>Vegetables</option>
            <option>Fruits</option>
            <option >Frozen Foods </option>
            <option >Snacks</option>
            <option >Beverages</option>
            <option >Cereal</option>
                 
        </select>
        <br>
        <input type="text" name="price" class="form-control" required="" name="" placeholder="Unit Price" onblur="isnull(this.value)"> <br>
        <input type="submit" class="btn btn-success btn-sm" name="insert" value="Insert">
        
    </form>
</center>

<div class="row">
<center class="container col-md-4 col-md-offset-4">
    <h2>Product Details</h2>
    <table class="table table-hover" style="background-color: #fff;"  border="0" cellpadding="15" >
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Brand</td>
            <td>Category</td>
            <td>Unit Price</td>
           
            
        </tr>
        
        <?php 
       $conn= mysqli_connect("localhost","root","","grocery");
        if(!$conn)
        {
            echo "Error in establishing connection";
        }

            $r=mysqli_query($conn,"select * from product");
            
            while($row= mysqli_fetch_assoc($r))
            {
               
        ?>
        
        <tr>
             <td><?php echo $row['product_id']; ?></td>
            <td><?php echo $row['product_name']; ?></td>
            <td><?php echo $row['brand']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['price']; ?></td>
            
        </tr>
        
        <?php 
        
            }
            ?>
    </table>
</center>
</div>
</body>
<script type="text/javascript">
    function isnull(x)
    {
        if(x=="")
            alert("Field cannot be empty");
    }
</script>
</html>