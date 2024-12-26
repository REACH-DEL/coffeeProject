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
            <div class="setting">
                <h1>Admin Setting</h1>
                <form method="post" id="updateForm">
                    <p>New admin name</p>
                    <input type="text" name="admin_name" id="" placeholder="Enter new admin name..."><br>
                    <p>New password</p>
                    <input type="password" name="pw" id="" placeholder="Enter new password..."><br>
                    <input type="submit" value="Update" class="updateBtn">
                </form>
            </div>

            
            <div class="success-screen" id="popup-result">
                <div class="success-window">
                    <div class="close-btn" onclick="onclickCloseResult()">
                        <img src="../asset/icon/close.svg" alt="">
                    </div>
                    <div class="body">
                        <span class="material-symbols-outlined size">check_circle</span>
                        <h1>Your Security has changed</h1>
                    </div>
                    <button class="btnDone" onclick="onclickCloseResult()">Done</button>
                </div>
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
        
        document.getElementById('updateForm').addEventListener("submit", function(e){
            e.preventDefault();
            const formData = new FormData(document.getElementById('updateForm'));
            fetch('../backend/adminAccount.php', {
                method: 'POST',
                body: formData,
            }).then(response => response.text())
            .then((data) =>{
                if (data.includes('success')){
                    document.getElementById('popup-result').style.display = 'flex';
                    this.reset();
                }else if(data.includes('fail')){
                    alert ("error");
                }
            }).catch((err)=>{
                console.log("Error: " + err);
            })
        })
        
    </script>
</body>
</html>
