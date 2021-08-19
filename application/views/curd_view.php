<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CRUD Operations using CodeIgniter </title>
</head>
<body>
<h1 align ="center"> This is Curd Operations </h1>
              <h3>All Products List</h3>
              <input type="button" href='#'; value="Add Products"  />
              <table border = "1" width = "100%">
          <thead>    
         <tr>
            <th>Sid</th>
            <th>Product Name</th>
            <th>Type</th>
            <th>Relase Version</th>
            <th>Action</th>
         </tr>
         </thead>
         <tbody>
         <?php foreach ($product_details as $products): ?>
                    <tr>
                          <td>
                                <?php echo $products->sid; ?>
                          </td>
                          <td>
                                <?php echo $products->product_name; ?>
                          </td>
                          <td>
                                <?php echo $products->type; ?>
                          </td>
                          <td>
                                <?php echo $products->version_release; ?>
                          </td>
                          <td>
                          <input type="button" href="<?php echo base_url(); ?>curd/editProduct/<?php echo $products->sid; ?>" value="Edit" />
                          <input type="button" href='#'; value="Delete" />
                          <button type="submit" id="edit-button">Edit</button>
                          <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
                          </td>
                    </tr>
            <?php  endforeach;   ?>
         </tbody>
      </table>
      <form action = "<?php echo base_url(); ?>curd/addProduct" method="post" >
    <div class="form-group">
     <label for="product_name">Product name</label>
     <div class="col-md-4">  
      <input type="text" name="productname"  placeholder="PRODUCT NAME" class="form-control">
    </div>

 <div class="form-group">
     <label for="type">Type</label>
     <div class="col-md-4">  
      <input type="text" name="type"  placeholder="TYPE" class="form-control">
    </div>

 <div class="form-group">
     <label for="version">Version</label>
     <div class="col-md-4">  
      <input type="text" name = "version" placeholder="VERSION RELASE" class="form-control">
    </div>
<br>
<div class="form-group">
<input type="submit" name ="insert" value="Add Products"  />
  </div>
  </fieldset>
</form>
<?php if($this->session->flashdata('error')): ?>
<?php echo $this->session->flashdata('error'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('inserted')): ?>
<?php echo $this->session->flashdata('inserted'); ?>
<?php endif; ?>


</body>
</html>