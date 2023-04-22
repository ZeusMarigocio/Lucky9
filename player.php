<?php

session_start();
$card1 = array(
    '<img src = "Cards/c1.jpg" width=150>','value'=> 1 ,
    '<img src = "Cards/c2.jpg" width=150>','value'=> 2 ,
    '<img src = "Cards/c3.jpg" width=150>','value'=> 3,
    '<img src = "Cards/c4.jpg" width=150>','value'=> 4 ,
     '<img src = "Cards/c5.jpg" width=150>','value'=> 5 ,
    '<img src = "Cards/c6.jpg" width=150>','value'=> 6 ,
     '<img src = "Cards/c7.jpg" width=150>','value'=> 7 ,
     '<img src = "Cards/c8.jpg" width=150>','value'=> 8 ,
    '<img src = "Cards/c9.jpg" width=150>','value'=> 9 ,
     '<img src = "Cards/c10.jpg" width=150>','value'=> 10 ,
     '<img src = "Cards/s1.jpg" width=150>','value'=> 11 ,
     '<img src = "Cards/s2.jpg" width=150>','value'=> 12 ,
     '<img src = "Cards/s3.jpg" width=150>','value'=> 13 ,
    '<img src = "Cards/s4.jpg" width=150>','value'=> 14 ,
     '<img src = "Cards/s5.jpg" width=150>','value'=> 15 ,
     '<img src = "Cards/s6.jpg" width=150>','value'=> 16 ,
     '<img src = "Cards/s7.jpg" width=150>','value'=> 17 ,
     '<img src = "Cards/s8.jpg" width=150>','value'=> 18 ,
     '<img src = "Cards/s9.jpg" width=150>','value'=> 19 ,
    '<img src = "Cards/s10.jpg" width=150>','value'=> 20 ,
     '<img src = "Cards/h1.jpg" width=150>','value'=> 21 ,
     '<img src = "Cards/h2.jpg" width=150>','value'=> 22 ,
     '<img src = "Cards/h3.jpg" width=150>','value'=> 23 ,
    '<img src = "Cards/h4.jpg" width=150>','value'=> 24 ,
    '<img src = "Cards/h5.jpg" width=150>','value'=> 25 ,
    '<img src = "Cards/h6.jpg" width=150>','value'=> 26 ,
   '<img src = "Cards/h7.jpg" width=150>','value'=> 27 ,
     '<img src = "Cards/h8.jpg" width=150>','value'=> 28 ,
     '<img src = "Cards/h9.jpg" width=150>','value'=> 29 ,
    '<img src = "Cards/h10.jpg" width=150>','value'=> 30 ,
    '<img src = "Cards/d1.jpg" width=150>','value'=> 31 ,
     '<img src = "Cards/d2.jpg" width=150>','value'=> 32 ,
     '<img src = "Cards/d3.jpg" width=150>','value'=> 33 ,
     '<img src = "Cards/d4.jpg" width=150>','value'=> 34 ,
     '<img src = "Cards/d5.jpg" width=150>','value'=> 35 ,
     '<img src = "Cards/d6.jpg" width=150>','value'=> 36 ,
     '<img src = "Cards/d7.jpg" width=150>','value'=> 37 ,
     '<img src = "Cards/d8.jpg" width=150>','value'=> 38 ,
    '<img src = "Cards/d9.jpg" width=150>','value'=> 39 ,
    '<img src = "Cards/d10.jpg" width=150>','value'=> 40 


);
$_SESSION['card3'] = $card1;
$_SESSION['card4'] = $card1;

$r = $_SESSION['random'];

$r2 = $_SESSION['random2'] ;


for ($i = 0;$i <=39;$i++) {  
  $temp = rand (0, 39);
  if ($temp != $r && $temp != $r2) {
       $r3 = $temp;
        break;
  }
}
for ($i = 0;$i <=39;$i++) {  
  $temp = rand (0, 39);
  if ($temp != $r  && $temp != $r2 && $temp != $r3) {
       $r4 = $temp;
        break;
  }
}
$_SESSION['random3'] = $r3;
$random3 =$r3;
$_SESSION['random4'] = $r4;
$random4 =$r4;

$card3banker = $_SESSION['card1'];
$card4banker = $_SESSION['card1'];
$cardpick3 = $_SESSION['card3'];
$cardpick4 = $_SESSION['card4'];

