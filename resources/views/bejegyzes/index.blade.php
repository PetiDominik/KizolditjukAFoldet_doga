<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bejegyzés</title>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="http://localhost:8001/api/bejegyzes" method="POST" id="newTev">
            <select name="osztaly_id" id="osztaly_id">
                <?php

use App\Models\Tevekenyseg;

                    foreach($classes as $key => $val) {
                        echo '<option value="' . $val . '">' . $val . '</option>';
                    }
                ?>
            </select>                
            <select name="tevekenyseg_id" id="tevekenyseg_id">
                <?php 
                    foreach($tevs as $key => $val) {
                        echo '<option value="' . $val->tevekenyseg_id . '">' . $val->tevekenyseg_nev . '</option>';
                    }
                ?>
            </select>
            <input type="hidden" name="redirect" value="/index">
            <button type="submit">Küld</button>
        </form>

        <div id="dataTable">
            <table>
                <tr>
                   <th>Osztály</th>
                   <th>Tevékenység</th>
                   <th>Pont</th>
                   <th>Státusz</th>
                </tr>
                <?php 
                    foreach($bejegyzesek as $key => $val) {
                        echo "<tr>";
                        echo '<td>' . $val->osztaly_id . '</td>';
                        echo '<td>' . (Tevekenyseg::where("tevekenyseg_id",$val->tevekenyseg_id)->get()[0]->tevekenyseg_nev) . '</td>';
                        echo '<td>' . $val->pont . '</td>';
                        echo '<td>' . ($val->allapot == 0 ? "Jóváhagyásra vár" : "Elfogadva") .'</td>';
                        echo "</tr>";
                    }
                    ?>
            </table>
        </div>
    </body>
</html>