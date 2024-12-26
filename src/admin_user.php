<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard/user</title>
    <link rel="stylesheet" href="../asset/css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="container">
        <?php include '../backend/adminHandler.php'?>
        <?php include "admin.php"; ?>
        <div class="content">
            <div class="top">
                <div class="upper">
                    <h2>User</h2>
                    <input class="search" type="text" name="" id="search" placeholder="Search..." oninput="fetchUser()">
                </div>              
                                               
            </div>
            
            <div class="success-screen" id="popup-result">
                <div class="success-window">
                    <div class="close-btn" onclick="onclickCloseResult()">
                        <img src="../asset/icon/close.svg" alt="">
                    </div>
                    <div class="body">
                        <span class="material-symbols-outlined size">check_circle</span>
                        <h1>Delete Successfully</h1>
                    </div>
                    <button class="btnDone" onclick="onclickCloseResult()">Done</button>
                </div>
            </div>
            <div class="content-part">
                             
                <?php include'../backend/userAccountContent.php'?>        
            </div>
        </div>
    </div>
    <script>
        function onclickMenu(){
            var sidebar = document.getElementById("side-bar");
            if (sidebar.style.display === "flex") {
                sidebar.style.display = "none";  
            } else {
                sidebar.style.display = "flex"; 
            }
        }
        function onclickCloseResult(){
            document.getElementById("popup-result").style.display = "none";
            window.location.reload();
        }    
        function logout() {
            fetch('../backend/adminLogout.php')
            .then(data => {
                location.reload();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
 
        
    </script>
    <script src="../asset/js/user_api.js"></script>
</body>
</html>