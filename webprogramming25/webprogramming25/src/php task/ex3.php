<!DOCTYPE html>
<html>
<body>

<?php include 'header.php';?>

<main>
    <h2>2. User input Form</h2>
    <form method="post">
        <label>First Name:</label>
        <input type="text" name="firstname" required>

        <label>Last Name:</label>
        <input type="text" name="lastname" required>

        <button type="submit">Submit</button>
    </form>

    <br><br>

    <?php
    if (!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];

        echo "<h3>Hello $fname $lname, You are welcome to my site.</h3>";
    }
    ?>
</main>
</body>
</html>

<hr>
<main>
    <section>
    <h3 class="mt-4">4. HTML Table</h3>

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>5</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Alice</td>
                <td>4</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bob</td>
                <td>5</td>
            </tr>
        </tbody>
    </table>
    </section>
</main>

<hr>
<section>
<main class="container mt-4">
   
    <h3 class="mt-4">5.  String Variables</h3>

    <?php
        $str1 = "Hello";
        $str2 = "World";

        $result = $str1 . " " . $str2;

        $length = strlen($result);

        echo "<p><strong>Joined String:</strong> $result</p>";
        echo "<p><strong>Length of String:</strong> $length</p>";
    ?>
    </section>
</main>

<hr>
<main class="container mt-4">
    <h3>6. Number Addition</h3>
    <?php
        $numbers = array(298, 234, 46);
        $sum = $numbers[0] + $numbers[1] + $numbers[2];
        echo "Number 1: " . $numbers[0] . "<br>";
        echo "Number 2: " . $numbers[1] . "<br>";
        echo "Number 3: " . $numbers[2] . "<br>";
        echo "<strong>Total Sum: " . $sum."
        </strong>";
    ?>
    
</main>

<hr>
<main class="container mt-4">

   
    <h3 class="mt-4">7. Browser Detection</h3>

    <?php
        $browser = $_SERVER['HTTP_USER_AGENT'];

        echo "<p><strong>Your browser information:</strong></p>";
        echo "<p>$browser</p>";
    ?>
</main>

<?php include 'footer.php'; ?>





