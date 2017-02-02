<?php
			echo "<div id='commandes' >
                            <h1> Mes commandes</h1>
                                <table class='commande'>
                                     <tr>
                                        <th> Numéro de Commande </th>
                                        <th> Date de Commande </th>
                                        <th> Facture </th>
                                     </tr>";

									 while ($commandes = $res->fetch())
									 {
									   //Mise en forme de la date (explode() coupe en segment une chaîne)
									   $date_cmd= explode(' ',$commandes['date_commande']);
									   $date = explode('-',$date_cmd[0]);
            ?>
									   <tr>
										   <td> <?php echo $commandes['nro_commande']?> </td>
										   <td> <?php echo $date[2],'/',$date[1],'/',$date[0]?> </td>
										   <td> <a href="?do=facture&nro_commande=<?php echo $commandes['nro_commande'] ?>" ><img src ="Images/pdf.png"/></a> </td>
									   </tr>
									   <?php
									 }
                               echo "</table>";
                  echo"</div>";
				?>