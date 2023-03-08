<?php require_once HEADER; ?>

<div class="container">
<h2> <?php echo $titulo?></h2>
    <div class="card card-body">
    
        <form action="index.php?c=boletos&f=edit" method="POST" name="formProdNuevo" id="formProdNuevo">
        
        <input type="hidden" name="id" id="id" value="<?php echo $bol['bol_id']; ?>"/>
            <div class="form-row">
               <div class="form-group col-sm-6 col-new">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $bol['bol_nombre']; ?>" class="form-control" placeholder="nombre boleto" required>
                </div>

                <div class="form-group col-sm-6 col-new">
                    <label for="categoria">Categoria</label>
                    <select id="categoria" name="categoria" class="form-control">
                       <?php foreach ($categorias as $cat) {
                            $selected='';
                            if($cat->cat_id == $bol['bol_idCategoria']){
                                  $selected='selected="selected"';
                            }
                       ?>
                            <option value="<?php echo $cat->cat_id ?>" <?php echo $selected; ?>>
                            <?php echo $cat->cat_nombre; ?>
                            </option>
                        <?php
                        }
                        ?>   

                    </select>
                </div>
                <div class="form-group col-sm-6 col-new">
                    <label for="precio">Precio</label>
                    <input type="text" name="precio" id="precio" value="<?php echo $bol['bol_precio']; ?>" class="form-control" placeholder="precio boleto" required>
                </div>          

                <div class="form-group col-sm-12 col-new">
                    <input type="checkbox" id="estado" value="<?php echo $bol['bol_estado']?>" 
                           name="estado"  <?php echo ($bol['bol_estado'] == 1)?'checked="checked"':''; ?> >
                    
                    <label for="estado">Activo</label>
                </div>
                <div class="form-group mx-auto">
                    <button type="submit" class="btn btn-primary"
                     onclick="if (!confirm('Esta seguro de modificar el boleto?')) return false;" >Guardar</button>
                    <a href="index.php?c=boletos&f=index" class="btn btn-primary">Cancelar</a>
                </div>
                    
            </div>  
        </form>
    </div>
</div>

<?php require_once FOOTER; ?>