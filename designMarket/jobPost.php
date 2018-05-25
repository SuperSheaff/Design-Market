<?php 
    session_start();
    $con = mysqli_connect("localhost", "admin", "password", "design_market");
    if (isset($_GET['id'])) {
        $postid = $_GET['id'];
        $sql = "SELECT * FROM posts WHERE id='$postid'";
        $result = $con->query($sql);
        $post = $result->fetch_assoc();

        $username = $post['posted_by'];

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $con->query($sql);
        $user = $result->fetch_assoc();

    }
?>
<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
        <!-- Space for scripts -->
        <script></script>
        
    </head>
    
    <body>
    
        <?php include('header.php'); ?>
            
        <div id="jobContainer">
            
            <div id="jobHeader">
                
                <div id="jobInfo">
                    <img src="<?php echo $user['image'] ?>" width="100">
                    <h1><?php echo $post['name'] ?></h1>
                    <h2><?php echo $post['posted_by'] ?></h2>
                    <p><?php echo $post['description'] ?></p>
                    
                </div>              
            
            </div>
            
            <div id="jobInspiration">
                    
                <ul>
                    <li><img src="<?php echo $post['inspiration'] ?>" width="250"></li>
                </ul>
                    
            </div>
            
            <div id="jobOptions">
                
            
            <?php if (isset($_SESSION['username']) && $_SESSION['username'] == $post['posted_by']) { ?>
                <a href="editPost.php"><button>Edit Post</button></a>
            <?php } ?>

            </div>
            
            
            <?php if (isset($_SESSION['username']) && $_SESSION['username'] != $post['posted_by']) { ?>
            <div id="bidContainer">
                <h2>Make a Bid</h2>
                <form method="POST" action="makebid.php">
                    <input type="hidden" name="postid" value="<?php echo $postid ?>">
                    <input type="hidden" name="userid" value="<?php echo $_SESSION['id'] ?>">
                    <textarea rows="4" cols="50" name="description" placeholder="Tell us about your vision for this job..." maxlength="100"></textarea>
                    <br>
                    <div id="postBudget" style="float: none; margin: 0 auto; margin-bottom: 15px; height: auto;">
                        <h3>Bid Budget</h3>
                        <input id="userBudgetBid" type="number" name="maxSum" value="100" step=".01" min="1">
                    </div>
                    <button style="font-size: 20px;">Make Bid</button>
                </form>
            </div>
            <?php } ?>
            
            <?php if (isset($_SESSION['username']) && $_SESSION['username'] == $post['posted_by'] && $post['awarded_to'] == 0) { ?>

            <div id="bidSection">
                
                <h2 style="text-align: center;">Bids</h2>
                <?php 
                $bidsql = "SELECT * FROM bids WHERE postid = '$postid'";
                $bidresult = $con->query($bidsql);
                while ($bids = $bidresult->fetch_assoc()) {
                ?>
                <div id="userBid">
                    <?php 
                        $userid = $bids['userid'];
                        $usersql = "SELECT * FROM users WHERE id = '$userid'";
                        $userresult = $con->query($sql);
                        $userarray = $userresult->fetch_assoc();
                    ?>
                    
                    <div id="bidInfo">
                        <h2><?php echo $userarray['name'] ?></h2>
                        <h3>$<?php echo $bids['bid'] ?></h3>
                        <p><?php echo $bids['comment'] ?></p>
                    </div>
                    
                    <div id="bidOptions">
                        <a href="acceptbid.php?postid=<?php echo $postid ?>&userid=<?php echo $userid ?>"><button style="padding: 10px;">Accept Bid</button></a>
                        <a href="declinebid.php?postid=<?php echo $postid ?>&userid=<?php echo $userid ?>""><button style="padding: 10px;">Decline Bid</button></a>
                    </div>
                    
                </div>
            <?php } ?>
                
            </div>
        <?php } ?>
            
        </div>
        
        <?php include('footer.php'); ?>
    
    </body>
    
</html>
