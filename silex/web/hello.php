<?php



$name = ($_GET["name"]);
echo "Hello $name!";


echo "<hr>";
for ($i = 0; $i < 5; $i++) {
    if ($i % 2 == 0) {
        echo "$i - gerade";

    } else {

        echo "$i - ungerade";

    }
    echo "<br/>";
}
echo "<hr>";


if ($_GET["stop"] == null) {
    for ($i = 1; $i <= 5; $i++) {
        echo "$i";
    }


} else {


    $stop = ($_GET["stop"]);

    for ($i = 1; $i <= $stop; $i++) {
        echo "$i";
    }
}
echo "<hr>";

echo "The capital of Germany is Berlin.";

echo "<br/>";
echo "The capital of Germany is Berlin.";

echo "<br/>";

echo "The capital of Germany is Berlin.";

echo "<hr>";