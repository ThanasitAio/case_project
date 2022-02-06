<div class="sidebar">
    <ion-header-bar class="bar-profile">
        <div class="profile">
            <img class="profile-picture" src="../../img/rap.jpg" />
            <h4 class="name">Thanasit Aiosakun</h4>
        </div>
    </ion-header-bar>
    <ul>
        <li><a href="Profile_user.php" onclick="ACC()"><i class="fas fa-home"></i>บัญชีของฉัน</a></li>
        <li><a href="#" onclick="BUY()"><i class="fas fa-user"></i>การซื้อของฉัน</a></li>
        <li><a href="#" onclick="SEND()"><i class="fas fa-address-card"></i>ข้อมูลที่อยู่จัดส่งสินค้า</a></li>
        <li><a href="#" onclick="LIKE()"><i class="fas fa-project-diagram"></i>รายการโปรดของคุณ</a></li>
        <li><a href="Edit_profile_user.php" onclick="DATE_ACC()"><i class="fas fa-blog"></i>ข้อมูลบัญชี</a></li>
    </ul> 
</div>

    <script type="text/javascript">
/*
    function ACC(){
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
