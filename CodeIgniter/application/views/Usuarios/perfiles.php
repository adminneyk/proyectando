<?php 
foreach ($listaperfiles->result() as $perfil) {
    echo "PER0".$perfil->id_perfil;
    echo $perfil->nombre_perfil;
}
?>