<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile User</title>
    <?php include '../../inc/head.php'; ?>
    <link rel="stylesheet" href="../../css/profile_user.css">
</head>
<body>
    <?php include '../../inc/menu.php'; ?>
    <div class="container_separate">
        <div class="wrapper">
            <?php include '../../inc/Sidebar_profile_user.php'; ?>  
            <div class="card" style="padding: 20px; margin-top: 30px;border: 0;width: 80%;" id="TableDetail">
                <div class="header"><h3>ข้อมูลบัญชี</h3></div><hr> 
                    <form>
                        <div class="block-content">
                            <div class="user-details">
                                <div class="row">
                                    <div class="col-3">
                                        <div  style="text-align:right;">
                                            <label>ชื่อผู้ใช้</label>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <label>Thanasit Aiosakun</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div  style="text-align:right;">
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="input-box">
                                            <input type="text" name="EDIT_LAST_NAME" id="EDIT_LAST_NAME">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div  style="text-align:right;">
                                            <label>หมายเลขโทรศัพท์</label>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="input-box">
                                            <input type="text" name="EDIT_LAST_NAME" id="EDIT_LAST_NAME">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div  style="text-align:right;">
                                            <label>ชื่อ</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-box">
                                            <input type="text" name="EDIT_NAME" id="EDIT_NAME">
                                        </div>
                                    </div>
                                    <div class="col-2-sm">
                                        <div  style="text-align:right;">
                                            <label>นามสกุล</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-box">
                                            <input type="text" name="EDIT_LAST_NAME" id="EDIT_LAST_NAME">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="buttons">
                                    <input type="button" class="btn-hover edit" style="margin-top: 20px;" 
                                    onclick="SUBMIT_EDIT()" value="บันทึก">

                                    <input type="button" class="btn-hover back" style="margin-top: 20px;" 
                                    onclick="SUBMIT_back()" value="ย้อนกลับ">
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </form>
            </div>
        </div>      
    </div>

</body>
</html>