$result3 = $card3banker[$random3];
$result4 = $card4banker[$random4];
$_SESSION['result3'] = $result3;
$_SESSION['result4'] = $result4;

echo $result3." ". $result4;
if ($result3 == $card1[0]){

  $_SESSION['cardvalue3'] = 1;

}elseif ($result3 == $card1[1]){
  
  $_SESSION['cardvalue3']= 2;

}elseif ($result3 == $card1[2]){
  
  $_SESSION['cardvalue3']= 3;
  
}elseif ($result3 == $card1[3]){

  $_SESSION['cardvalue3']= 4;
  
}elseif ($result3 == $card1[4]){
  
  $_SESSION['cardvalue3'] = 5;
  
}elseif ($result3 == $card1[5]){
  
  $_SESSION['cardvalue3'] = 6;
  
}elseif ($result3 == $card1[6]){
  
  $_SESSION['cardvalue3'] = 7;
  
}elseif ($result3 == $card1[7]){

  $_SESSION['cardvalue3'] = 8;
  
}elseif ($result3 == $card1[8]){

  $_SESSION['cardvalue3'] = 9;
  
}elseif ($result3 == $card1[9]){
  
  $_SESSION['cardvalue3'] = 0;

}elseif ($result3 == $card1[10]){
  
  $_SESSION['cardvalue3'] = 1;

}elseif ($result3 == $card1[11]){
  
  $_SESSION['cardvalue3']= 2;
  
}elseif ($result3 == $card1[12]){
  
  $_SESSION['cardvalue3'] = 3;

}elseif ($result3 == $card1[13]){

  $_SESSION['cardvalue3']= 4;
  
}elseif ($result3 == $card1[14]){
  
  $_SESSION['cardvalue3'] = 5;

}elseif ($result3 == $card1[15]){
  
  $_SESSION['cardvalue3'] = 6;

}elseif ($result3 == $card1[16]){
  
  $_SESSION['cardvalue3'] = 7;
  
}elseif ($result3 == $card1[17]){

  $_SESSION['cardvalue3']= 8;
  
}elseif ($result3 == $card1[18]){

  $_SESSION['cardvalue3'] = 9;
  
}elseif ($result3 == $card1[19]){
  
  $_SESSION['cardvalue3'] = 0;

}elseif ($result3 == $card1[20]){
  
  $_SESSION['cardvalue3']= 1;

}elseif ($result3 == $card1[21]){
  
  $_SESSION['cardvalue3'] = 2;

}elseif ($result3 == $card1[22]){
  
  $_SESSION['cardvalue3'] = 3;

}elseif ($result3 == $card1[23]){

  $_SESSION['cardvalue3'] = 4;

}elseif ($result3 == $card1[24]){
  
  $_SESSION['cardvalue3'] = 5;

}elseif ($result3 == $card1[25]){
  
  $_SESSION['cardvalue3'] = 6;

}elseif ($result3 == $card1[26]){
  
  $_SESSION['cardvalue3'] = 7;

}elseif ($result3 == $card1[27]){

  $_SESSION['cardvalue3'] = 8;

}elseif ($result3 == $card1[28]){

  $_SESSION['cardvalue3'] = 9;
  
}elseif ($result3 == $card1[29]){
  
  $_SESSION['cardvalue3'] = 0;
  
}if ($result3 == $card1[30]){
  
  $_SESSION['cardvalue3'] = 1;
  
}elseif ($result3 == $card1[31]){
  
  $_SESSION['cardvalue3']= 2;

}elseif ($result3 == $card1[32]){
  
  $_SESSION['cardvalue3'] = 3;

}elseif ($result3 == $card1[33]){

  $_SESSION['cardvalue3'] = 4;

}elseif ($result3 == $card1[34]){
  
  $_SESSION['cardvalue3']= 5;

}elseif ($result3 == $card1[35]){
  
  $_SESSION['cardvalue3'] = 6;

}elseif ($result3 == $card1[36]){
  
  $_SESSION['cardvalue3']= 7;

}elseif ($result3 == $card1[37]){

  $_SESSION['cardvalue3'] = 8;

}elseif ($result3 == $card1[38]){

  $_SESSION['cardvalue3']= 9;

}elseif ($result3 == $card1[39]){
  
  $_SESSION['cardvalue3']= 0;

}
if ($result4 == $card1[0]){
  
  $_SESSION['cardvalue4']= 1;

}elseif ($result4== $card1[1]){
  
  $_SESSION['cardvalue4'] = 2;

}elseif ($result4 == $card1[2]){
  
  $_SESSION['cardvalue4'] = 3;

}elseif ($result4 == $card1[3]){

  $_SESSION['cardvalue4']= 4;
  
}elseif ($result4 == $card1[4]){
  
  $_SESSION['cardvalue4']= 5;

}elseif ($result4 == $card1[5]){
  
  $_SESSION['cardvalue4'] = 6;

}elseif ($result4 == $card1[6]){
  
  $_SESSION['cardvalue4'] = 7;

}elseif ($result4 == $card1[7]){

  $_SESSION['cardvalue4'] = 8;

}elseif ($result4 == $card1[8]){

  $_SESSION['cardvalue4']= 9;

}elseif ($result4 == $card1[9]){
  
  $_SESSION['cardvalue4'] = 0;
  
}elseif ($result4 == $card1[10]){
  
  $_SESSION['cardvalue4'] = 1;
  
}elseif ($result4 == $card1[11]){
  
  $_SESSION['cardvalue4'] = 2;

}elseif ($result4 == $card1[12]){
  
  $_SESSION['cardvalue4'] = 3;
  
}elseif ($result4 == $card1[13]){

  $_SESSION['cardvalue4'] = 4;
  
}elseif ($result4 == $card1[14]){
  
  $_SESSION['cardvalue4'] = 5;
  
}elseif ($result4 == $card1[15]){
  
  $_SESSION['cardvalue4'] = 6;
  
}elseif ($result4== $card1[16]){
  
  $_SESSION['cardvalue4']= 7;
  
}elseif ($result4 == $card1[17]){

  $_SESSION['cardvalue4']= 8;

}elseif ($result4 == $card1[18]){

  $_SESSION['cardvalue4']= 9;
  
}elseif ($result4 == $card1[19]){
  
  $_SESSION['cardvalue4']= 0;

}elseif ($result4 == $card1[20]){
  
  $_SESSION['cardvalue4'] = 1;
  
}elseif ($result4 == $card1[21]){
  
  $_SESSION['cardvalue4'] = 2;
  
}elseif ($result4 == $card1[22]){
  
  $_SESSION['cardvalue4'] = 3;
  
}elseif ($result4 == $card1[23]){

  $_SESSION['cardvalue4'] = 4;

}elseif ($result4 == $card1[24]){
  
  $_SESSION['cardvalue4']= 5;
  
}elseif ($result4 == $card1[25]){
  
  $_SESSION['cardvalue4'] = 6;
  
}elseif ($result4 == $card1[26]){
  
  $_SESSION['cardvalue4'] = 7;

}elseif ($result4 == $card1[27]){

  $_SESSION['cardvalue4'] = 8;

}elseif ($result4 == $card1[28]){

  $_SESSION['cardvalue4'] = 9;
  
}elseif ($result4 == $card1[29]){
  
  $_SESSION['cardvalue4'] = 0;

}if ($result4== $card1[30]){
  
  $_SESSION['cardvalue4']= 1;

}elseif ($result4 == $card1[31]){
  
  $_SESSION['cardvalue4']= 2;

}elseif ($result4 == $card1[32]){
  
  $_SESSION['cardvalue4'] = 3;
  
}elseif ($result4 == $card1[33]){

  $_SESSION['cardvalue4'] = 4;

}elseif ($result4 == $card1[34]){
  
  $_SESSION['cardvalue4'] = 5;
  
}elseif ($result4 == $card1[35]){
  
  $_SESSION['cardvalue4']  = 6;

}elseif ($result4 == $card1[36]){
  
  $_SESSION['cardvalue4'] = 7;

}elseif ($result4 == $card1[37]){

  $_SESSION['cardvalue4'] = 8;

}elseif ($result4 == $card1[38]){

  $_SESSION['cardvalue4'] = 9;

}elseif ($result4 == $card1[39]){
  
  $_SESSION['cardvalue4'] = 0;
}

$_SESSION['score2'] = $_SESSION['cardvalue3'] + $_SESSION['cardvalue4'];
if ($_SESSION['score2']>9){
  $_SESSION['finalscore2'] = $_SESSION['score2']-10;
}else{
  $_SESSION['finalscore2'] = $_SESSION['score2'];
}

header ('Location:gui.php')
?>