<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market - Home</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
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
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                    </ul>
                </div>
                
                <!-- User Posts, have 8 per page -->
                <!-- 4 lines per description -->
                
                <div id="userPost">
                    
                    <ul>
                        <li><img src="images/ben.png" width="70" id="postImage"></li>
                        <li><img src="images/fiveStars.png" width="200" id="postRating"></li>
                        <li><h4>Budget Min - Budget Max</h4></li>
                    </ul>
                    
                    <h3>Post Title</h3>
                    <p>PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription</p>
                </div>
                
                <div id="userPost">
                    
                    <ul>
                        <li><img src="images/ben.png" width="70" id="postImage"></li>
                        <li><img src="images/fiveStars.png" width="200" id="postRating"></li>
                        <li><h4>Budget Min - Budget Max</h4></li>
                    </ul>
                    
                    <h3>Post Title</h3>
                    <p>PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription</p>
                </div>
                
                <div id="userPost">
                    
                    <ul>
                        <li><img src="images/ben.png" width="70" id="postImage"></li>
                        <li><img src="images/fiveStars.png" width="200" id="postRating"></li>
                        <li><h4>Budget Min - Budget Max</h4></li>
                    </ul>
                    
                    <h3>Post Title</h3>
                    <p>PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription</p>
                </div>
                
                <div id="userPost">
                    
                    <ul>
                        <li><img src="images/ben.png" width="70" id="postImage"></li>
                        <li><img src="images/fiveStars.png" width="200" id="postRating"></li>
                        <li><h4>Budget Min - Budget Max</h4></li>
                    </ul>
                    
                    <h3>Post Title</h3>
                    <p>PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription</p>
                </div>
                
                <div id="userPost">
                    
                    <ul>
                        <li><img src="images/ben.png" width="70" id="postImage"></li>
                        <li><img src="images/fiveStars.png" width="200" id="postRating"></li>
                        <li><h4>Budget Min - Budget Max</h4></li>
                    </ul>
                    
                    <h3>Post Title</h3>
                    <p>PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription</p>
                </div>
                
                <div id="userPost">
                    
                    <ul>
                        <li><img src="images/ben.png" width="70" id="postImage"></li>
                        <li><img src="images/fiveStars.png" width="200" id="postRating"></li>
                        <li><h4>Budget Min - Budget Max</h4></li>
                    </ul>
                    
                    <h3>Post Title</h3>
                    <p>PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription</p>
                </div>
                
                <div id="userPost">
                    
                    <ul>
                        <li><img src="images/ben.png" width="70" id="postImage"></li>
                        <li><img src="images/fiveStars.png" width="200" id="postRating"></li>
                        <li><h4>Budget Min - Budget Max</h4></li>
                    </ul>
                    
                    <h3>Post Title</h3>
                    <p>PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription</p>
                </div>
                
                <div id="userPost">
                    
                    <ul>
                        <li><img src="images/ben.png" width="70" id="postImage"></li>
                        <li><img src="images/fiveStars.png" width="200" id="postRating"></li>
                        <li><h4>Budget Min - Budget Max</h4></li>
                    </ul>
                    
                    <h3>Post Title</h3>
                    <p>PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription PostDescription</p>
                </div>
                
                <div id="marketPages">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
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