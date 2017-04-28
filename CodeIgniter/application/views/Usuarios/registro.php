<html>
<body>
    <h1>
        REGISTRO 
    </h1>
    <?php
    
    $nombres = array('name'=>'nombres',
                     'id'=>'nombres',
                     'placeholder'=>'Nombres');
    $apellidos = array('name'=>'apellidos',
                     'id'=>'apellidos',
                     'placeholder'=>'Apellidos');
    $documento = array('name'=>'documento',
                     'id'=>'documento',
                     'placeholder'=>'Documento');
    $clave = array('name'=>'clave',
                     'id'=>'clave',
                     'type'=>'password');
        echo form_open('login/');
        echo form_label('Nombres','nombres');
        echo form_input($nombres); echo "<bR>";
        echo form_label('Apellidos','apellidos');
        echo form_input($apellidos);echo "<bR>";
        echo form_label('Documento','documento');
        echo form_input($documento);echo "<bR>";
        echo form_label('Clave','clave');
        echo form_input($clave);echo "<bR>";
        echo form_submit('','Registrar');
        echo form_close();
    ?>
</body>
</html>