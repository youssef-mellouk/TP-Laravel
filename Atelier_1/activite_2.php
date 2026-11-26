<?php
$etudiants = [
    ["nom" => "Ahmed", "moyenne" => 14],
    ["nom" => "Sara", "moyenne" => 17],
    ["nom" => "Youssef", "moyenne" => 9],
    ["nom" => "Salma", "moyenne" => 12]
];
function showStudents(array $std, bool $is_callBack = false)
{
    if (!$is_callBack) {
        echo "<h2 style='color:blue'>Les etudiants (" . count($std) . "):</h2><br/>";
    }
    foreach ($std as $etudiant) {
        echo "etudiant : {$etudiant['nom']} , moyenne : {$etudiant['moyenne']} <br/><br/>";
    }
}

showStudents($etudiants);

function afficherAdmis($std)
{
    $stdAdmis = array_filter($std, fn(array $etudiant): bool => $etudiant['moyenne'] >= 10);
    if (count($stdAdmis) > 0) {
        echo "<h2 style='color:blue'>les etudiants admis (" . count($stdAdmis) . ") :</h2><br/>";
        showStudents($stdAdmis, true);
    } else {
        echo "Pas des etudiants admis !! ";
    }
}
afficherAdmis($etudiants);


function showAvg(array $std): float
{
    echo "<h2 style='color:blue'>La moyenne general : </h2><br/>";
    $totalNote = array_reduce($std, fn(int $c, array $etudiant): int => $c + $etudiant['moyenne'], 0);
    echo $totalNote / count($std);
    return $totalNote / count($std);
}

showAvg($etudiants);

function showBest(array $std)
{

    $bestNote = max(array_column($std, "moyenne"));
    $bestStudents = array_filter($std, fn(array $etudiant): bool => $etudiant['moyenne'] === $bestNote);
    echo "<h2 style='color:blue'> la meilleure moyenne :  {$bestNote} </h2><br/>";
    showStudents($bestStudents, true);
}

showBest($etudiants);


function sortDescByNote(array &$std):void{
    usort($std, fn(array $a , array $b):int =>$b['moyenne']<=>$a['moyenne']);
}
sortDescByNote($etudiants);
showStudents($etudiants);