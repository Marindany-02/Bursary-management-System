<nav class="navbar navbar-expand-sm bg-light nav-light">
  <div class="container-fluid">
    <div class="navbar-header col-lg-10">
<a class="navbar-brand"href="" sytle="font-weight:bold; font-size: 24px:">php report</a>
    </div>
  </div>
   </nav>
<?php include('connect.php');?>
<div class="container">
    <div class="row">
<form action="index.php" method="POST">
    <div class="col-md-3">
<label control-label>choose constituency</label>
<select name="constituency" id="" class="form-control"> 
<option value="">Select</option>
    <?php
    $query="SELECT * FROM applicants";
    $result=mysqli_query($conn,$query) or die ('error');
    if(mysqli_num_rows($result)> 0){
        while($row=mysqli_fetch_assoc($result)){?>
        <option value=<?php echo $row['id']?>><?php echo $row['constituency']?>
    </option>
    <?php }
    }
    ?>
</select>
    </div>
    <div class="col-md-3">
    <label control-label>choose Ward</label>
<select name="ward" id="" class="form-control"> 
    <option value="">Select</option>
    <?php
    $query="SELECT * FROM applicants";
    $result=mysqli_query($conn,$query) or die ('error');
    if(mysqli_num_rows($result)> 0){
        while($row=mysqli_fetch_assoc($result)){?>
        <option value=<?php echo $row['id']?>><?php echo $row['ward']?>
    </option>
    <?php }
    }
    ?>
</select>
        </div>

        <div class="col-md-3">
        <label control-label>choose status</label>
<select name="status" id="" class="form-control"> 
<option value="">Select</option>
    <?php
    $query="SELECT * FROM applicants";
    $result=mysqli_query($conn,$query) or die ('error');
    if(mysqli_num_rows($result)> 0){
        while($row=mysqli_fetch_assoc($result)){?>
        <option value=<?php echo $row['id']?>><?php echo $row['status']?>
    </option>
    <?php }
    }
    ?>
</select>
        </div>
        <div class="col-md-3">
        <label control-label>choose Amount</label>
<select name="amount" id="" class="form-control"> 
<option value="">Select</option>
    <?php
    $query="SELECT * FROM applicants";
    $result=mysqli_query($conn,$query) or die ('error');
    if(mysqli_num_rows($result)> 0){
        while($row=mysqli_fetch_assoc($result)){?>
        <option value=<?php echo $row['id']?>><?php echo $row['amount']?>
    </option>
    <?php }
    }
    ?>
</select>
        </div>

        <div class="col-md-3">
            <label control-label style="padding-top:40px;"></label>
            <input type="submit" name="submit" class="btn btn-primary" id="submit" value"Submit">
        </div>
</form>
    </div>
    <hr>
    <div class="row">
<table class="table">
    <thead>
        <tr>
            <th scope="col">constituency</th>
            <th scope="col">ward</th>
            <th scope="col">status</th>
            <th scope="col">amount</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $limit=5;
        $getquery="select* from applicants";
        $result=mysqli_query($conn,$getquery);
        $total_rows=mysqli_num_rows($result);
        $total_pages=ceil($total_rows/$limit);
        if(!isset($_GET["page"])){
            $page_number = 1;
        }else{
           $page_number=$_GET['page']; 
        }
        $initial_page=$page_number-1 * $limit;
        if(!isset($_POST['submit'])){
            $getquery="SELECT";
    
        }
        ?>
    </tbody>
</table>
    </div>
</div>
    <!-- /#wrapper -->

</script>





//
