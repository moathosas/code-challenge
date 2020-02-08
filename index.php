<html>
<head></head>
<body>
<form action="handle.php" method="post">
    <!--    write first string -->
    <input type="text" name="a">
    <!--    write second string-->
    <input type="text" name="b">
    <!--    this will return the hamming result -->
    <input type="submit" name="action" value="hamming">
    <!--    this will return the levenshtein result -->
    <input type="submit" name="action" value="levenshtein">
</form>

</body>
</html>
<?php
