<?php
    include "conexionDB.php";

    $lista = [];

				$sql = "SELECT * FROM item_compra"; //query
				//run the query
				$result = $conn->query($sql);

				//run the query
				if ($result->num_rows > 0) { 
					echo "<table border=1 style='width:100%'>";
					echo "
						<tr>
							<th>id</th>
							<th>item</th>
							<th>stock</th>
							<th>eliminar</th>
						</tr>";
					while($fila = $result->fetch_assoc()) {
                        array_push($lista, $fila);
						$id = $fila['id'];
						echo "<tr>";
							echo "<td>".$fila['id']."</td>";
							echo "<td>".$fila['item']."</td>";
							echo "<td>".$fila['stock']."</td>";
							echo "<td><a href='db/eliminarItem.php?id=$id'>Eliminar Item<a/></td>";
						echo "</tr>";

					}
					echo "</table>";
				}//close connection
				$conn->close();
?>