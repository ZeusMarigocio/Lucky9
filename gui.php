<!DOCTYPE html>
<html>
 
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body background= background.jpg >
<?php session_start(); 
        #set session mula sa index ipapasa papunta dito yung pangalan na nilagay dun
        if (isset($_POST['banker']) && isset($_POST['player']) ) {
            $_SESSION['banker'] = $_POST['banker'];
            $_SESSION['player'] = $_POST['player'];
            
        }
 
     
        
    ?>
  
    
    <h1 class = header align=center> L U C K Y  9 </h1>
  
    <div class = "container">
   
        <div class = 'banker-name'> 
        
            <?php  
                    if (isset($_SESSION['banker'])) {
                        $banker = $_SESSION['banker'];
                        echo  '<p class =label>'."Player1: " ."<span class = user>" .$banker. "</span>".  '</p>' ;
                    } 
            ?>  
        </div> <!--banker name end -->

        <div class = 'player-name'>
        <?php  
                if (isset($_SESSION['player'])) {
                    $player = $_SESSION['player'];
                    echo  '<p class =label>'."Player2: " ."<span class = user>" .$player. "</span>".  '</p>' ;
                } 
            ?>  
        </div> <!--player nameend -->

        <div class = "banker">
            <?php
            $cover = '<img src = "Cards/cover.jpg" width=150>';
           if (isset($_SESSION['card1']) && isset($_SESSION['card2']) && isset($_SESSION['result1'])&&  isset($_SESSION['result2'])&& isset($_SESSION['finalscore']) ) {
      
          
           
                
                
                            
                
                $card1 = $_SESSION['card1'];
                $card2 = $_SESSION['card2'];
             
                $cardvalue = $_SESSION['card1'];
                $cardvalue2 = $_SESSION['card2'];
                $result1 = $_SESSION['result1'];
                $result2 = $_SESSION['result2'];
                $score = $_SESSION['finalscore'];
            
                echo '<br>';
                echo '<br>';
                echo '<span class = cards>'.$result1. '&nbsp;'.'&nbsp;'.'&nbsp;'. $result2 ."</span>";
                echo '<br>';
          
                echo '<br>';
              
                echo '<span style = "font-size:60px;font-weight:bold;margin-left:232px;color:gold;">'.$score.'</span>';
            }else{
                echo '<br>';
                echo '<br>';
                echo '<span class = cards>'.$cover. '&nbsp;'.'&nbsp;'.'&nbsp;'. $cover ."</span>";
            }
            
            ?>



        </div> <!-- banker card end-->


        <div class = "player">
            <?php

         $cover2 = '<img src = "Cards/cover.jpg" width=150>';
        if (isset($_SESSION['card3']) && isset($_SESSION['result3'])&& isset($_SESSION['result4']) && isset($_SESSION['finalscore2'])) {
          
           
         
                        
            
            $card3 = $_SESSION['card3'];
            $card4 = $_SESSION['card3'];
            $cardvalue3 = $_SESSION['card3'];
            $cardvalue4 = $_SESSION['card3'];
            $result3 = $_SESSION['result3'];
            $result4 = $_SESSION['result4'];
            $score2 = $_SESSION['finalscore2'];
            echo '<br>';
            echo '<br>';
            echo '<span class = cards>'.$result3. '&nbsp;'.'&nbsp;'.'&nbsp;'. $result4 .'</span>';
            echo '<br>';
             
                echo '<br>';
      
                echo '<span style = "font-size:60px;font-weight:bold;margin-left:232px;color:gold;">'.$score2 .'</span>';
            }else{
                echo '<br>';
                echo '<br>';
                echo '<span class = cards>'.$cover2. '&nbsp;'.'&nbsp;'.'&nbsp;'. $cover2 ."</span>";
            }
            
         

            ?>

            

       
  
            
           
        </div> <!-- player card end -->
        
        <div class = button>
        <form method = POST action= banker.php>
        <?php
        if (!isset($_SESSION['card1']) && !isset($_SESSION['card2'])) {
            echo ' <button type = submit name = pick1 class = button-pos> Shuffle Cards</button>';
        }else {
            echo '&nbsp;';
        }
        ?>
        </form>
        
    
        </div>
        <div class = button2>
        
        <?php
        if (isset($_SESSION['card1']) && isset($_SESSION['card2']) && !isset($_SESSION['card3']) && !isset($_SESSION['card4'])) {
            echo'<form method = POST action= player.php>';
            echo ' <button type = submit name = pick2 class = button-pos> Shuffle Cards</button>';
            echo '</form>';
        }
        if (isset($_SESSION['card1']) && isset($_SESSION['card2']) && isset($_SESSION['card3']) && isset($_SESSION['card4'])){
            echo '&nbsp;';
        }
        ?>
        </div>
        <div class = button3>
        <?php
        if (isset($_SESSION['card1']) && isset($_SESSION['card2']) && isset($_SESSION['card3']) && isset($_SESSION['card4'])){
            echo '<form method = POST action= restart.php>';
        echo '<button type = submit name = pick2 class = button-pos> Next Round </button>';
        echo ' </form>';
        }
        ?>
         </div>
       
      
       
        </div>
    
        <br>
        
       
        <div class = winner>
        
            <?php
            if (isset($_SESSION['finalscore']) && isset($_SESSION['finalscore2'])){
                if ($_SESSION['finalscore'] == $_SESSION['finalscore2']){
                    echo '<span style = "font-size:60px;margin-left:-50px">'."DRAW". '</span>';
                }elseif ($_SESSION['finalscore'] > $_SESSION['finalscore2']){
                    echo '<span style = "font-size:60px;margin-left:-30px">'.$_SESSION['banker']." ". "Wins". '</span>';
                }elseif ($_SESSION['finalscore'] < $_SESSION['finalscore2']){
                    echo '<span style = "font-size:60px;margin-left:-20px;">'.$_SESSION['player']. " " ."Wins". '</span>';
                }
            }
             ?>
         
        </div>
       
    </div>  <!--container end -->
</body>

</html>