<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: arial;
}

.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

.sidenav {
  height: 54%;
  width: 100px;
  position: fixed;
  z-index: 1;
  top: 1;
  left: 0;
  background-color: #EF820D;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 10px;
  text-decoration: none;
  font-weight: bold;
  font-size: 15px;
  color: black;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  height: 200%;
  width: 10px;
  padding: 22.8px;
  margin-left: 200px; 
  
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <h1>Header</h1>
</div>

<div class="sidenav">
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div class="main">
  <h2>Content</h2>
  <p>-------------------------</p>
  <p>----------------------------</p>
  <p>------------------------------</p>
  <p>---------------------------------</p>
  <p>------------------------------------</p>

</div>

<div class="footer">
  <p>Footer</p>
</div>
   
</body>
</html> 
