<?php include('db.php')?>
<?php 
	if (!isset($_SESSION['idc'])) {
		header('location: login.php');
	} 
?>
<?php include('include/header.php')?>
    <!--MAIN CONTENT-->
    <div class="container">
        <section class="mt-5">
            <h1 class="">Tienda</h1>
            <ol class="p-0 ml-2">
                <li class="d-inline-block"><a href="index.php">Home</a></li>
                <li class="d-inline-block">/</li>
                <li class="d-inline-block">Tienda</li>
            </ol>
        </section>
        <div class="row">
			<?php
			
				$sql = "SELECT * FROM catalogo";

				$rs = mysqli_query($cn,$sql);

				while($fila = mysqli_fetch_row($rs)){
			
			?>
            <div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Sale</span>
						<?= '<img class="img-responsive d-block fakeimg" src=Crud_Administrativo/'.$fila[4].' alt="" style="height:420px">'; ?>
                        <!-- <div class="fakeimg" style="width: 100%; height: 432px;"></div> -->
						<div class="preview-meta">
							<ul>
								<li>
									<!-- <span  data-toggle="modal" data-target="#product-modal">
									</span> -->
									<?= 
										'<a href=informacion_producto.php?id='.$fila[0].' class="text-muted"><i class="fas fa-info-circle"></i></a>';
									?>
								</li>
								<li>
									<?= 
										"<a href=detalle_producto.php?id=".$fila[0]."&pp=".$fila[3]." style='text-decoration: none;' title='Agregar al carrito' class='text-muted'><i class='fas fa-shopping-cart'></i></a>"
									;?>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<?= '<h4>'.$fila[1].'</h4>'; ?>
						<?= '<p>'.$fila[2].'</p>';?>
						<?= '<p>'.'S/. '.$fila[3].'</p>'; ?>
					</div>
				</div>
			</div>
			<?php }?>
			<?php mysqli_close($cn); ?>
        </div>
    </div>
<?php include('include/footer.php')?>