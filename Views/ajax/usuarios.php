<?php
    session_start();
    include_once('../../Config/config.php');
    $db = new ConexionPGSQL();
    $conn = $db->conectar();

    $action = (isset($_REQUEST['action']) && $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
    
    $id_usuario = $_SESSION['id_usuario'];

    if($conn){
        $query="select * from usuarios where id_estatus != 4";
        $result = pg_query($conn,$query);
        $r = array(); 
    }

?>
<?php
    if($action=='ajax'){
?>

<table id="usuarios" class="display nowrap row-border cell-border" style="width:100%">
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($row=pg_fetch_assoc($result)){
               $r[]=$row;
               $id = $row['id_usuario']; 
               $cedula=$row['cedula'];
               $nombre=$row['nombre'];
               $apellido=$row['apellido'];
               $id_estatus=$row['id_estatus'];
        ?>
        <tr>
            <td><?= $cedula;?></td>
            <td><?= $nombre;?></td>
            <td><?= $apellido;?></td>
            <?php
                if($id_estatus == 1){
            ?>
                    <td><span class="badge bg-primary">Activo</span></td>
            <?php
                }else if ($id_estatus == 2){
            ?>
                <td><span class="badge bg-warning">Inactivo</span></td>
            <?php
                }else if ($id_estatus==3){
                    ?>
                <td><span class="badge bg-danger">Bloqueado</span></td>
            <?php
                }
            ?>
            <td>--</td>
        </tr>
        <?php
            }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>

<?php
    }
?>

<script>
    $(document).ready(function(){

        var tablaUsuarios= $('#usuarios').DataTable({
            "aProcessing": true,
            "aServerSide": true,
            "responsive": true,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "language": {
                "search": "Buscar:",
                "lengthMenu": "Mostar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado - lo sentimos",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)"
            },
            dom: 'Bfrtip',
            "buttons": [
            {
                extend: "copy",
                text: "Copiar"
            },
            {
                extend: "excel",
                text: "Excel",
                title: "Reporte",
                filename: 'Reporte'
            },
            {
                extend: "pdf",
                title: "Reporte",
                filename: 'Reporte'
            },
            {
                extend: "print",
                text: "Imprimir",
                title: "Reporte",
                filename: 'Reporte'
            },
            {
                extend: "colvis",
                text: "Columnas",
            }
            ]
        });

    });
</script>

