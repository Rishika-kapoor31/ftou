<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    
header("location: login.php");
    exit;
}

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'ftou');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css/">
    <script src="index.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <script src="js/bootstrap.min.js/"></script>
    <script src="https://use.fontawesome.com/fdc4c76d34.js"></script>
    <style>
footer{
    position: fixed;
    bottom: 0;
  }
  
  @media (max-height:800px){
    footer { position: static; }
    header { padding-top:40px; }
  }
  
  
  .footer-distributed{
    background-color: #2c292f;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
  }
  
  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: inline-block;
    vertical-align: top;
  }
  
  /* Footer left */
  
  .footer-distributed .footer-left{
    width: 30%;
  }
  
  .footer-distributed h3{
    color:  #ffffff;
    font: normal 36px 'Cookie', cursive;
    margin: 0;
  }
  
  /* The company logo */
  
  .footer-distributed .footer-left img{
    width: 30%;
  }
  
  .footer-distributed h3 span{
    color:  #e0ac1c;
  }
  
  /* Footer links */
  
  .footer-distributed .footer-links{
    color:  #ffffff;
    margin: 20px 0 12px;
  }
  
  .footer-distributed .footer-links a{
    display:inline-block;
    line-height: 1.8;
    text-decoration: none;
    color:  inherit;
  }
  
  .footer-distributed .footer-company-name{
    color:  #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
  }
  
  /* Footer Center */
  
  .footer-distributed .footer-center{
    width: 35%;
  }
  
  
  .footer-distributed .footer-center i{
    background-color:  #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
  }
  
  .footer-distributed .footer-center i.fa-envelope{
    font-size: 17px;
    line-height: 38px;
  }
  
  .footer-distributed .footer-center p{
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin:0;
  }
  
  .footer-distributed .footer-center p span{
    display:block;
    font-weight: normal;
    font-size:14px;
    line-height:2;
  }
  
  .footer-distributed .footer-center p a{
    color:  #e0ac1c;
    text-decoration: none;;
  }
  
  
  /* Footer Right */
  
  .footer-distributed .footer-right{
    width: 30%;
  }
  
  .footer-distributed .footer-company-about{
    line-height: 20px;
    color:  #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
  }
  
  .footer-distributed .footer-company-about span{
    display: block;
    color:  #ffffff;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
  }
  
  .footer-distributed .footer-icons{
    margin-top: 25px;
  }
  
  .footer-distributed .footer-icons a{
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color:  #33383b;
    border-radius: 2px;
  
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;
  
    margin-right: 3px;
    margin-bottom: 5px;
  }
  .content{
    font-family: 'New Tegomin', serif;
  }
  /* Here is the code for Responsive Footer */
  /* You can remove below code if you don't want Footer to be responsive */
  
  
  @media (max-width: 880px) {
  
    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right{
      display: block;
      width: 100%;
      margin-top:200px;
      margin-bottom: 40px;
      text-align: center;
    }
  
    .footer-distributed .footer-center i{
      margin-left: 0;
    }
  
  }
</style>
</head>
<body style="background-color:rgb(220, 233, 232)">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">FtoU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>  
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link nav1" id="home"href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1 " href="aboutus.html">About us</a>
</li>
            <li class="nav-item">
                <a class="nav-link nav1" href="logout.php">Signout</a>
</li>

         </ul>
      
          <button onclick="location.href='search.html'" class="button"><span class="fa fa-search fa-lg"></span></button>
        

          <a class="navbar-brand" href="#">
          <img src="https://p.kindpng.com/picc/s/714-7147174_png-file-svg-transparent-background-shopping-cart-icon.png" width="30" height="30" class="d-inline-block align-top" alt="cart">
          </a>
       </div>
      </nav>
      <nav class="navbar navbar-expand-lg " style="background-color:rgb(5, 3, 90)">
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="search.html">Today's Deals</a>
          <a href="men.html">Shop for Men</a>
          <a href="women.html">Shop for Women</a>
          <a href="kids.html">Shop for Kids</a>
          <a href="gadgets.html">Gadgets</a>
      
        </div>
        <div id="main">
          <span style="font-size:20px;cursor:pointer; color: white;" onclick="openNav()">&#9776;</span>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link second" href="deals.html">Today's Deals</a>
            </li>
          <li class=" nav-item">
            <a class="nav-link second" href="men.html">Shop for Men</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link second" href="women.html">Shop for Women</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link second" href="kids.html">Shop for Kids</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link second" href="gadgets.html">Gadgets</a>
          </li>
          
  </ul>
      </nav>
     

