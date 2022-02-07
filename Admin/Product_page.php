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
                <select class="form-control  form-control-sm select2" id="COLOR">
                    <option value="">-- N/A --</option>
                    <?php
                    
                    $select_stmt006 = $db->prepare("SELECT * FROM `COLOR`  ORDER BY COLOR_ID");
                    $select_stmt006->execute();
                    
                    while ($row006 = $select_stmt006->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?= $row006['COLOR_NAME'] ?>"><?= $row006['COLOR_NAME'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label>Cost</label>
                <input class="form-control form-control-sm"type="text" id="COST" OnKeyPress="return chkNumber(this)">
            </div>
            <div class="col-3">
                <label>Currency</label>
                <select class="form-control  form-control-sm select2" id="CURRENCY">
                    <option value="">-- N/A --</option>
                    <?php
                    
                    $select_stmt001 = $db->prepare("SELECT * FROM `master_group_code` WHERE type ='CURRENCY' ORDER BY id");
                    $select_stmt001->execute();
                    
                    while ($row001 = $select_stmt001->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?= $row001['id'] ?>"><?= $row001['name'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-3">
                <label>Price</label>
                <input class="form-control form-control-sm"type="text" id="PRICE" OnKeyPress="return chkNumber(this)">
            </div>
            <div class="col-3">
                <label>Category</label>
                <select class="form-control  form-control-sm select2" id="CATEGORY">
                    <option value="">-- N/A --</option>
                    <?php
                    
                    $select_stmt002 = $db->prepare("SELECT * FROM `master_group_code` WHERE type ='CATEGORY' ORDER BY id");
                    $select_stmt002->execute();
                    
                    while ($row002 = $select_stmt002->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?= $row002['id'] ?>"><?= $row002['name'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label>Brand</label>
                <select class="form-control  form-control-sm select2" id="BRAND">
                    <option value="">-- N/A --</option>
                    <?php
                    
                    $select_stmt003 = $db->prepare("SELECT * FROM `master_group_code` WHERE type ='BRAND' ORDER BY id");
                    $select_stmt003->execute();
                    
                    while ($row003 = $select_stmt003->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?= $row003['id'] ?>"><?= $row003['name'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-3">
                <label>Version</label>
                <input class="form-control form-control-sm"type="text" id="VERSION">
            </div>
            <div class="col-2">
                <label>Image</label>
                <input class="form-control form-control-sm"type="file" id="IMAGE" name="IMAGE">
            </div>
            <div class="col-2">
                <label>Date</label>
                <input class="form-control form-control-sm"type="text" id="DATE" readonly>
            </div>
            <div class="col-2">
                <label>Create By</label>
                <select class="form-control  form-control-sm select2" id="CREATE_BY">
                    <option value="">-- N/A --</option>
                    <?php
                    
                    $select_stmt005 = $db->prepare("SELECT * FROM `user` WHERE group_user ='admin' ORDER BY user_id");
                    $select_stmt005->execute();
                    
                    while ($row005 = $select_stmt005->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?= $row005['user_id'] ?>"><?= $row005['username'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label>Supplier</label>
                <select class="form-control  form-control-sm select2" id="SUPPLIER">
                    <option value="">-- N/A --</option>
                    <?php
                    
                    $select_stmt004 = $db->prepare("SELECT * FROM `master_group_code` WHERE type ='SUPPLIER' ORDER BY id");
                    $select_stmt004->execute();
                    
                    while ($row004 = $select_stmt004->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?= $row004['id'] ?>"><?= $row004['name'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-3">
                <label>Stock</label>
                <input class="form-control form-control-sm"type="text" id="STOCK" OnKeyPress="return chkNumber(this)">
            </div>
            <div class="col-2" style="margin-top: 1.5rem;">
                <button type="button"  class="btn btn-success" name ='save' style="width:100%" onclick="SAVEPRODUCT()" >Save</button>
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
       function chkNumber(ele){
	
        var vchar = String.fromCharCode(event.keyCode);
        if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
            ele.onKeyPress=vchar;
        
        }
        
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

    function SAVEPRODUCT(){
		//var CUST_CODE = $('#CUST_CODE').val();
		var ITEM_CODE = $('#ITEM_CODE').val();
		var ITEM_NAME = $('#ITEM_NAME').val();
		var DESCRIPTION = $('#DESCRIPTION').val();
        var COLOR = $('#COLOR').val();
		var COST = $('#COST').val();
        var CURRENCY = $('#CURRENCY').val();
        var PRICE = $('#PRICE').val();
        var CATEGORY = $('#CATEGORY').val();
        var BRAND = $('#BRAND').val();
        var VERSION = $('#VERSION').val();
        var IMAGE = $('#IMAGE').val();
        var CREATE_BY = $('#CREATE_BY').val();
        var SUPPLIER = $('#SUPPLIER').val();
        var STOCK = $('#STOCK').val();
        
		//alert(ROW);
		//if(ROW != ''){alert('รหัสลูกค้าเคยถูกสร้างไว้แล้ว'); return false;}
		
		
		var con = confirm('ต้องการเพิ่มข้อมูลหรือไม่ ?');
		if(!con)return false;
		
		var dataSet = {"ITEM_CODE":ITEM_CODE, "ITEM_NAME":ITEM_NAME, "DESCRIPTION":DESCRIPTION, "COLOR":COLOR
        , "COST":COST, "CURRENCY":CURRENCY, "PRICE":PRICE, "CATEGORY":CATEGORY, "BRAND":BRAND, "VERSION":VERSION, "IMAGE":IMAGE
        , "CREATE_BY":CREATE_BY, "SUPPLIER":SUPPLIER, "STOCK":STOCK};
		//console.log(dataSet);
//
		$.ajax({
			url : "Product_insert.php",
			type: "POST",
			data: dataSet,
			success:function(result){
				console.log(result);
				if(result == 'INSERT'){
					alert('เพิ่มข้อมูลสำเร็จ');
					TableDetail();
					
					return false;
				}
			
				
				
			}
		});
	}


    </script>
        
</body>
</html>
