<?php
// Array with names
$a[] = "Amon Amarth";
$a[] = "Arch Enemy";
$a[] = "KoRn";
$a[] = "Rotting Christ";
$a[] = "Behemoth";
$a[] = "Mayhem";
$a[] = "Marduk";
$a[] = "Equilibrium";
$a[] = "Yellowcard";
$a[] = "Skillet";
$a[] = "Sum 41";
$a[] = "Blink 182";
$a[] = "Bowling For Soup";
$a[] = "Jimmy Eat World";
$a[] = "Insomnium";
$a[] = "Pillar";
$a[] = "Simple Plan";
$a[] = "Ensiferum";
$a[] = "Korpiklaani";
$a[] = "Manegarm";
$a[] = "Eluvitie";
$a[] = "Five Finger Death Punch";
$a[] = "Avenged Sevenfold";
$a[] = "Slipknot";
$a[] = "Hatebreed";
$a[] = "Children Of Bodom";
$a[] = "Beast In Black";
$a[] = "Flyleaf";
$a[] = "Burzum";
$a[] = "Dark Funeral";
$a[] = "Paddy and the Rats";
$a[] = "Mr. Irish Bastard";
$a[] = "Dope";
$a[] = "The Lost Prophets";
$a[] = "Breakaway";
$a[] = "Downplay";
$a[] = "Raaka-Aine";
$a[] = "Good Charlotte";
$a[] = "Green Day";
$a[] = "Linkin Park";
$a[] = "We Came As Romans";
$a[] = "Kreator";
$a[] = "Meat Loaf";
$a[] = "Meshuggah";
$a[] = "Moonsorrow";
$a[] = "Immortal";
$a[] = "Motionless In White";
$a[] = "Muse";
$a[] = "Neck Deep";
$a[] = "The Offspring";
$a[] = "Orden Ogan";
$a[] = "Papa Roach";
$a[] = "Powerwolf";
$a[] = "Rammstein";
$a[] = "Sabaton";
$a[] = "Twilight Force";
$a[] = "Týr";
$a[] = "Unleash The Archers";
$a[] = "Whitechapel";
$a[] = "Wintersun";
$a[] = "Wolfchant";
$a[] = "Within Temptation";
$a[] = "Zebrahead";
$a[] = "Volbeat";
$a[] = "Vintersorg";
$a[] = "Vogelfrey";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "<br>";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "<br> $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
