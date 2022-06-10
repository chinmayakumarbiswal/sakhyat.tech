<!DOCTYPE html>
<html lan="en" and dir="Itr">
    <head>
        <meta charset="utf-8">
        <title> Interactive Login Form </title>
        <!-- <link rel="stylesheet" href="style2.css"> -->
        <style>
            body{
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: url(https://chinmayakumarbiswal.in/popup.jpg );
  background-size: cover;
}
.box{
  width: 300px;
  padding: 30px;
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  background: rgba(red, green, blue, alpha);
  text-align: center;
}
.box h1
{
  color: white;
  text-transform: uppercase;
  font-weight: 700;
}
 .box input[type="text"]:focus,.box input[type="password"]:focus{
   width: 270px;
   border-color: #ffc400ec;

 }
 .box input[type="submit"]{

  border: 0;
  background: none;
  display: 20px auto;
  text-align: center;
  border: 3px solid #ffc400ec;
  padding: 14px 10px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25px;
  cursor: pointer;
 }
 .box input[type="submit"]:hover{
   background: #ffc400ec;
 }
        </style>
    </head>
    <body>
      <form class="box" action="login html" method="POST">
        <h1>
            login
        </h1> 
        <input type="text" name=""placeholder="Enter username" id="username">
        <input type="password" name=""placeholder="Enter password" id="password">
        <input type="submit" name=""value="submit"> 
      </form>  
    </body>
</html>