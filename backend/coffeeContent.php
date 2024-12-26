<?php 
    include '../backend/dbCon.php';
    $query = 'SELECT * FROM tbl_product where 1';
    $search = isset($_GET['search'])? mysqli_real_escape_string($dbCon, $_GET['search']): '';
    $type = isset($_GET['type'])? intval($_GET['type']): 0;
    if (!empty($search)){
        $query .= " AND (pname like '%$search%')";
    }
    if (!empty($type)){
        $query .= " AND cid = '$type'";
    }
    $result = mysqli_query($dbCon, $query);
    if ($result->num_rows> 0){
        while($row = $result->fetch_assoc()){
            ?>           
            <div
                class="rounded-lg shadow-2xl border-[1px] border-light-brown p-[15px] w-[250px] h-[360px] bg-dark-brown"
            >
                <div class="w-full h-[200px]">
                    <img
                        src="<?php echo $row['image']?>"
                        class="w-full h-full object-cover"
                        alt="milk-shark"
                    />
                </div>
                <div class="mt-1">
                    <h2 class="text-white text-xl font-poppin m-0 p-0"><?php echo $row['pname']?></h2>
                    <p class="text-sm text-white font-light m-0 p-0">
                        <?php echo $description = strlen($row['description']) < 20 ? $row['description']: substr($row['description'], 0, 19). '...'?>
                    </p>
                </div>
                <div class="flex justify-between">
                    <h3 class="text-white text-xl font-normal">$<?php echo $row['price']?></h3>
                    <div class="flex gap-2">
                        <span class="remove-item cursor-pointer" onclick="removeItem(<?php echo $row['pid']?>)">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14"
                            />
                        </svg>
                        </span>
                        <input class="text-white text-xl font-normal bg-dark-brown border-none w-[10px]" type="text" name="qty" id="qty-<?php echo $row['pid']?>" value="1" >
                        <span class="add-item cursor-pointer" onclick="addItem(<?php echo $row['pid']?>)">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 4.5v15m7.5-7.5h-15"
                            />
                        </svg>
                        </span>                   
                    </div>
                </div>
                <button
                class="bg-gradient-to-r from-light-brown to-pink-500 text-slate-200 font-semibold text-lg rounded-xl shadow-md p-[10px] w-full mt-1"
                onclick="addToCard(<?php echo $row['pid']?>)">
                Add to Cart
                </button>
            </div>
            
            <?php
        }
    }else
    
?>