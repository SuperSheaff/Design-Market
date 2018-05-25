<?php 
    session_start();
    $con = mysqli_connect("localhost", "admin", "password", "design_market");
    if (isset($_GET['id'])) {
        $userid = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id='$userid'";
        $result = $con->query($sql);
        $array = $result->fetch_assoc();
    }
?>
<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market - Profile</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
        <!-- Space for scripts -->
        <script></script>
        
        
    </head>
    
    <body>
    
        <?php include('header.php'); ?>
            
        <div id="profileContainer">
            
            
            <!-- Need php to have edit button appear for user only -->
            
            <div id="profileHeader">
                <div id="profilePicture">
                    <img src="<?php echo ($array['image'] == ''?'./images/default.png':$array['image'])?>" width="250">
                    <?php if ($_SESSION['username'] == $array['username']) { ?>
                        <a href="editProfile.php"><button type="button">Edit Profile</button></a>
                    <?php } ?>
                </div>
                <?php 
                $portsql = "SELECT * FROM userportfolio WHERE userid='$userid'";
                $portresult = $con->query($portsql);
                $porttotal = $portresult->num_rows;
                $totalrating = 0;
                while ($portarray = $portresult->fetch_assoc()) {
                    $totalrating += $portarray['rating'];
                }
                if ($porttotal != 0) {
                    $totalrating = $totalrating/$porttotal;
                }
                if (ceil($totalrating) == 1) {
                    $photo = "images/oneStars.png";
                } else if (ceil($totalrating) == 2) {
                    $photo = "images/twoStars.png";
                } else if (ceil($totalrating) == 3) {
                    $photo = "images/threeStars.png";
                } else if (ceil($totalrating) == 4) {
                    $photo = "images/fourStars.png";
                } else if (ceil($totalrating) == 5) {
                    $photo = "images/fiveStars.png";
                } else {
                    $photo = "images/zeroStars.png";
                }
                ?>
                <div id="profileInfo">
                    <h2 id="username"><?php echo $array['name'] ?></h2>
                    <h3 id="userFullName"><?php echo $array['username'] ?></h3>
                    <img id="userRatingAvg" src=<?php echo $photo ?> width="150">
                    <p id="userAboutMe"><?php echo $array['description'] ?></p>
                    
                </div>
                
            </div>
            
            <div id="profilePortfolio">
                
                <h2>Portfolio</h2>
                
                <ul>
                    <?php 
                    $portsql = "SELECT * FROM userportfolio WHERE userid='$userid'";
                    $portresult = $con->query($portsql);
                    $porttotal = $portresult->num_rows;
                    while ($portarray = $portresult->fetch_assoc()) {
                        $totalrating = $portarray['rating'];
                        if (ceil($totalrating) == 1) {
                            $photo = "images/oneStars.png";
                        } else if (ceil($totalrating) == 2) {
                            $photo = "images/twoStars.png";
                        } else if (ceil($totalrating) == 3) {
                            $photo = "images/threeStars.png";
                        } else if (ceil($totalrating) == 4) {
                            $photo = "images/fourStars.png";
                        } else if (ceil($totalrating) == 5) {
                            $photo = "images/fiveStars.png";
                        } else {
                            $photo = "images/zeroStars.png";
                        }
                    ?>
                    <li>
                        <a href = "jobPost.php?id=<?php echo $portarray['id'] ?>">
                            <img src="<?php echo $portarray['image'] ?>" width="200">
                            <img src=<?php echo $photo ?> width="200">
                        </a>
                    </li>
                <?php } ?>
                </ul>
                
                <div id="profileMore">
                    <a href="profilePortfolio.php"><button type="button">See More...</button></a>
                </div>
            </div>
          <div id="accepted">
                <h2>Jobs Accepted</h2>
                <ul>
                    <?php 
                    $sql = "SELECT * FROM posts WHERE awarded_to = '$userid'";
                    $result = $con->query($sql);
                    while ($accepted = $result->fetch_assoc()) {
                    ?>
                    <li>
                        <div id="profileItem">
                            <h3><?php echo $accepted['name'] ?></h3>
                            <a href="uploadJob.php?id=<?php echo $accepted['id'] ?>""><button style="padding: 10px;">Submit Work</button></a>
                        </div>  
                    </li>
                <?php } ?>
                    
                </ul>
            </div>
            <div id="posted">
                <h2>Jobs Posted</h2>
                <ul>
                    <?php 
                    $sql = "SELECT * FROM posts WHERE posted_by = '". $array['name'] ."'";
                    $result = $con->query($sql);
                    while ($posted = $result->fetch_assoc()) {
                    ?>
                    <li>
                        <div id="profileItem">
                            <h3><?php $posted['name'] ?></h3>
                            <a href="rateJob.php?id=<?php echo $posted['id'] ?>"><button style="padding: 10px;">Rate Job</button></a>
                        </div>  
                    </li>
                <?php } ?>
                </ul>
            </div>
            
        </div>
        
        <?php include('footer.php'); ?>
    
    </body>
    
</html>
