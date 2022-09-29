<?php
  session_start();
?>

<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Lab 1 Web</title>
    </head>

    <body>
        
        <div id="mainContent">

            <!-- headline -->

            <div id="headline">
                <h1>Mustafin Rodion</h1>
                <h2>P32301 <br> Lab 1 - Web 1 3012</h2>
            </div>

            <!-- sidebar -->

            <div id="sidebar">
              <div id="sidebar_content">
                <img src="img/areas.png">
              </div>  
            </div>

            <!-- form -->

            <div class="panel" id="formPanel">

                <form id="form" action="script/script.php" method="get">

                    <div class="form_wrapper">

                        <!-- x coordinate -->

                        <div id="formTop" class="formPart">
                            <label for="x_value">Type X from -5 to 5</label>
                            <div>
                                <input type="text" name="x_value" id="x_value" placeholder="0" maxlength="15" required>
                                <div id="x_message"></div>
                            </div>
                        </div>

                        <br>

                        <!-- y coordinate -->

                        <div id="formCenter" class="formPart">
                            <label for="y_value">Choose Y</label>
                            <div>
                                <select name="y_value" id="y_value">
                                    <?php
                                        for ($i=5; $i>=-3; $i--){
                                            echo "<option value='$i'>$i</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <br>

                        <!-- radius -->

                        <div id="formBottom" class="formPart">
                            <label>Select R</label>
                            <div>
                                <?php
                                    for ($j=1; $j<=3; $j+=0.5){
                                        echo "<div class='radio_wrapper'>";
                                        echo "<input type='radio' name='r_value' id='r-$j' value=$j>";
                                        echo "<label for='r-$j'>$j</label>";
                                        echo "</div>";
                                    }
                                ?>
                            </div>
                        </div>

                        <!-- submit -->

                        <input type="submit" name="submit" value="Send" />

                    </div>
                </form>

            </div>

            <!-- table -->

            <div id="tableDiv">
                <h1>result</h1>
                <table>
                    <thead>
                        <tr>
                            <th>X</th>
                            <th>Y</th>
                            <th>R</th>
                            <th>Result</th>
                            <th>Attempt time</th>
                            <th>Processing time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (! isset($_SESSION['points'])){
                                $_SESSION['points'] = array();
                            } else {
                                foreach ($_SESSION['points'] as $point) {
                                    echo '<tr>';
                                    foreach ($point as $value) {
                                        echo '<td>'.$value.'</td>'; 
                                    }
                                    echo '</tr>';
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

        <script src="js/script.js"></script>

    </body>
</html>