<div class="container">
<h2 class="text-center"><i><?php echo htmlspecialchars($_SESSION["username"]); ?>, Welcome to our site! Happy shopping</i></h2>
</div>
<br>
      <div class="category-initial">
        <div class="row">
          <div class="column">
            <div class="card_one">
             <a href="men.html"> <img  class="first"src="data:image/png;base64,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"></a>
            <a href="men.html"><img class="first "src="data:image/png;base64,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"></a>
           
          </div>
          </div>
        
          <div class="column">
            <div class="card_one">
            
             <a href="women.html"> <img  class="first"src="data:image/png;base64,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"></a>
              <a href="women.html"><img class="first"src="data:image/png;base64,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"></a>
            </div>
          </div>
          
          <div class="column">
            <div class="card_one">
             
            <a href="kids.html"> <img  class="first"src="data:image/png;base64,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"></a>
              <a href="kids.html"><img class="first" src="data:image/png;base64,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"></a>
            </div>
          </div>
          <div class="column">
            <div class="card_one">
              
             <a href="gadgets.html"> <img  class="first"src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAxlBMVEX///8AAAD///3+/v/29vb///z8/PwAAAQAAAuys7YQGij+//kRGyQUFyH8/Pru7vAAABQQGiQAEBvFxcYPGiMABRXR09dnaWsRHifHy80AAA4IEh/h4+a5urxTVVteYGSChomOkZQ8QUYAEhsQHSNKTlAACBgTGikTFx97fYAAEBmrra8xNTp3eXsnKjMbHiUADB88QEhERUiaoKE4Q0bz8PRdYWYpKy8XFiQeISoMFRgvNDng5OJVW1qNjJRxcnO4vsYlLi0XiV3aAAAKDklEQVR4nO2cC1fayhaA55FMQogTJkCEJLxUohBtVVq9PbbXc/7/n7p7zwSJ2tfpWndR6v5WFTIJFD73zOxJZsIYQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEsQ+khF9i35/iIFBKJoCn1b4/ye+P8Lts+u7d+47W+/4oB4Dvs5vrgneoHv4ESrKbIuYdJvf9SX4PUIN6vrl7ohQ7OR3xjiRZgBJMimeyZCNG+L4Quss+oCxB9ZA9i6kXxaoRdJKaoNOUvvE+0Zv0XzNJcFdpn49vimg4d8XeW5fFv8YY89CFe16cR/HQPU3evKw4MmexaRFFIMsXbJO3CuOROeLJvj/tngFZI5Om6XXxxPU1yOpiZEF5UZhRHJvi9DQt3rgsCbJGo9PpC24zARl7vbQbZ6N4cOOK37YsjCxjoC1SnrJoDb88aMiFxAfYZB+KOKyl3U8NPMpiGtIC0YDpFe5SUmD68KEwkMHbPfv+sPvGyRJaQjAJTEiVknJ3jgHy0xM73PEZyXqSpTB3x+hx1dEl8T5mECArQFkEyIpGKGt3CgafPYUWPN5YWW8+qhAnazeQUWwznS6z7TAIyh+CnNckC2lkOTkK5Ux7KeRZT/LkZrFYZG99VOhoZAl7okZBg15C4tWSZWslk4pO0bCdLJSjVL+/OIKMHWQ9yRHdLuyk81nI8zaLhzkMm892kWUdSsqxHO3IAlkwGIzMaBdZ0IrhU0VtFtKOLKWWX77cpfFOFqRdXjYej0uPqiF7EVmYjjI+aMvS7DLsQepAstjrPAuqIqT0T9VQYAYfcUpKLc/bLGykuIlavSHKMpyGO5aXkSWbarjtDa0sHBtSaH21Gj6T5TeyupQ8vK6GJOs7fCWyRiTrGzwbSFtcZDEnh2S1+Zos7A2Z7zIvzU5OSVbDVtYOl2c13R9FVpttm7UrcVekZSNLY1JKshwgK+aJVDsVHSAR0hW4qzsky/FalmW7aWVRZDWALPNClmid6oPq+SGlyGpwbZZU2l0CU0L7vvDVdgtn/pGsLa4asucqdhvCp8jaYWX9Pf422eWAZDV4/Dw2OefB00S2ALDbQYiFoTHUwDeArNFoBEJiSzNzDR5j94i7SBYibDUcACYagBz7rHncYmcCgqx9f9a9Y2UdmYuLiyPA/XZcXGy3Li4MyKKrO8wuZPqZwzy6ugNIrX3ti+/B/K7/k07/dLZGnhW8OARsvfnm/eehy/cEQRAEQRDE/5WfnFr7+qg/cQCklVtrsivZZuPuvilKKLFdRC5YsyAFNt3ie3uggrLd7GX8wRJcBAXFf0x2j99Qw/fyhbZfCBfU+769fCpRmsRrEj6WuEVOsBdnRroChZLwUIVv8XSKBiX59h+8Bh40/DVkM8aU7g9xmPIgpqTyytJTbjWO0j7DNYW4D6ePoiytcOq2vUOBlHaZk1bOkmymKUMBLhZr3tMdgbO98fwOyMJrQBLeP0kSfDxMU4DWSb3MOc+X9Uf7NVSynM0eQRLsw6cbEJpN72azGf4Ay0SJcmmf3s2O5xM7p7uc3k3rrS0tYd+K2bfrT2fTsYbYkpPjC875/bxUB3rmC/7w/fe8KKKiWPP/jKWGapLwdcpr2xYl/JTPod5kUJQWRYoM+WfFMpwNfw0F65yffIZjS57yxfZdBeNVfsskyqp5wSei202WvCoKc1H0eI1huL/v/MtIPeFF3Bt++jQM44L3IdBEwo0xaaKst9FwDodlPDZp6Ah4qcCeiYs8zIP1WZz+lWhRctNb7C4tpqZYMnsJuw5jPmG+uM2jtHr38D6PIj450AUGn7mJ8qvM87KrIBrwUms/ATNxb4XTIneyTLXqTxo8jKx4PevUdT0/Ned47EtZEcrCZ3V4BrLEmEfpMgP9dR6ZI6kO8PZRmn1Zj4L/Qr3xJVuEo+qYoSy8wsVxPWFLVli3ZoJAZMXp3G5koRlwaLO+L4stehEvbf+54FV7kdTBIDCK0hMGoSI9zR5Sw0vfyTLpLfPa1RBk2VQAY8LKWs+hALqB2SkE5A9lrYbGyVLJ4+qxv52udChAZ67VJhzx2mZIIKEODN6rKOFRcZVDOXsRWS7Z9LWw1bCa41XVLjuuzGtZlXkha9Mzxe3Yg7fACoipyJ6+9q+BsthjNcJ2SqAEbLWHK4y2qLc5Tgehp0BWPmc2stLpfL5a4Q+2ztiIze1icm9tDPdAVvQ9WdCmnUdrfn+1yTzhy4Nr3yEf12xZjLhn00uQ9ZGbdMqwGvYWJR/kK4isuJE1Gp1Wlh5nLrLSx7Iss8nt+mw4Yz+S1fWhqTKmqHL+blUy79DyUsjINbspBhwHJChLoaxbhqkDRM0igDbe28ky1XZeCA4HIbJM5W5wFK95JuUPZGlP9W/SMC1AGCRaSh3aOh9sqqZpzD/aMR8M4MBSOrOyoKFS9+n10rNPbTWsriYdS42DxoxH8LUxS62C+75dNt2SJVk1AFn2SmIdxMGEWTtZPbtMQ5wXkYlDSx0glqCTGsEnx4EeDOawzVrYHhIM6T6P+N87WUG9fZ2yBefmYYncbRKQLpws3y46B1lDlGVn1dTcBBMbuijSyxafivNqxQ7tpqZ4UqWD7ZPo+l0fhs4L6N77vnBdoGLHw2JqnmSFm+ZlysmKqvn2fezYsN0bKjY06dItqavB86Tr9cfjzz4OyOHI8+LyW7fG+23B8yUK2p51At2h7opkCCm8pxtZQiaBKeJ2ZG3bGWVlQZ4l8E5HLr10sp4mxo9M8R7G07BvsR7wMUQr55Dwgqwuy6PigR1aNcRbOrF5YMIvuHpCeEvISRcwoHPVEMKu5kemLcud75LMx7Eh5lnNOjEsd9XQgr3sDN5rghvlX0eQWWh2X0BLZXdjUD4eXGQh0ruErv+fzXi8uR9GwxPIgJreEM+d3hZWlkBZp8vjhtln3chqrcYseTw42R6QsD5EbDjv9zf3xVF+B3prPjBmM87GmzPIy/riIGWp8gEGdyHn4cDkl6VUXUxKnSzMUrFGdlHWoLi+tqdoUp51m6RUtGVB74h7T9MKxjXsEbaHnOfmaHhRYjt3zAv4bwIoGfArfWjtu0X4LLmqgmFR9cL1lSeZxgwi53M8cefDoDfkK4FuQr49QxPyMUZWzlfPZbmdCMjSavE+CHpVLwimJZ6qEVDA8wr+Hx4vDi6Bb4CuTGb14/TLY50Je9lBeZ3JJNN4nUF7k0lnLKDt70x2dBKtoKCTtcd3XuuIjgevZOVk8fi4qjMJ/azASl125rPp7Kou2eHe6k49LTNpvoLd9Fu3UxYv0+0fjlXaswAh3cWOt1Xx1EE2746mS3tuQLT32rMN/+Jylmguq+1e8zR18HA1tRFfvyT6LUHfFWdvXP1vXvCH8EuyCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIg9sn/AJmQxA+QxrCxAAAAAElFTkSuQmCC"></a>
              <a href="gadgets.html"><img class="first"src="data:image/png;base64,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"></a>
            </div>
          </div>
         
        </div>
        <br>
        <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner row w-50 mx-auto">
            <div class="carousel-item col-md-4 active">
              <div class="card">
                <img class="card-img-top img-fluid" style="height: 200px; width: 300px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHw5DHTsfOxVAs4n39NlYE4AjjHaWF8_O0nkFBgkKWnHxNOtA6pdjDH7Ev5NecI7aqwJ_ch_Ay3Q&usqp=CAc" alt="men formal">
                <div class="card-body">
    <p><b>Buy exclusive formal wear for men 
      Ford Pastel-green shirt</b></p>
      <p><a href="men.html" class="links">Explore more--></a></p>
        
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid "style="height: 200px; width: 300px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWKK_zA4OJxJu8Cc8hK_OgGGLgFB5uYqgiyAppXjDyWnjiUtvoAJbkP6LfKv-HjFrqkAb30So&usqp=CAc" alt="men ethnic">
                  <div class="card-body">
                   <p><b>Ethnic wear 
                      KISAH Men Green & White Solid Sherwani Set</b></p>
                    <p><a href="men.html" class="links">Explore more--></a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid"style="height: 200px; width: 300px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSohkSUA2AIzs5YrQ9D0ceqsIXT4PVtMYgdNXXIGj0CqKJ3YCSQc7qpX1PpOKUbUkKNJVHFE0qy&usqp=CAc" alt="women formal">
                  <div class="card-body">
                  <p> <b> Formal wear for Women Green Double Button Blazer</b></p>
                      <p><a href="women.html" class="links">Explore more--></a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid"style="height: 200px; width: 300px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEloCi01HVzY32E9OdIiX9kb3V35Kfg9LaBgTY2OCGwUz9ShgGnctCIFpGaA&usqp=CAc" alt="women ethnic">
                  <div class="card-body">
                   <p> <b>Women ethnic wear Rose Dawn Sharara Set</b></p>
                    <p><a href="women.html" class="links">Explore more--></a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid"style="height: 200px; width: 300px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS7MD6hnqF6B5cX90zz1Jp-e7_SOXpUylKOj9ykB1P8fBAImtgV2FHr_-mWshapnjQ7udDe5uC&usqp=CAc" alt="kidswear">
                  <div class="card-body">
                 <p>  <b>Kids Special Peach Embellished Dress</b></p>
                    <p><a href="kids.html" class="links">Explore more--></a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid"style="height: 200px; width: 300px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHZOeGYVt1Zz2NO0gGtqB7QYT9LXqyK3rTziuwCeIU-V0rt74uAvehPUI5QkiZS0FddhC8ie1_&usqp=CAc" alt="kidswear">
                  <div class="card-body">
                  <p>  <b>Kidswear Abhla Work Top And Lehenga</b></p>
                    <p><a href="kids.html" class="links">Explore more--></a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid"style="height: 200px; width: 300px;" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRaaHUydbMWMG0vHRySrLfh6f91GOrVFwH6dfs1dzXpJ42yphz8-YMM17mH6JShtOxT7nGVNX2apaASG1jJjpFpiE8cxTwD8AE&usqp=CAc" alt="gadgets">
                  <div class="card-body">
                  <p><b>Enjoy the new BOAT Airdopes 131 - Wireless Earbuds</b></p>  
                    <p><a href="gadgets.html" class="links">Explore more--></a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" style="height: 200px; width: 300px;"src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRBuH6czheu2CLF2gtg-ENC_in4LFf_3MbmTFeGbp5Ngpa4zfD6O5Wt47VWhuqJLFTGZUOn_sTaa3ALpRC5ZhnWQuZrCzAIIYGv&usqp=CAc" alt="gadgets">
                  <div class="card-body">
                   <p> <b>OnePlus Nord, 256 GB, 12 GB RAM, Gray Onyx, Smartphone</b></p>
                    <p><a href="gadgets.html" class="links">Explore more--></a></p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="flex-container">
            <div class="flex-item-left">
              <img src="logo.jpeg" class ="animate"style="height: 150px; width: 150px; border-radius: 5px; margin-left: 20px;margin-top: 20px;">
            </div>
            <div class="flex-item-right">
              <p class="data">   Presenting the best shop online where you can buy anything and everything easily! 
             Just buy instantly.
              </p>
            </div>
          </div>
  <footer class="footer-distributed" id="foot" style="width:fit-content">

<div class="footer-left">
  
  <h3>Fto<span>U</span></h3>

  <p class="footer-links">
    <a href="#home">Home</a>
    |
    <a href="aboutus.html">About</a>
    |
    <a href="contactus.html">Contact-us</a>
  </p>

  <p class="footer-company-name">© 2021 All rights reserved</p>
</div>

<div class="footer-center">
  

  <div>
    <i class="fa fa-phone"></i>
    <p>+91 22-27782183</p>
  </div>
  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:support@eduonix.com">xyz@ftou.com</a></p>
  </div>
</div>
<div class="footer-right">
  <p class="footer-company-about">
    <span>Features</span>
    <p  class="content"style="color:white"> Saves time and efforts | 
Convenience of Shopping at home | 
Wide variety / range of products are available | 
Get detailed information of the product | 
We can compare various models / brands.
  <div class="footer-icons">
    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
    <a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
    <a href="https.//linkedin.com/"><i class="fa fa-linkedin"></i></a>
    <a href="https.//youtube.com/"><i class="fa fa-youtube"></i></a>
  </div>
</div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>








