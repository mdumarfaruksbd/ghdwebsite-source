<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>*{
    margin: 0px;
    padding: 0px;
    font-family: Arial, Helvetica, sans-serif;
}
ul{

    
    list-style-type: none;
    background-color: blueviolet;
    display: flex;
    
    
}
li{
    padding: 10px;
    
}
li a{
    text-decoration: none;
    color: aliceblue;
}
li:hover{
    background-color: black;
    
}
.container {

    background-color: rgb(7 16 45);
    background: linear-gradient(to top right, rgb(7 16 45), rgb(58 60 84));
    background: -webkit-linear-gradient(to top right, rgb(7 16 45), rgb(58 60 84));
    display: flex;
    align-items: center;
    justify-content: center;
    height: 200px;
    padding: 20px;
    margin-top: 10px;
    border-radius: 10px;

    border: 1px solid rgb(84 90 106);
  }
 
  .small-text, .title,.desc {
    font-weight: 600;
  }
  
  .title,.desc {
    margin: 8px 0;
  }
  
  .small-text {
    color: #488aec;
    font-size: 14px;
    margin-bottom: 8px;
    text-align: center;
  }
  
  .title {
    color: #fff;
    font-size: 26px;
    line-height: 26px;
  }
  
  .desc {
    color: rgb(151 153 167);
    font-size: 13px;
  }

.card {
    width: 500px;
    height: 150px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.left-flag,
.right-flag {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
}


.left-flag img,
.right-flag img {
  width: 150px; /* Specify your desired width */
  height: 100px; /* Specify your desired height */
  border-radius: 10%; /* Add this line for border radius */
}

.image-wrapper {
  text-align: center;
}

.image-name {
  color: #fff;
  font-size: 14px;
  margin-top: 8px;
  display: block; /* Add this line */
  text-align: center; /* Add this line */
}


.match-name {
    font-weight: bold;
}

.time {
    color: red;
    font-weight: bold;
}
@media (max-width: 768px) {
  .container {
    height: auto;
    padding: 10px;
  }

  .left-flag img,
  .right-flag img {
    width: 80px;
    height: 80px;
  }

  .small-text {
    font-size: 12px;
  }

  .title {
    font-size: 20px;
    line-height: 20px;
  }
}</style>
 
</head>

<body>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Highlight</a></li>
      <li><a href="#">Live Event</a></li>
      <li><a href="#">Live TV</a></li>
    </ul>
  </nav>

  <?php if (!empty($data)): ?>
  <?php foreach ($data as $item): ?>
   
   
    <div class="container">
          
        <div class="left-flag">
          <div class="image-wrapper">
            <img src="<?php echo $item['leftFlagImg']; ?>" alt="Left Flag">
            <span class="image-name"><?php echo $item['leftFlagName']; ?></span>
          </div>
        </div>
        <div class="card">
          <span class="small-text"><?php echo $item['eventName']; ?></span>
          <span class="title"><?php echo $item['eventTitle']; ?></span>
          <div id="time" class="time">Live Now</div>
        </div>
        <div class="right-flag">
          <div class="image-wrapper">
            <img src="<?php echo $item['rightFlagImg']; ?>" alt="Right Flag">
            <span class="image-name"><?php echo $item['rightFlagName']; ?></span>
          </div>
        </div>
      
    </div>
    <?php endforeach; ?>
  <?php else: ?>
    <div class="no-data-message">No data available</div>
  <?php endif; ?>

  <script src="script.js"></script>
</body>

</html>
