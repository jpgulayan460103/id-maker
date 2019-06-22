<?php
$get_lrn = isset($_GET['lrn']) ? $_GET['lrn'] : '';
$string = file_get_contents("students_data/$get_lrn.json");
$students_data = json_decode($string, true);

switch (strtolower($students_data['students_grade_options']['value'])) {
  case 'grade 7 -':
    $back = 'grade-7-back';
    $front = 'grade-7-front';
    break;
  case 'grade 8 -':
    $back = 'grade-8-back';
    $front = 'grade-8-front';
    break;
  case 'grade 9 -':
    $back = 'grade-9-back';
    $front = 'grade-9-front';
    break;
  case 'grade 10 -':
    $back = 'grade-10-back';
    $front = 'grade-10-front';
    break;
  case 'grade 11 -':
  case 'grade 12 -':
    $back = 'senior-high-back';
    $front = 'senior-high-front';
    break;
  default:
    $back = 'back';
    $front = 'front';
    break;
}

// echo var_dump($back);
// echo var_dump($front);
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
  *{
    color: black;
    letter-spacing: -0.3pt;
  }

  .back {
    /* font-family: 'BernhardModBTBold'; */
    text-align: center;
  }
  .front {
    /* font-family: 'Copperplate'; */
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
      font-family: 'ArialBoldCustom';
      top: <?= $students_data['guardians_name']['position']['top'] ?>;
      left: <?= $students_data['guardians_name']['position']['left'] ?>;
      font-size: <?= $students_data['guardians_name']['font_size']."pt" ?>;
      height: 12;
      width: 200;
      /* line-height: 15pt */
    }
    #guardians_address{
      font-family: 'ArialBoldCustom';
      top: <?= $students_data['guardians_address']['position']['top'] ?>;
      left: <?= $students_data['guardians_address']['position']['left'] ?>;
      font-size: <?= $students_data['guardians_address']['font_size']."pt" ?>;
      height: 15;
      width: 150;
      line-height: 10pt;
    }
    #guardians_number{
      font-family: 'ArialBoldCustom';
      top: <?= $students_data['guardians_number']['position']['top'] ?>;
      left: <?= $students_data['guardians_number']['position']['left'] ?>;
      font-size: <?= $students_data['guardians_number']['font_size']."pt" ?>;
      height: 15;
      width: 200;
      /* line-height: 15pt */
    }
    #lrn{
      font-family: 'ArialBoldCustom';
      color: white;
      top: <?=  strtolower($students_data['students_grade_options']['value']) == 'grade 11 -' || strtolower($students_data['students_grade_options']['value']) == 'grade 12 -' ? ($students_data['lrn']['position']['top'] + 11) : $students_data['lrn']['position']['top'] ?>;
      left: <?= $students_data['lrn']['position']['left'] ?>;
      font-size: <?= $students_data['lrn']['font_size']."pt" ?>;
      height: 120px;
      line-height: 140px;
      width: 160;
      /* line-height: 10pt */
    }
    #students_strand{
      font-family: 'ArialBoldCustom';
      color: white;
      top: <?= $students_data['students_strand']['position']['top'] ?>;
      left: <?= $students_data['students_strand']['position']['left'] ?>;
      font-size: <?= $students_data['students_strand']['font_size']."pt" ?>;
      height: 120px;
      line-height: 140px;
      width: 160;
      /* line-height: 10pt */
    }
    #students_name{
      font-family: 'ArialBoldCustom';
      top: <?= $students_data['students_name']['position']['top'] ?>;
      left: <?= $students_data['students_name']['position']['left'] ?>;
      font-size: <?= $students_data['students_name']['font_size']."pt" ?>;
      height: 190px;
      line-height: 140px;
      width: 160;
      text-align: center;
      /* text-decoration: underline; */
    }
    /* #students_name span{
      border-bottom: 1pt solid red;
    } */
    
    #students_grade{
      font-family: 'ArialBoldCustom';
      top: <?= $students_data['students_grade']['position']['top'] ?>;
      left: <?= $students_data['students_grade']['position']['left'] ?>;
      font-size: <?= $students_data['students_grade']['font_size']."pt" ?>;
      height: 120px;
      line-height: 140px;
      width: 160;
      /* line-height: 11pt */
    }
    #students_type span{
      outline-color: black;
    }
    #students_type{
      font-family: 'ArialBoldCustom';
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
    <img src="images/id_template/<?= $back ?>.png" alt="" style="border: 1pts solid black;width: 3.5in; margin-left: 10pt">
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

    <img src="images/id_template/<?= $front ?>.png" alt="" style="border: 1pts solid black;width: 3.5in; margin-left: 7pt">
    <div class="fill-text front" id="lrn">
        <span>
          LRN: <?= $students_data['lrn']['value'] ?>
        </span>
    </div>
    <div class="fill-text front" id="students_name">
        <span><?= $students_data['students_name']['value'] ?></span>
    </div>
    <div class="fill-text front" id="students_grade">
        <span>
          <?= $students_data['students_grade']['value'] ?>
        </span>
    </div>
    <?php if(strtolower($students_data['students_grade_options']['value']) == 'grade 11 -' || strtolower($students_data['students_grade_options']['value']) == 'grade 12 -'){  ?>
    <div class="fill-text front" id="students_strand">
        <span>
          <?= $students_data['students_strand']['value'] ?>
        </span>
    </div>
    <?php } ?>
    
</body>
</html>