<link href="ContentText/reservations/BG/TableStyle/styleTable.css" rel="stylesheet" type="text/css"/>
<h1>Здравейте може да резервирате маса на този номер: 0888888888 или като използвате метода по-долу:<h1>
<script src="ContentText/reservations/BG/tableScript.js" type="text/javascript"></script>
<div class="scheme">
    <?php
    $PhotoNames = scandir("./ContentText/reservations/BG/TableIMG");
    $j = 1;
    for ($i = 2; $i < count($PhotoNames); $i++) {
        if ($PhotoNames[$i][7] == "R") {
            echo "<span class = \"$i\"><img onmouseover=\"getTable(this.id)\" class = \"table$i\" id=\"$j\" style=\" width: 50px; height: 50px;\" src=./ContentText/reservations/BG/TableIMG/$PhotoNames[$i]></span>";
        } else {
            echo "<a href=\"./reservationsForm.php\"><span class = \"$i\"><img onmouseover=\"getTable(this.id)\" class = \"table$i\" id=\"$j\" style=\" width: 50px; height: 50px;\" src=./ContentText/reservations/BG/TableIMG/$PhotoNames[$i]></span></a>";
        }
        $j++;
    }
    ?>
</div>
<div class="schemeForm">
    <?php
    require ("./ContentText/reservations/BG/formBG/form.php");
    ?>
</div>