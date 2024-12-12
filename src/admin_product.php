<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard/place</title>
    <link rel="stylesheet" href="../asset/css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="container">
        <?php include "admin.php"; ?>
        <div class="content">
            <div class="top">
                <div class="upper">
                    <h2>Product</h2>
                    <div class="search">
                        <input type="text" name="" id="search" placeholder="Search...">
                        <button><img src="../asset/icon/searchIcon.svg" alt=""></button>
                    </div>
                </div>
                
                <div class="option">
                    
                    <select name="" id="">
                        <option value="">All</option>
                        <option value="">Drink</option>
                        <option value="">Snack</option>
                        <option value="">Dessert</option>
                    </select>
                    <div id="addBtn" class="addBtn" onclick="onclickOpen()">
                        <span class="material-symbols-outlined size">add</span>
                        <p>Add</p>
                    </div>
                </div>              
                                               
            </div>
            <div class="add-popup" id="pop-up">
                <div class="add-window">
                    <div class="title">
                        <h3>Add Product</h3>
                        
                        <div class="closeBtn" onclick="onclickClose()">
                            <span class="material-symbols-outlined size">close</span>
                        </div>                     
                    </div>
                    <hr>
                    
                    <div class="add-content">                                      
                        <form id="placeForm" method="post" enctype="multipart/form-data">
                            <input type="text" name="name" placeholder="Enter Product Name" required>
                            <textarea name="description" placeholder="Enter Description" required></textarea>                           
                            <input type="text" name="price" placeholder="Enter Product price" required>
                            <select name="ctype" id="">
                            <?php include '../backend/category.php';
                                if($result->num_rows>0){
                                    while($row = $result->fetch_assoc()){
                            ?>
                                    <option value="<?php echo $row["cid"]?>"><?php echo $row["category"]?></option>
                            <?php        }
                                }
                            ?>
                            </select>
                            Upload Image: 
                            <input type="file" name="img" title="img" required>
                            <input type="submit" value="Add now">
                        </form>
                    </div>                   
                </div>            
            </div> 
            <div class="success-screen" id="popup-result">
                <div class="success-window">
                    <div class="close-btn" onclick="onclickCloseResult()">
                        <span class="material-symbols-outlined size">close</span>
                    </div>
                    <div class="body">
                        <span class="material-symbols-outlined size">check_circle</span>
                        <h1>Successfully</h1>
                    </div>
                    <button class="btnDone" onclick="onclickCloseResult()">Done</button>
                </div>
            </div>
            <?php $addQw = ''?>
            
            <div class="content-part">
                             
                <?php include'../backend/productContent.php'?>        
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
        
        document.querySelectorAll(".typeBtnList").forEach(btn => {
            btn.addEventListener("click", onclickType);
        });
        function onclickOpen(){
            document.getElementById("pop-up").style.display = "flex";
        }
        function onclickClose(){
            document.getElementById("pop-up").style.display = "none";
        }
        function onclickCloseResult(){
            document.getElementById("popup-result").style.display = "none";
            window.location.reload();
        }

        
        
    </script>
    <script src="asset/js/api.js"></script>
</body>
</html>