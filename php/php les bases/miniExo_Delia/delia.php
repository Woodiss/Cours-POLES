<?php


// exo 2
function upMaj($phrase)
{
    echo ucwords($phrase, " ");
}

upMaj("salut a tous comment ca va ?");

echo "<hr>";

// exo 3
$sommaire = [
    ["title" => "Structure de base", "page" => 1],
    ["title" => "Les classes", "page" => 5]
];

echo "<pre>";
echo str_pad("Chapitres", 20, " "), str_pad("Pages", 20, " ", STR_PAD_LEFT), "<br>";

foreach ($sommaire as $item) {
    $formattedTitle = str_pad("Structure de base", 20, " ");
    $formattedPage = str_pad($item["page"], 20, ".", STR_PAD_LEFT);
    echo  $formattedTitle . " " . $formattedPage . "<br>";
}
echo "</pre>";
echo "<hr>";



// exo 4

echo '"' . "&lt;ul>&lt;li>item1&lt;/li>&lt;li>item2&lt;/li>&lt;/ul>" . '"' . "<br>";
echo htmlspecialchars('"<ul><li>item1</li><li>item2</li></ul>"');
echo "<hr>";




// exo 5
$note = array(
    "Said" => 13,
    "Badj" => 16,
    "Najat" => 15
);

$note["Zarim"] = 10;
$note["Guigui"] = 10;

unset($note["Badj"]);

echo "<pre>";
print_r($note);
echo "</pre>";
ksort($note);


echo "ordre alphabétique :<br>";
print_r($note);

echo "<br>";
echo "<br>";
echo "ordre par note :<br>";

asort($note);
print_r($note);

echo "<br>";
echo "<br>";
echo "note la plus haute :" . max($note) . "<br>";
echo "note la plus basse :" . min($note) . "<br>";

echo "<br>";
echo "la moyenne est de : " . array_sum($note) / count($note);
// -----------------------------------------------------


for ($i = 4; $i <= 12; $i++) {
    echo "<p>$i</p>";
}

echo "<hr>";

for ($i = 10; $i > 0; $i--) {
    echo "<p>$i</p>";
}

echo "<hr>";

$text = "";
for ($i = 0; $i < 10; $i++) {
    $text .= "*";
    echo "<p>$text</p>";
}

echo "<hr>";

echo "<table border='1' style='border-collapse:collapse; text-align:center;'>";
for ($ligne = 1; $ligne < 6; $ligne++) {
    echo "<tr>";
    for ($celulle = 1; $celulle < 6; $celulle++) {
        echo "<td style='width:20px;'>" . $ligne * $celulle . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
