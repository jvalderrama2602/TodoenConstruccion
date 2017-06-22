<?

include('header.php');

?> 

     
<script language="javascript">
$(document).ready(function(){
   $("#category").change(function () {
           $("#category option:selected").each(function () {
            id_category = $(this).val();
            $.post("tipo_producto_sub.php", { id_category: id_category }, function(data){
                $("#subcategory").html(data);
            });            
        });
   })
});
</script>
   

  <!-- Page Content -->
 <br>
    <div class="container">
        <div class="row">

            <div class="col-md-2">
               <form name="formulario" id="formulario" method="post" action="venta10.php" >
                <p class="lead">Venta</p>
                <div class="list-group">
					<a class="list-group-item"><strong>Categoria</strong>
                    	<div>
                    		<?		
							$sql2 = "SELECT idcategoria,nombre_categoria FROM categoria WHERE suspendido_categoria='' ORDER BY nombre_categoria ASC ";
							$result2 = $db->query($sql2);
							?>
							<select name="category" id="category" >
								
								<option value="">Selecciona .....</option>
								<?
									while ($query_result = $result2->fetch_array())
									{
										$id_category= $query_result['idcategoria'];
										$nombre_estado= $query_result['nombre_categoria'];
										?><option <? echo"value='$id_category'"; ?>><? echo"$nombre_estado"; ?></option><?
									}
								?>
							</select>
						</div>
                    </a>
					<a class="list-group-item"><strong>Producto</strong>
                    	<div>
                    		<select name="subcategory" id="subcategory" >
			
							</select>
						</div>
                    </a>
					<a class="list-group-item"><strong>Condicion</strong>
                    	<div>
                    		<select name="condicion" id="condicion" >
                    			<option value="">Selecciona .....</option>
								<option value="NUEVO">NUEVO</option>
								<option value="USADO">USADO</option>
							</select>
						</div>
                    </a>
                </div>
                
				</form>
            </div>


            <div class="col-md-10">
            	<div class="row">
            		<div id="refrescar">
            	
            			
					</div>
				</div>
            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
<script>	
$(document).ready( function() {  
    $("#category").change( function() {   
		llamar();
    }); 
	
	$("#subcategory").change( function() {   
		llamar();
    }); 
	
	$("#condicion").change( function() {   
		llamar();
    }); 
});
</script>

<script>
function llamar(pag)
{	
	var pag;
	var valor=$("#category").val();
	var subcategory=$("#subcategory").val();
	var condicion=$("#condicion").val();
	
	$.post("miscript.php", { variable: valor,  subcategory: subcategory, condicion: condicion, Pagina:pag }, function(data){
		$("#refrescar").html(data);
	});	
	
}
</script>

</body>
</html>
