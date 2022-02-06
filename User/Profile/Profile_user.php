<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php include '../../inc/head.php'; ?>
    <link rel="stylesheet" href="../../css/profile_user.css">
  
</head>
<body>
    <?php include '../../inc/menu.php'; ?>
    <div class="container_separate">
        <div class="wrapper">
            <?php include '../../inc/Sidebar_profile_user.php'; ?>
            <div class="card" style="padding: 20px; margin-top: 30px;border: 0;width: 80%;" id="TableDetail">
                <div class="header"><h3>บัญชีของฉัน</h3></div><hr> 
                        <form>
                            <div class="separate_content">
                                <div class="block-content">
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
                                            <label>Rapseedza01@hotmail.com</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div  style="text-align:right;">
                                                <label>หมายเลขโทรศัพท์</label>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <label>0988019656</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div  style="text-align:right;">
                                                <label>ชื่อ</label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label>Thanasit</label>
                                        </div>
                                        <div class="col-2-sm">
                                            <div  style="text-align:right;">
                                                <label>นามสกุล</label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label>Aiosakun</label>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                

                                <div class="block-img" style="padding: 20px 0;">
                                    <div class="profile">
                                        <img class="profile-picture" src="../../img/rap.jpg" />
                                    </div>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="buttons">
                                    <input type="button" class="btn-hover color-7" style="margin-top: 20px;" 
                                    onclick="EDIT()" value="แก้ไข">
                                </div>
                            </div>
                        </form>

            </div>
            
        </div>
        
    </div>

    <script type="text/javascript">
         function EDIT(){
            location.replace("edit_profile_user.php")
         }
        /* function ACC(){
            $.ajax({
                url : "Acc_user.php",
                type: "GET",
                success:function(result){
                    $('#TableDetail').html(result);
                    
                }

	});

         }
         TableDetail();
         */
    </script>


</body>
</html>
