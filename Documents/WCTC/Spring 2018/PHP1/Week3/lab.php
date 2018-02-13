<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Untitled Document</title>

        <style>
            .error{
                color: red;
                font-weight: bold;
            }

        </style>
    </head>

    <body>
        <?php
        $sentence = '';
        ?>

        <form id="form1" name="form1" method="post">
            <p>
                <label>Enter A Sentence:</label><br>
                <textarea id="sentence" id="sentence" name="sentence" rows="4" cols="50">
                </textarea>
            </p>
            <p>
                <input type="submit" name="submit" id="submit" value="Submit">
            </p>
        </form>
        <hr>
        <?php
        // check if the form was submitted
        if (isset($_POST['submit'])) {
            $sentence = $_POST['sentence'];
        }

        $words = explode(" ", $sentence); // indexed array of words
        //echo implode(', ', $words);

        echo '<table>';
        
        
        foreach ($words as $word) {
            $associativeArray[$word] = strlen($word);
           
        }
        echo '<tr>';
            foreach ($associativeArray as $key => $value) {
                echo '<td>' . $key . ": " . $value . '</td>';
            }
            echo '</tr>';
        echo '</table>';
        
        asort($associativeArray);
        
        echo '<tr>';
            foreach ($associativeArray as $key => $value) {
                echo '<td>' . $key . ": " . $value . '</td>';
            }
            echo '</tr>';
        echo '</table>';
        
        reset($associativeArray);
        
        
        echo '<p>The shortest word is : ' . key($associativeArray);
        end($associativeArray);
        echo '<p>The longest word is : ' . key($associativeArray);
        reset($associativeArray);
        ?>
    </body>
</html>