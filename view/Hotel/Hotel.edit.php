<?php
//autor:Lesley Caicedo Guaman 
require_once HEADER; 
?>

<div class="container">
<h2> <?php echo $titulo?></h2>
    <div class="card card-body">
    
        <form action="index.php?c=hotel&f=edit" method="POST" name="formProdNuevo" id="formProdNuevo">
        
        <input type="hidden" name="id" id="id" value="<?php echo $hot['H_id']; ?>"/>
            <div class="form-row">
               <div class="form-group col-sm-6 col-new">
                    <label for="nomb">Nombre</label>
                    <input type="text" name="nomb" id="nombre" value="<?php echo $hot['H_nombre']; ?>" class="form-control" placeholder="nombre hotel" required>
                </div>

                <div class="form-group col-sm-6 col-new">
                    <label for="pais">Pais</label>
                    <input type="text" name="pais" id="pais" value="<?php echo $hot['H_Pais']; ?>" class="form-control" placeholder="Pais hotel" required>
                </div> 
                
                <div class="form-group col-sm-6 col-new">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" value="<?php echo $hot['H_Ciudad']; ?>" class="form-control" placeholder="Ciudad hotel" required>
                </div>

                <div class="form-group col-sm-6 col-new">
                    <label for="VD">Valor por Dia</label>
                    <input type="double" name="VD" id="ValorDia" value="<?php echo $hot['H_ValorDia']; ?>" class="form-control" placeholder="Valor por dia hotel" required>
                </div>  

                <div class="form-group col-sm-6 col-new">
                    <label for="ValorNoche">Valor por Noche</label>
                    <input type="double" name="VN" id="ValorNoche" value="<?php echo $hot['H_ValorNoche']; ?>" class="form-control" placeholder="Valor por Noche hotel" required>
                </div>

                <div class="form-group col-sm-6 col-new">
                    <label for="estrella">Estrellas</label>
                    <input type="int" name="estrella" id="estrella" value="<?php echo $hot['H_Estrellas']; ?>" class="form-control" placeholder="Estrellas hotel" required>
                </div>  

                

                <div class="form-group mx-auto">
                    <button type="submit" class="btn btn-primary"
                     onclick="if (!confirm('Esta seguro de modificar el hotel?')) return false;" >Guardar</button>
                    <a href="index.php?c=hotel&f=index" class="btn btn-primary">Cancelar</a>
                </div>
                    
            </div>  
        </form>
    </div>
</div>

<?php require_once FOOTER; ?>