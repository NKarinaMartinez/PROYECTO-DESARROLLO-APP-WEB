<!-- autor:Nicole Martínez Ochoa -->
<?php 
require_once HEADER; 
?>
 
<div class="container">
    <h2 class="tituloB"> <?php echo $titulo?></h2>
    <!-- fila de busqueda y boton nuevo -->
    <div class="fila">
        <div class="col-sm-6 sub-fila1">
            <form action="index.php?c=boletos&f=search" method="POST" class="search-btn">
                <input type="text" name="b" id="busqueda"  placeholder="buscar..."/>
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>Buscar</button>
            </form>       
        </div>
        <div class="col-sm-6 sub-fila2 d-flex flex-column align-items-end">
            <a href="index.php?c=boletos&f=view_new" class="btn-new"> 
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Agregar</button>
            </a>
        </div>
    </div>
    <!-- tabla de datos -->
    <div class="table-responsive mt-2">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <th>Nombre <i class="fa-sharp fa-solid fa-circle-chevron-down"></i></th>
                <th>Categoría <i class="fa-sharp fa-solid fa-circle-chevron-down"></i></th>
                <th>Precio <i class="fa-sharp fa-solid fa-circle-chevron-down"></i></th>
                <th>Estado <i class="fa-sharp fa-solid fa-circle-chevron-down"></i></th>
                <th>Acciones <i class="fa-sharp fa-solid fa-circle-chevron-down"></i></th>
            </thead>
            <tbody class="tabladatos">
                <?php         
                    foreach ($resultados as $fila) {
                ?>
                <tr>
                    <td><?php echo $fila['bol_nombre'];?></td>
                    <td><?php echo $fila['cat_nombre'];?></td>
                    <td><?php echo $fila['bol_precio'];?></td>
                    <td><?php echo $fila['bol_estado'];?></td>
                    <td>
                        <a class="btn btn-primary" 
                        href="index.php?c=boletos&f=view_edit&id=<?php echo  $fila['bol_id']; ?>">
                        <i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" 
                        onclick="if(!confirm('Esta seguro de eliminar el boleto?'))return false;" 
                        href="index.php?c=boletos&f=delete&id=<?php echo  $fila['bol_id']; ?>">
                        <i class="fa-solid fa-x"></i></a>
                    </td>
                </tr>
                <?php  }?>
            </tbody>
        </table>
    </div>
</div>

<?php  require_once FOOTER ?>