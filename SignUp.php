<html>
    <head>
        <meta name="viewport" content="device-width:width;initial-scale:1"/> 
        <link type="text/css" href="Sign.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
        <title>
            Sign up
        </title>
    </head>
    <body>
    <?php include 'header.php';?>
        <section>
            <div >
                <img src="img/blank-avatar.png" width="100" height="100"/>
                <div>
                <input type="button" value="upload photos"/>
                </div>
                </div>
                </div>
                <div class="signup-box">
                <br><br><br>
                
                <h1>Sign up with your email address</h1>
                <form action="ss.php">
                <input type="text" placeholder="First name" />
                <input type="text" placeholder="last name" />
                <br>
                <input  type="text" placeholder="Email"/>
                <br>
                <input  type="text" placeholder="Confirm email"/>
                <br>
                <input  type="password" placeholder="password"  /><br>
                <h4>Date of birth</h4>
                <input type="value" placeholder="Day"/>
                <br>
                <select name="month" >
                <option value="month">Month</option>
                <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April ">April </option>
                <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                <option value="September">September</option>
                  <option value="October ">October </option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select>
                <br>
                <input  type="value" placeholder="Year"/><br>
                <input  type="radio" name="gender" value="male"/> Male
                <input  type="radio" name="gender" value="female"/> Female<br><br>
                  <input type="checkbox" name="vehicle1">share my registration data with SHOWFLEX's content providers for marketing purposes.
                <br>
                <input  type="submit" value="sign up"/>
                </form>
        </section>
        <aside>
          
          
        </aside>
        <?php include 'footer.php';?>
    </body>
</html>