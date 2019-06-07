<?php
$get_lrn = isset($_GET['lrn']) ? $_GET['lrn'] : '';
$string = file_get_contents("students_data/$get_lrn.json");
$students_data = json_decode($string, true);
// echo var_dump($students_data);
// exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
  @font-face {
    font-family: 'BernhardModBTBold';
    src: url("fonts/BernhardModBTBold.ttf");
  }
  @font-face {
    font-family: 'Copperplate';
    src: url("fonts/Copperplate Gothic Light Regular.ttf");
  }
  @font-face {
    font-family: 'ArialBoldCustom';
    src: url("fonts/arial.ttf");
  }
  @font-face {
    font-family: 'CalibriCustom';
    src: url("fonts/Calibri.ttf");
  }

  .back {
    font-family: 'BernhardModBTBold';
    text-align: center;
  }
  .front {
    font-family: 'Copperplate';
    text-align: center;
  }
  .fill-text{
    position:absolute;
    /* border: 1pt solid black; */
    /* text-shadow: 1px 0 0 */
  }

    #school-year{
      font-family: 'ArialBoldCustom';
      text-shadow: 1px 0 0
    }


    #guardians_name{
      top: <?= $students_data['guardians_name']['position']['top'] ?>;
      left: <?= $students_data['guardians_name']['position']['left'] ?>;
      font-size: <?= $students_data['guardians_name']['font_size']."pt" ?>;
      height: 12;
      width: 131;
      /* line-height: 15pt */
    }
    #guardians_address{
      top: <?= $students_data['guardians_address']['position']['top'] ?>;
      left: <?= $students_data['guardians_address']['position']['left'] ?>;
      font-size: <?= $students_data['guardians_address']['font_size']."pt" ?>;
      height: 15;
      width: 131;
      /* line-height: 15pt */
    }
    #guardians_number{
      top: <?= $students_data['guardians_number']['position']['top'] ?>;
      left: <?= $students_data['guardians_number']['position']['left'] ?>;
      font-size: <?= $students_data['guardians_number']['font_size']."pt" ?>;
      height: 15;
      width: 131;
      /* line-height: 15pt */
    }
    #lrn{
      font-family: 'CalibriCustom';
      color: white;
      top: <?= $students_data['lrn']['position']['top'] ?>;
      left: <?= $students_data['lrn']['position']['left'] ?>;
      font-size: <?= $students_data['lrn']['font_size']."pt" ?>;
      height: 120px;
      line-height: 80px;
      width: 71;
      /* line-height: 10pt */
    }
    #students_name{
      top: <?= $students_data['students_name']['position']['top'] ?>;
      left: <?= $students_data['students_name']['position']['left'] ?>;
      font-size: <?= $students_data['students_name']['font_size']."pt" ?>;
      height: 190px;
      line-height: 140px;
      width: 138;
      text-align: center;
    }
    
    #students_grade{
      top: <?= $students_data['students_grade']['position']['top'] ?>;
      left: <?= $students_data['students_grade']['position']['left'] ?>;
      font-size: <?= $students_data['students_grade']['font_size']."pt" ?>;
      height: 120px;
      line-height: 90px;
      width: 124;
      /* line-height: 11pt */
    }
    #students_type span{
      outline-color: black;
    }
    #students_type{
      top: <?= $students_data['students_type']['position']['top'] ?>;
      left: <?= $students_data['students_type']['position']['left'] ?>;
      font-size: <?= $students_data['students_type']['font_size']."pt" ?>;
      /* top: 207;
      left: 196;
      font-size: 11.98pt; */
      height: 120px;
      line-height: 80px;
      width: 164;
      letter-spacing: -1.8px;
      font-family: 'CalibriCustom';
      color: #00f6ff;
      text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
      /* line-height: 11pt */
    }
  </style>
  <title>ID</title>
</head>
<body>
  <br>
  <br>
  <br>
  <center>
  
  <br>
  <br>
  
  <!-- <img src="images/id_template/front.png" alt="" style="border: 1pts solid black;width: 2.26in"> -->
  </center>
    <img src="images/id_template/back-final.png" alt="" style="border: 1pts solid black;width: 2.258in; margin-left: 10pt">
    <div class="fill-text back" id="guardians_name">
        <span>
          <?= $students_data['guardians_name']['value'] ?>
        </span>
    </div>
    <div class="fill-text back" id="guardians_address">
        <span>
          <?= $students_data['guardians_address']['value'] ?>
        </span>
    </div>
    <div class="fill-text back" id="guardians_number">
        <span>
          <?= $students_data['guardians_number']['value'] ?>
        </span>
    </div>

    <img src="images/id_template/front.png" alt="" style="border: 1pts solid black;width: 2.258in; margin-left: 10pt">
    <div class="fill-text front" id="lrn">
        <span>
          LRN: <?= $students_data['lrn']['value'] ?>
        </span>
    </div>
    <div class="fill-text front" id="students_name">
        <span>
          <?= $students_data['students_name']['value'] ?>
        </span>
    </div>
    <div class="fill-text front" id="students_grade">
        <span>
          <?= $students_data['students_grade']['value'] ?>
        </span>
    </div>
    <div class="fill-text front" id="students_type">
        <span>
          <?= $students_data['students_type']['value'] ?>
        </span>
    </div>
    
</body>
</html>