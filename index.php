<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation using jquery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div id="form-data">
        <form id="userdata" method="post">
        
        <div class="form-div-box">
        <label for="fname">Name</label>

          <input type="text" name ="fname" id = "fname" >
        </div>
        
        <div class="form-div-box">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        </div>

        <div class="form-div-box">
        <label for="paswrd">Password</label>
        <input type="password" name="paswrd" id="paswrd">
        </div>

        <div class="form-div-box">
        <label for="cnfpaswrd">Conform password</label>
        <input type="password" name="cnfpaswrd" id="cnfpaswrd">
        </div>

       <input type="submit" id="submit" value="submit">

            <!-- <h1 class = "c1" >hii</h1> -->
        </form>
    </div>
</body>
</html>



