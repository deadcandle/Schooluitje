<?php

require_once "vendor/autoload.php";

use Schooltrip\Person;
use Schooltrip\Teacher;
use Schooltrip\Student;
use Schooltrip\Group;
use Schooltrip\Schooltrip;

# maak groepen aan
$mh1a = new Group("MH1A");
$mh1b = new Group("MH1B");

# maak studenten aan
$hakurei = new Student("Hakurei Reimu",     $mh1a, true);
$kirisame = new Student("Kirisame Marisa",  $mh1a, false);
$izayoi = new Student("Izayoi Sakuya",      $mh1a, true);
$remilia = new Student("Remilia Scarlet",   $mh1a, false);
$alice = new Student("Alice Margatroid",    $mh1b, true);
$kochiya = new Student("Kochiya Sanae",     $mh1b, false);
$moriya = new Student("Moriya Suwako",      $mh1b, true);
$konpaku = new Student("Konpaku Youmu",     $mh1b, false);

# maak docenten aan
$oedietram = new Teacher("R.A. Oedietram",  50);
$keus = new Teacher("J.H. Keus",            1250);
$helden = new Teacher("J.A. van Helden",    1500);
$wigmans = new Teacher("R.F.J.J. Wigmans",  1750);

# Maak schoolreis aan
$schooltrip = new Schooltrip("Museum");

# Koppel de studenten
$schooltrip->addStudent($hakurei);
$schooltrip->addStudent($kirisame);
$schooltrip->addStudent($izayoi);
$schooltrip->addStudent($remilia);
$schooltrip->addStudent($alice);
$schooltrip->addStudent($kochiya);
$schooltrip->addStudent($moriya);
$schooltrip->addStudent($konpaku);

?>

<style>
    html {
        background-color: black;
        font: 12px Arial;
    }
    table {
        background-color: white;
        padding: 5px;
        width: 50%;
        max-width: 512px;
        margin: auto;
    }
    table th {
        border-bottom: 2px solid black;
    }
    table td {
        background-color: rgb(200, 200, 200);
        padding: 10px 5px;
    }
</style>

<table>
    <tr>
        <th>Docent</th>
        <th>Student</th>
        <th>Klas</th>
        <th>Betaald</th>
    </tr>
    <?php foreach ($schooltrip->getSchooltripLists() as $schooltripList) : ?>
        <tr>
            <td>1</td>
        </tr>
    <?php endforeach; ?>
</table>