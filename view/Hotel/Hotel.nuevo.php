<?php 
//autor:Lesley Caicedo Guaman 
require_once HEADER; 
?>

<div class="container">
<h2> <?php echo $titulo?></h2>
    <div class="row">
        <!-- <div class="sub-card"> -->
            <form action="index.php?c=Hotel&f=new" method="POST" name="formProdNuevo" id="formProdNuevo">
                <div class="form-row ">
                    <div class="form-group col-sm-12 col-new">
                        <label for="nomb">Nombre</label>
                        <input type="text" name="nomb" id="nombre" class="form-control" placeholder="Ingrese nombre" style="width: 880px" required>
                    </div>

                    <div class="form-group col-sm-6 col-new">
                        <label for="pais">Pais</label>
                        <input type="text" name="pais" id="pais" class="form-control" placeholder="Ingrese Pais" required>
                    </div>

                    <div class="form-group col-sm-6 col-new">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Ingrese Ciudad" required>
                    </div>

                    <div class="form-group col-sm-6 col-new">
                        <label for="VD">Valor por Dia</label>
                        <input type="Double" name="VD" id="ValorDia" class="form-control" placeholder="Ingrese Valor por Dia" required>
                    </div>

                    <div class="form-group col-sm-6 col-new">
                        <label for="VN">Valor por Noche</label>
                        <input type="Double" name="VN" id="ValorNoche" class="form-control" placeholder="Ingrese Valor por Noche" required>
                    </div>

                    <div class="form-group col-sm-12 col-new">
                        <label for="estrellas">Estrellas</label>
                        <input type="int" name="estrella" id="estrella" class="form-control" placeholder="Ingrese Estrellas" required>
                    </div>


                    <div class="form-group mx-auto">
                        <button type="submit" class="btn btn-primary btn-gc">Guardar</button>

                        <a href="index.php?c=Hotel&f=index" class="btn btn-primary btn-gc">
                            Cancelar</a>
                    </div>
                </div>  
            </form>
        <!-- </div> -->
    </div>
</div>

<?php require_once FOOTER; ?>