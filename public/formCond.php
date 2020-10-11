<?php
if(isset($_GET['IdUp']) && !empty($_GET['IdUp'])):print('index.php?idu='.$crud->command->Id_P);else:print('index.php');endif;
