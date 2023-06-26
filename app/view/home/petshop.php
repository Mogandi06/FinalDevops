<!DOCTYPE html>
<html>
<head>
    <title>PETSHOP</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=DotGothic16&display=swap');

    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    
    .btn-logout {
      display: inline-block;
      background-color: #1e1e1e;
      color: #F04483;
      border: none;
      padding: 10px 20px;
      font-family: 'DotGothic16', sans-serif;
      font-size: 14px;
      text-decoration: none;
      cursor: pointer;
      outline: none;
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease;
    }
    
    .btn-logout:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #F04483;
      transform: translateX(-100%);
      transition: transform 0.3s ease;
    }
    
    .btn-logout:hover {
      color: #FFFFFF;
    }
    
    .btn-logout:hover:before {
      transform: translateX(0);
    }
    .text-center {
      text-align: center;
      font-family: 'DotGothic16', sans-serif;
      margin-bottom: 20px;
      font-size: 100px;
      text-transform: uppercase;
    }
    .path {
      text-align: center;
      font-family: 'DotGothic16', sans-serif;
      font-size: 20px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div>
<div class="path">Halo, <?php
	session_start();
	echo $_SESSION['user-name'];
	?>
 </div>

    <div class="text-center">
      PUNYA PETSHOP
    </div>
    <div class="path">path: /home/petshop</div>
    <a href="<?php echo APP_PATH; ?>/login/logout" class="btn-logout">Logout</a>
  </div>
</body>
</html>
