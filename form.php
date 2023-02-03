<!Doctype html>
<html>

<head>
  <title>
    mon premier site
  </title>
  <link href="style_form.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h1>calcule d'équation 2 eme degré </h1>
    <h1><a class="clr">A</a>x^2+<a class="clr">B</a>+<a class="clr">C</a>=0</h1>
    <form action="#" method="post">
      <label for="A">write A:</label>
      <input type="text" id="A" name="A" required>

      <label for="B">write B:</label>
      <input type="text" id="B" name="B" >

      <label for="C">write C:</label>
      <textarea id="C" name="C" ></textarea>

      <input type="submit" value="Submit">
    </form>
  </div>
  <div class="container">
  <!-- <?php
  $resul = 0;
  echo $resul; ?> -->

  </div>
  <?php
  if(!$_POST['']){
  echo $errmsg = 'please fill all the gaps';
  }
  else {
    ////////////////declar variable
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];
  
    $delta=($B*$B)-4*($A*$C);
    echo 'delta = '.$delta ."<br>";
    /////////////////////delta>0
    if ($delta>0) { 
      echo $resul ='x1 = '. $x1 = -1*($B - sqrt((abs($delta)))/2*$A) ."<br>" 
      .'x2 = '. $x2 = -1*($B - sqrt((abs($delta)))/2*$A) ."<br>";
    }
    /////////////////////delta<0
    elseif ($delta<0) {
      echo $resul= 'no solutions!';
    }
    /////////////////////delta=0
   
    elseif ($delta == 0) {
     echo $resul= 'X= '.$x = -1*($B/(2*$A));
    }

  }

  ?>

</body>
