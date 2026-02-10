 <footer>
     <div class="container">
        <p>&copy; 2026 Web Development Task.</p>

        <?php
        $filename = basename($_SERVER['PHP_SELF']);
        $lastModifiedTime = filemtime($filename);

        echo "<p>This page was Last modified on: " . date("d-m-Y H:i:s", $lastModifiedTime) . "</p>";
    ?>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>