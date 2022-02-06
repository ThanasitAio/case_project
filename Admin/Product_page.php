<?php
    require_once "../db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin ProDuct</title>
    <?php include '../inc/head.php'; ?>
    <link rel="stylesheet" href="../css/admin_product.css">
   
</head>
<body>
    <?php include '../inc/menu.php'; ?>
   
    <div class = "card">
        <div class="card" style="padding:0px; width:100%; margin-bottom:10px;">
        	<div align="center" style="width:100%;">
                <div style="width:100%;  font-size:12px;padding-top:0px; background-color:#F8F8F8; 
                height:20rem; overflow:auto; " align="left" id="TableDetail">  
                
                
				</div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-3">
                <label>Item Code</label>
                <input class="form-control form-control-sm"type="text" id="ITEM_CODE">
            </div>
            <div class="col-3">
                <label>Item Name</label>
                <input class="form-control form-control-sm"type="text" id="ITEM_NAME">
            </div>
            <div class="col-3">
                <label>Description</label>
                <input class="form-control form-control-sm"type="text" id="DESCRIPTION">
            </div>
            <div class="col-3">
                <label>Color</label>
                <input class="form-control form-control-sm"type="text" id="COLOR">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label>Cost</label>
                <input class="form-control form-control-sm"type="text" id="COST">
            </div>
            <div class="col-3">
                <label>Currency</label>
                <input class="form-control form-control-sm"type="text" id="CURRENCY">
            </div>
            <div class="col-3">
                <label>Price</label>
                <input class="form-control form-control-sm"type="text" id="PRICE">
            </div>
            <div class="col-3">
                <label>Category</label>
                <input class="form-control form-control-sm"type="text" id="CATEGORY">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label>Brand</label>
                <input class="form-control form-control-sm"type="text" id="COST">
            </div>
            <div class="col-3">
                <label>Version</label>
                <input class="form-control form-control-sm"type="text" id="CURRENCY">
            </div>
            <div class="col-2">
                <label>Image</label>
                <input class="form-control form-control-sm"type="file" id="IMAGE">
            </div>
            <div class="col-2">
                <label>Date</label>
                <input class="form-control form-control-sm"type="text" id="PRICE" readonly>
            </div>
            <div class="col-2">
                <label>Create By</label>
                <input class="form-control form-control-sm"type="text" id="CATEGORY">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label>Supplier</label>
                <input class="form-control form-control-sm"type="text" id="COST">
            </div>
            <div class="col-3">
                <label>Stock</label>
                <input class="form-control form-control-sm"type="text" id="CURRENCY">
            </div>
            <div class="col-2" style="margin-top: 1.5rem;">
                <button type="button"  class="btn btn-success" style="width:100%" onclick="Save()" >Save</button>
            </div>
            <div class="col-2" style="margin-top: 1.5rem;">
                <button type="button"  class="btn btn-info" style="width:100%" onclick="Update()" >Update</button>
            </div>
            <div class="col-2" style="margin-top: 1.5rem;">
                <button type="button"  class="btn btn-danger" style="width:100%" onclick="Delete()" >Delete</button>
            </div>
            
        </div>
        <input type="hidden" id="EDIT_ROW">
    
    </div>

    <script>
       

        
        function TableDetail(){
        $.ajax({
            url : "../Admin/Product_detail.php",
            type: "GET",
            success:function(result){
                $('#TableDetail').html(result);
                
            }
        });
        }
	
	TableDetail();

    </script>
        
</body>
</html>
