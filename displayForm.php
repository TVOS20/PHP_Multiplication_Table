<html>
    <head>
        <title></title>
    </head>
    <body align="center">
		<style >
		        table, td,  {
		             border: 5px solid forestgreen;	
		        }
		    </style>>
        <?php
        $rows;
        $columns;
            if (isset($_POST["rows"]) && isset($_POST["columns"])) {
                    $rows = intval($_POST["rows"]);
                    $columns = intval($_POST["columns"]);
                    
                    
                    echo '<table>';
                        
                    for ($row = 1; $row <= $rows; $row++) {
                            echo '<tr>';
                                

                        for ($col = 1; $col <= $columns; $col++)
                            {
                            $display=$col * $row;
                                echo "<td>$display</td> \n";
                            }
                        
                        echo "</tr>";
                    }
                    echo "</table>";
            }
        ?>
    </body>
</html>