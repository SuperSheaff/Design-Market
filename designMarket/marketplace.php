<?php 
    $con = mysqli_connect("localhost", "admin", "password", "design_market");
    session_start();
    $sql = "SELECT * FROM posts WHERE completed='0' ORDER BY date_added";
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
        <script></script>
        
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
                    $sql = "SELECT * FROM posts WHERE completed='0'  ORDER BY date_added DESC LIMIT $offset, 8";
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
                <h2>Search Parameters</h2>
                <h3>Filter by:</h3>
                <li><h3>Category</h3></li>
                <li><h3>Budget</h3></li>
            </div>
            
            <div id="footerBreaker">
            </div>
            
        </div>
        
        <?php include('footer.php'); ?>
    
    </body>
    
</html>