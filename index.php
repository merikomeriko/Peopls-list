<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Peopls list</title>
    <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js.js"></script>
    <script src='js/jquery-sortable.js'></script>
    <link href="css.css" rel="stylesheet">
    </head>
    <body>
        <div class="main_div">
          <?php 
           
            if(isset($_POST['submit'])){
                if(!(isset($_SESSION['inserted_name']))){
                     $name1=$_POST['name_1'];
                     $name2=$_POST['name_2'];
                     $name3=$_POST['name_3'];
                     $name4=$_POST['name_4'];
                     $name5=$_POST['name_5'];
                     $name6=$_POST['name_6'];
                     $name7=$_POST['name_7'];
                }
                
                  echo "<div class='result'>
                        <p>Drag your entered names ♥</p>
                     <ol class='draggable_list'>
                          <li style='color:#cc3399;'>".$name1."</li>
                          <li style='color:#990099;'>".$name2."</li>
                          <li style='color:#6600cc;'>".$name3."</li>
                          <li style='color:#9900ff;'>".$name4."</li>
                          <li style='color:pink;'>".$name5."</li>
                          <li style='color:purple;'>".$name6."</li>
                          <li style='color:#cc66ff;'>".$name7."</li>
                     </ol></div>";
                }
            else echo "
            <form action='index.php' method='post'>
                <p>Please insert 7 names</p>
                <input name='name_1' type='text' placeholder='Insert Name'>
                <input name='name_2' type='text' placeholder='Insert Name'>
                <input name='name_3' type='text' placeholder='Insert Name'>
                <input name='name_4' type='text' placeholder='Insert Name'>
                <input name='name_5' type='text' placeholder='Insert Name'>
                <input name='name_6' type='text' placeholder='Insert Name'>
                <input name='name_7' type='text' placeholder='Insert Name'>
                <input style='background:linear-gradient(to top,#114357,#F29492);' id='send' onclick='check_it()' type='submit'value='Save'>
            </form>";
        ?>
        </div>  
    </body>
</html>