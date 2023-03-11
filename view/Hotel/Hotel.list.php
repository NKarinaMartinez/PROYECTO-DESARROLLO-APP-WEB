<!-- autor:Lesley Caicedo Guaman -->
<?php require_once HEADER; ?>
 
<div class="container">
    <h2 class="tituloB"> <?php echo $titulo?></h2>
    <!-- fila de busqueda y boton nuevo -->
    <div class="fila">
        <div class="sub-fila1">
            <form action="index.php?c=Hotel&f=search" method="POST" class="search-btn">
                <input type="text" name="b" id="busqueda"  placeholder="buscar..."/>
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>Buscar</button>
            </form>       
        </div>
        <div class="sub-fila2 d-flex">
            <a href="index.php?c=Hotel&f=view_new" class="btn-new"> 
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Agregar</button>
            </a>
        </div>
    </div>
    <!-- tabla de datos -->
    <div class="table-responsive mt-2">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <th class="fila1N">Hotel <i class="fa-sharp fa-solid fa-circle-chevron-down"></i></th>
                <th>Pais <i class="fa-sharp fa-solid fa-circle-chevron-down"></i></th>
                <th>Ciudad <i class="fa-sharp fa-solid fa-circle-chevron-down"></i></th>
                <th>Valor por Dia <i class="fa-sharp fa-solid fa-circle-chevron-down"></i></th>
                <th>Valor por Noche  <i class="fa-sharp fa-solid fa-circle-chevron-down"></i></th>
                <th>Estrellas <i class="fa-sharp fa-solid fa-circle-chevron-down"></i></th>
            </thead>
            <tbody class="tabladatos">
                <?php         
                    foreach ($resultados as $fila) {
                ?>
                <tr>
                    <td class="fila1N"><?php echo $fila['H_nombre'];?></td>
                    <td><?php echo $fila['H_Pais'];?></td>
                    <td><?php echo $fila['H_Ciudad'];?></td>
                    <td><?php echo $fila['H_ValorDia'];?></td>
                    <td><?php echo $fila['H_ValorNoche'];?></td>
                    <td><?php echo $fila['H_Estrellas'];?></td>
                    <td>
                        <a class="btn btn-primary btn-agg" 
                        href="index.php?c=Hotel&f=view_edit&id=<?php echo  $fila['H_id']; ?>">
                        <i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger btn-eli" 
                        onclick="if(!confirm('Esta seguro de eliminar el hotel?'))return false;" 
                        href="index.php?c=Hotel&f=delete&id=<?php echo  $fila['H_id']; ?>">
                        <i class="fa-solid fa-x"></i></a>
                    </td>
                </tr>
                <?php  }?>
            </tbody>
        </table>
    </div>
</div>

<?php  require_once FOOTER ?>