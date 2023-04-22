<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<?php session_start(); ?> 
<body background= background.jpg>
    <h1 style="text-align:center;font-size:80px;color:gold;"> Welcome to Lucky 9 </h1>
    <form method="post" action ="gui.php" >
    <table align=center>
        <tr>
            <td class = label-text>
                <label style = 'font-weight: bold;font-size:30px;color:yellow'> Player 1 Name: </label>
            </td>
            <td  class = label-text>
                <input type = text name = "banker" style = 'font-weight: bold;font-size:30px;color:blue;' required autocomplete="OFF">
            </td>
            <td>
                &nbsp;
            </td>
            <td>
                &nbsp;
            </td>
            <td>
                    &nbsp;
            </td>
            <td>
                    &nbsp;
            </td>
            <td>
                 &nbsp;
            </td>
            <td  class = label-text>
                <label style = 'font-weight: bold;font-size:30px;color:yellow;'> Player 2 Name: </label>
            </td>
            <td  class = label-text>
                <input type = text name = "player" style = 'font-weight: bold;font-size:30px;color:blue;' required autocomplete="OFF">
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;
            </td>
            
        </tr>
        
        <tr>
            <td>&nbsp;</td>
        
        </tr>
        <tr>
                <td>&nbsp;</td>
            
        </tr>

        <tr>
            <td> &nbsp;</td>
            <td> &nbsp;</td>
            <td colspan =4>
                <button type = submit style="text-align:center; width:200px; height:50px;background:gold;font-size:30px;" name = play> Play Now</button>
            </td>
        </tr>
    
        
    </table>
    </form>

    
</body>
</html>