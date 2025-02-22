<?php
 // register-page 
session_start();
?>
<?php  

if (isset($_POST['submit'])) {  
    extract($_POST);  
    $servername = "localhost ";  
    $username   = "root";  
    $pass   = "";  
    $dbname     = "mydb";  
    // Create connection  
    $conn       = new mysqli($servername, $username, $pass, $mydb);  
    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    }  
    $sql = "INSERT INTO `users` (email, fullname , username,password)  
  
VALUES ('$email','$fullname','$username','$password')";  
    if ($conn->query($sql) === TRUE) {  
        header('Location: login.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
    $conn->close();  
}  
?> 


<main>
    <div class="page">
        <div class="header">
          <h1 class="logo">Instagram</h1>
          <p>Sign up to see photos  from your friends.</p>
          
          <div>
            
          </div>
        </div>
        <?php

        ?>
        <div class="container">
          <form action="" method="post"  >
            <input type="text" placeholder="Mobile Number or Email" id="email" name="email" required>
            <input type="text" placeholder="Full Name"  id="fullname" name="fullname" required >
            <input type="text" placeholder="Username" id="username" name="username" required>
            <input type="password" placeholder="Password" required  name="password" id="password" >
           
            <input id="sum" type="submit" value="Sign up" class="btn" />
          </form>
          
          <ul>
            <li>By signing up, you agree to our</li>
            <li><a href="">Terms</a></li>
            <li><a href="">Data Policy</a></li>
            <li>and</li>
            <li><a href="">Cookies Policy</a> .</li>
         </ul>
        </div>
    </div>
    <div class="option">
       <p>Have an account? <a href="login.php" target="_blank">Log in</a></p>
    </div>
    
    <div class="footer">
      <ul>
        <li><a href="">ABOUT</a></li>
        <li><a href="">HELP</a></li>
        <li><a href="">PRESS</a></li>
        <li><a href="">API</a></li>
        <li><a href="">JOBS</a></li>
        <li><a href="">PRIVACY</a></li>
        <li><a href="">TEMS</a></li>
        <li><a href="">LOCATIONS</a></li>
        <li><a href="">TOP ACCOUNTS</a></li>
        <li><a href="">HASHTAGS</a></li>
        <li><a href="">LANGUAGE</a></li>
      </ul>
      <p>© 2023 INSTAGRAM</p>
    </div>
  </main>
<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  background-color: #fafafa;
}

main{
  display: flex;
  flex-direction: column;
  align-items: center;
}

.page{
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-bottom: 30px;
}

/* header style */
.page .header{
  text-align: center;
}

.page .header .logo, 
.page .header p, 
.page .header button{
  margin-bottom: 15px;
}

.page .header > p{
  font-weight: bold;
  color: #8e8e8e;
  font-size: 18px;
}

.page .header > button{
  width: inherit;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  background-color: #0095f6;
  color: #ffffff;
}

.page .header div{
  display: flex;
  flex-direction: row;
  align-items: center;
  color: #8e8e8e;
}

.page .header div p{
  padding: 0 20px;  
}

.page .header div hr{
  width: 200px;
  
}

/* container style*/
.page .container{
  display: flex;
  flex-direction: column;
}

.page .container form, input{
  width: inherit;
}

.page .container form input{
  border: 1px solid #dbdbdb;
  background-color: #fafafa;
  padding: 10px 5px;
  margin: 5px 0;
}

.page .container form input:last-of-type{
  margin-bottom: 10px;  
}

#sum{
  width: inherit;
  margin-bottom: 20px;
  padding: 7px 20px;
  border-radius: 5px;
  border: none;
  background-color: #0095f6;
  color: #ffffff;
}

.page .container ul{
  list-style: none;
  text-align: center;
  margin-bottom: 10px;
}

.page .container ul li{
  display: inline;
  color: #8e9096;
}

.page .container ul li a{
  text-decoration: none;
  font-weight: bold;
  color: #8e9096;
}

/* option style */
.option p > a{
    text-decoration: none;
    color: #00a0f7;
}

/* otherapps style */
.otherapps{
  text-align: center;
}

.otherapps p{
  margin-bottom: 15px;
}

.otherapps > button{
  cursor: pointer;
  border: none;
  border-radius: 5px;
  background-color: black;
  color: white;
  padding: 10px;
  font-size: 18px;
}

/* footer style */
.footer{
  bottom: 0;
  height: 2.5rem;
  margin-top: 50px;
}

.footer ul{
  text-align: center;
}
.footer ul li{
  display: inline;
  margin-right: 5px;
}
.footer ul li a{
  text-decoration: none;
  font-size: 12px; 
  color: #00376b;
}

.footer p{
  margin: 10px 0;
  text-align: center;
  color: #8e9096;
  font-size: 14px;
}



/* Mobile Styles */

@media only screen and (max-width: 400px) {
    body {
        font-family: Freight Sans
    }
  
  .page{
    width: 250px;
    background-color: #fafafa;
  }
  
  .page .header{
    width: inherit;
    margin-top: 10px;
  }
  
  .page .container{
    width: inherit;
  }
  
  .option{
    margin: 80px 0;
  }
  
  .page .container input{
    padding: 10px 5px;
    margin: 5px 0;
  }
  
  .page .footer{
    width: inherith
  }
}

@media only screen and (min-width: 401px){
    body {
        font-family: Neue Helvetica
    }
  .page{
    border: 1px solid #dbdbdb;
    width: 350px;
    background-color: white;
    margin: 40px 40px 10px 40px;
  }
  
  .page .header{
    width: 270px;
    margin-top: 15px;
  }
  
  .page .container{
    width: 270px;
  }
  
  .option{
    border: 1px solid #dbdbdb;
    background-color: white;
    width: 350px;
    height: 70px;
    margin-top: 20px 0;
    display: flex; 
    align-items: center;
    justify-content: center;
    
  }
  
  .otherapps{
    margin: 20px 0;
  }
  
  .otherapps button{
    margin-right: 5px;
  }
  
  .otherapps button:after-of-type{
    margin-right: none;
  }
  
  .page .footer{
    width: 100%;
  }
}


</style>  