<?php

require_once "vendor/autoload.php";

use Schooltrip\Person;
use Schooltrip\Teacher;
use Schooltrip\Student;
use Schooltrip\Group;
use Schooltrip\Schooltrip;

# maak groepen aan
$mh1a = new Group("MH1A");
$mh2b = new Group("MH1B");

# maak studenten aan
$hakurei = new Student("Hakurei Reimu",     $mh1a);
$kirisame = new Student("Kirisame Marisa",  $mh1a);
$izayoi = new Student("Izayoi Sakuya",      $mh1a);
$remilia = new Student("Remilia Scarlet",   $mh1a);
$alice = new Student("Alice Margatroid",    $mh2a);
$kochiya = new Student("Kochiya Sanae",     $mh2a);
$moriya = new Student("Moriya Suwako",      $mh2a);
$konpaku = new Student("Konpaku Youmu",     $mh2a);

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
</style>

<table>
    <tr>
        <th>Docent</th>
        <th>Student</th>
        <th>Klas</th>
        <th>Betaald</th>
    </tr>
    <?php
    
    ?>
</table>