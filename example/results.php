<?php
$wordListFile = "./files/words.txt";

include "../php/search.list.php";
$ListSearch = new ListSearch();

if (isset($_GET['q']) && isset($_GET['show'])) {
    $query = strtolower($_GET['q']);
    $opt = $_GET['show'];
} else {
    header("Location: index.html");
}
?>
<html>
<head>
    <title>Results</title>
</head>
<body>  
<?php
    echo "<table>";
    foreach ($ListSearch->searchTextList($wordListFile, $query, $opt) as $result) {
        echo $result;
    }
    echo "</table>";
?>
</body>
</html>