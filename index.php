<?php 

echo '<table border>
        <tr>

            <th>Nombre</th>
            <th>Carré</th>
            <th>Racine</th>
        
        <tr>';

        for($i = 1; $i < 145; $i++) {
            
            echo '<tr>
                    <td>'.$i . '</td>
                    <td>'.$i*$i . '</td>
                    <td>' .round(sqrt($i), 2).'</td>
                    </tr>';
        }

        echo '</table>';
