<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
</head>
<body>


<main>
    <h2>Eligibility Check</h2>
        <form method="post" action="">

        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" name="age" id="age" required><br><br>

        <input type="submit" name="submit" value="Check Eligibility">
    </form>

    <br>

   
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age  = $_POST['age'];

        if ($age >= 18) {
            echo "<h3>Hello $name, you are eligible for voting.</h3>";
        } else {
            echo "<h3>Hello $name, you are not eligible for voting.</h3>";
        }
    }
    ?>
</main>

<?php include 'footer.php'; ?>

</body>

 <hr>

    <section>
        <h2> Monthly Holiday Check</h2>        
        <?php
        $currentMonth = date('F');
        
        switch ($currentMonth) {
            case 'August':
                echo "<p>It's August, so it's still holiday.</p>";
                break;
            default:
                echo "<p>Not August, this is $currentMonth so I don't have any holidays</p>";
                break;
        }
        ?>
    </section>

     <hr>

    <section>
        <h2> Multiplication Table</h2>
        <form method="post" action="">
            <label for="number">Enter a number:</label><br>
            <input type="number" name="number" id="number" required><br><br>
            <input type="submit" name="submit_table" value="Generate Table">
        </form>

        <br>

        <?php
        if (isset($_POST['submit_table'])) {
            $n = $_POST['number'];
            echo "<h4>Multiplication table for $n:</h4>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $result = $n * $i;
                echo "<li>$n × $i = $result</li>";
            }
            echo "</ul>";
        }
        ?>
    </section>

    <hr>
    <section>
        <h2> Number Sequence</h2>
        <form method="post" action="">
            <label for="limit">Enter a number (n):</label><br>
            <input type="number" name="limit" id="limit" required><br><br>
            <input type="submit" name="submit_sequence" value="Generate Sequence">
        </form>

        <br>

        <?php
        if (isset($_POST['submit_sequence'])) {
            $n = $_POST['limit'];
            echo "<h4>Numbers from 1 to $n:</h4>";
            echo "<p>";
            $counter = 1;
            while ($counter <= $n) {
                echo $counter;
                if ($counter < $n) {
                    echo ", ";
                }
                $counter++;
            }
            echo "</p>";
        }
        ?>
    </section>

     <hr>

    <section>
        <h2> Array Elements</h2>
        <?php
        $myarray = array("HTML", "CSS", "PHP", "JavaScript");
        
        echo "<h4>Programming Languages:</h4>";
        echo "<ul>";
        foreach ($myarray as $language) {
            echo "<li>$language</li>";
        }
        echo "</ul>";
        ?>
    </section>

</main>

<?php include 'footer.php'; ?>

</body>
</html>
