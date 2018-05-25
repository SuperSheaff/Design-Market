<?php 
    $con = mysqli_connect("localhost", "admin", "password", "design_market");
    session_start();

        

    if (isset($_GET['category']) && $_GET['category'] != "none") {
        $category = $_GET['category'];
        $categorysql = " AND category='$category'";
    } else {
        $categorysql = "";
    }

    if (isset($_GET['budget'])) {
        $budget = $_GET['budget'];
        $budgetsql = " AND min_budget <= '$budget' AND max_budget >= '$budget'";
    } else {
        $budgetsql = "";
    }

    $sql = "SELECT * FROM posts WHERE completed='0'" . $categorysql . $budgetsql;

    $result = $con->query($sql);
    $totalposts = $result->num_rows;
?>
<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market - Home</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <?php
            if (!isset($_GET['page'])) {
                echo "<script>window.location.replace('./marketplace.php?page=1')</script>";    
            } else if ($_GET['page'] > ceil($totalposts/8)) {
                echo "<script>window.location.replace('./marketplace.php?page=1')</script>";
            } else  {
                $page = $_GET['page'];
            }
        ?>
        <!-- Space for scripts -->
        <script>
            function search() {
                var page = <?php echo $page ?>;
                var category = $("[name='category']").val();
                var budget = $("[name='budget']").val();
                var order =  $("[name='recent']").val();
                window.location.replace("./marketplace.php?page="+page+"&category="+category+"&budget="+budget+"&order="+order);
            }
        </script>
        
    </head>
    
    <body>
    
        <?php include('header.php'); ?>
        
        <div id="marketplaceContainer">
            
            <a href="postProject.php" id="marketPoster">
                <h2>Post a Job!</h2>
            </a>
            
            <div id="marketPosts">
                <div id="marketPages">
                    <ul>
                        <?php 
                            if ($page + 4 > ceil($totalposts/8)) {
                                $navstart = ceil($totalposts/8) - 4;
                                if (0 > $navstart) {
                                    $navstart = 1;
                                }
                            } else {
                                if ($page == 1) {
                                    $navstart = 1;
                                } else {
                                    $navstart = $page - 1;
                                }
                            }
                            for ($i = $navstart; $i < $navstart + 5; $i++) {
                                if ($i <= ceil($totalposts/8)) {
                                    echo "<li><a href='./marketplace.php?page=$i'>$i</a></li>";
                                }
                            }
                        ?>
                    </ul>
                </div>
                
                <!-- User Posts, have 8 per page -->
                <!-- 4 lines per description -->
                
                <?php 
                    $offset = ($page - 1) * 8;

                    if (isset($_GET['category']) && $_GET['category'] != "none") {
                        $category = $_GET['category'];
                        $categorysql = " AND category='$category'";
                    } else {
                        $categorysql = "";
                    }

                    if (isset($_GET['budget'])) {
                        $budget = $_GET['budget'];
                        $budgetsql = " AND min_budget <= '$budget' AND max_budget >= '$budget'";
                    } else {
                        $budgetsql = "";
                    }

                    if (isset($_GET['order'])) {
                        $order = $_GET['order'];
                        $ordersql = "$order";
                    } else {
                        $ordersql = "DESC";
                    }

                    $sql = "SELECT * FROM posts WHERE completed='0'" . $categorysql . $budgetsql . "ORDER BY date_added ". $ordersql ." LIMIT $offset, 8";

                    $result = $con->query($sql);
                    while ($array = $result->fetch_assoc()) {
                ?>
                        <div id="userPost">
                            <ul>
                                <li><img src="images/ben.png" width="70" id="postImage"></li>
                                <li><img src="images/fiveStars.png" width="200" id="postRating"></li>
                                <li><h4><?php echo "$" . $array['min_budget'] . " - $" . $array['max_budget']; ?></h4></li>
                            </ul>
                            
                            <h3><?php echo $array['name']; ?></h3>
                            <h3><?php echo $array['category'] ?></h3>
                            <p><?php echo $array['description'] ?></p>
                        </div>
                <?php 
                    }
                ?>
                
                <div id="marketPages">
                    <ul>
                        <?php 
                            if ($page + 4 > ceil($totalposts/8)) {
                                $navstart = ceil($totalposts/8) - 4;
                                if (0 > $navstart) {
                                    $navstart = 1;
                                }
                            } else {
                                if ($page == 1) {
                                    $navstart = 1;
                                } else {
                                    $navstart = $page - 1;
                                }
                            }
                            for ($i = $navstart; $i < $navstart + 5; $i++) {
                                if ($i <= ceil($totalposts/8)) {
                                    echo "<li><a href='./marketplace.php?page=$i'>$i</a></li>";
                                }
                            }
                        ?>
                    </ul>
                </div>
                
            </div>
            
            <div id="marketSearch">
                <h2>Filter by:</h2>
                <ul id="filter">
                    <li><h3>Category</h3></li>
                    <li>
                        <select name ="category">
                            <option value="none">Choose a Category</option>
                            <option value="Logo">Logo Design</option>
                            <option value="Poster">Poster Design</option>
                            <option value="Animation">Animation Design</option>
                            <option value="Web">Web Design</option>
                           <option value="Banner">Banner Design</option>
                    </select>
                    </li>
                    <li><h3>Budget</h3></li>
                    <li>
                        <input type="number" name="budget">
                    </li>
                    <li>
                        <h3>Date</h3>
                    </li>
                    <li>
                        <input type="radio" name="recent" value="asc"> New to Old
                    </li>
                    <li>
                        <input type="radio" name="recent" value="desc"> Old to New
                    </li>
                    <li></li>
                    <li><button type="submit" onclick="search()">Search</button></li>
                </ul>
                </div>
            </div>
            
            <div id="footerBreaker">
            </div>
            
        </div>
        
        <?php include('footer.php'); ?>
    
    </body>
    
</html>
