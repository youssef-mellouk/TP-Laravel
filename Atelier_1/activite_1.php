<?php
echo "<h1><strong style='color:red'>Activite 1 Correction</strong></h1>  </br>";
echo "<h2 style='color:green'>Travail 1 ----------</h2> ";
$nom = "Youssef";
$prenom = "Mellouk";
$age = 2_1;
$moyenne = 18.05;
$admis = TRUE;
$admisformat = $admis ? "est admis" : "est NON admis";
echo " nome : {$nom}<br/>prenom : {$prenom}<br/>age : $age <br/>moyenne : {$moyenne} <br/>-{$admisformat} ";
echo "<br/><br/><h2>Les types des variables</h2>";
var_dump(
    $nom,
    $prenom,
    $age,
    $moyenne,
    $admis,
);
echo "<h2> des operations arithmetique :<br/></h2>";
echo "moyenne est superieur de 10" . $admisformat . "<br/>";
echo (string) ($admis == 1) . "<br/>";
echo "+ , - , * , / , % , **<br/>";
echo "> , < , >= , <= , == , === , != , !==<br/>";
echo "&& , || , ??<br/>";
echo "+= , -= , *= , /= <br/>";

echo "<h2 style='color:green'>Travail 1 ----------</h2> ";

function checkAdmis(float $note): string
{
    $mention = "";
    if ($note < 10)
        $mention = "Non valide";
    elseif ($note <= 12)
        $mention = "Passable";
    elseif ($note <= 14)
        $mention = "Assez Bien";
    elseif ($note <= 16)
        $mention = "Bien";
    else
        $mention = "Tres bien";

    return $mention;
}
echo ">> {$nom} avec la moyenne {$moyenne} " . checkAdmis($moyenne);

echo "<br/><br/>";

for ($i = 1; $i <= 20; $i++) {
    echo "~" . $i . "&nbsp;";
}

echo "<br/><br/>";
$counter = 1;
while (TRUE) {
    if ($counter > 20) {
        break;
        }
        if ($counter % 2 !== 0) {
            $counter++;
            continue;
            } else {
                echo "{$counter} / 2 = " . $counter / 2 . "(rest est 0)<br/>";
                }
                $counter++;
}