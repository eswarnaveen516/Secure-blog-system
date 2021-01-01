
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


/* Add a gray background color with some padding */
body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.rightcolumn {   
    float:right;
    width: 100%;
}

.right {
    text-align: right;
    float: right;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}
</style>
</head>
<body>

<div class="header">
  <h2>My blog</h2>
</div>
<div class= "left">





      <h1>Login</h1>
</div>


<?php
  echo "Current time: " . date("Y-m-d h:i:sa")
?>
          <form action="user.php" method="POST" class="form login">
               Username <input type="text" class="text_field" name="username" required pattern="\w+"
               title="Please enter a valid username"
               onchange="this.setCustomValidity(this.validity.patternMismatch ?this.title :'');"> <br>

              
                Password: <input type="password" class="text_field" name="password" /> <br>
                <button class="button" type="submit" name="login_btn">Login</button>
<p>

</p>
                  

                  
                </button>
          </form>
</body>
  </html>
