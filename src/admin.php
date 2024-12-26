<style>
    @import url("https://fonts.googleapis.com/css2?family=Caveat&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    }
    ul {
    list-style: none;
    }
    a {
    text-decoration: none;
    }
    button {
    border: none;
    background: none;
    cursor: pointer;
    }
    img {
    width: 100%;
    }
    .container {
        display: flex;
        width: 100vw;
        padding: 20px;
        height: 100vh;
    }
    aside{
        width: 20%;
    }
    .tab-box {
    box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.3);   
    display: flex;
    height: 100%;
    overflow: hidden;
    padding: 20px;
    gap: 20px;
    flex-direction: column;
    background-color: rgb(255, 255, 255);
    border-radius: 20px;
    position: relative;
    }
    .tab-box button{
        position: absolute;
        bottom: 20px;
        font-size: 18px;
        color: rgb(83, 83, 83);
        padding: 5px;
    }
    .tab-box button:hover{
        background-color: rgb(200, 200, 200);
    }
    .tab-box .title {
    font-size: 35px;
    color: brown;
    }
    .tab-box .tab-bar {
    display: flex;
    flex-direction: column;
    }
    .tab-box .tab-bar .tab-item {
    display: flex;
    padding: 10px;
    }
    .tab-box .tab-bar .tab-item a {
    padding: 5px;
    display: flex;
    gap: 5px;
    flex-direction: row;
    }
    .tab-box .tab-bar .tab-item:hover {
    background-color: rgb(200, 200, 200);
    }
    .tab-box .tab-bar .tab-item a span {
    color: rgb(83, 83, 83);
    }
    .tab-box .tab-bar .tab-item .tab-text {
    font-size: larger;
    color: rgb(83, 83, 83);
    }
    .menuBtn{
        display: none;
        cursor: pointer;
    }
    @media(max-width: 1087px){
        .content .top {
            right: 10px;
            display: block;
            height: 20%;
        }
        .content .top .upper{
            width: 100%;
        }
        .content .top .option{
            width: 100%;
            justify-content: flex-end;
        }
    }
    @media(max-width: 800px){
        .content .top {
            right: 10px;
            display: block;
            height: 20%;
        }
        .tab-bar{
            display: flex;
        }
        .tab-text{
            display: none;
        }
        .tab-item{
            display: flex;
            justify-content: center;
        }
        .tab-box .title{
            font-size: 20px;
        }
        .content-card .btn-part{
            gap: 5px;
        }
        .content-card .right-part .info {
            font-size: 12px;
        }
        .content-card .right-part .info h3{
            font-size: 14px;
        }
        .content-card .right-part{
            width: 100%;
        }
        .content-card .btn-part p{
            font-size: 12px;
        }
    }
    @media(max-width:504px){
        .content .top {
            width: 80%;
        }
        .tab-box{
            display: none;
            position: fixed;
            height: 90%;
            width: 50%;
            z-index: 10;
        }
        .tab-box .tab-bar .tab-item .tab-text{
            font-size: 15px;
            display: flex;
        }
        .tab-box .title{
            font-size: 20px;
        }
        .content{
            width: 200%;
        }
        .menuBtn{
            display: block;
        }
        .content-card .right-part{
            width: 100%;
        }
        .content-card .btn-part{
            gap: 5px;
        }
        .content-card .right-part .info {
            font-size: 10px;
        }
        .content-card .right-part .info h3{
            font-size: 12px;
        }
        .content-card .btn-part p{
            font-size: 10px;
        }
    }
</style>
<aside>
    <div class="menuBtn" onclick="onclickMenu()"><span class="material-symbols-outlined">menu</span></div>
    <div class="tab-box" id="side-bar">
        <h1 class="title">Admin</h1>
        <h1 class="title">Cafe Shop</h1>
        <ul class="tab-bar">
            <li class="tab-item">
                <a href="admin_product.php">
                    <span class="material-symbols-outlined">category</span>
                    <p class="tab-text">Product</p>
                </a>
            </li>
            <li class="tab-item">
                <a href="Analytics.php">
                    <span class="material-symbols-outlined">analytics</span>
                    <p class="tab-text">Analysis</p>
                </a>
            </li>
            <li class="tab-item">
                <a href="admin_user.php">
                    <img src="../asset/icon/user.png" alt="">
                    <p class="tab-text">User</p>
                </a>
            </li>
            <li class="tab-item">
                <a href="admin_setting.php">
                    <span class="material-symbols-outlined">settings</span>
                    <p class="tab-text">Setting</p>
                </a>
            </li>
        </ul> 
        <button onclick="logout()"><img src="../asset/icon/logout.svg" alt="" width="34px" height="34px">Logout</button>      
    </div>
</aside>