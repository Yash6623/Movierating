<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movie App</title>
</head>
<body>
<script>(function(w, d) { w.CollectId = "6344602b6405a40542b437ba"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
    <header>
    <nav>
        <!-- <label class="logo">YPM</label> -->
        <ul>
            <!-- <li><input type="text"  placeholder="Search" class="search" id="search"></li> -->
            <li><a href="" class="active">Home</a></li>
            <li><a href="sign.php">Sign In</a></li>
            <!-- <li><a href="">Feedback</a></li> -->
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
        <form  id="form">
            <input type="text" placeholder="Search" id="search" class="search">
        </form>
    </header>
   
    <div id="tags"></div>
    <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      
        <!-- Overlay content -->
        <div class="overlay-content" id="overlay-content"></div>
        
        <a href="javascript:void(0)" class="arrow left-arrow" id="left-arrow">&#8656;</a> 
        
        <a href="javascript:void(0)" class="arrow right-arrow" id="right-arrow" >&#8658;</a>

      </div>
    <main id="main"></main>
    <div class="pagination">
        <div class="page" id="prev">Previous Page</div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Next Page</div>

    </div>

    <script src="script.js"></script>
</body>
</html>