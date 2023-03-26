<?php
//hereda
include ('views/layouts/header.php');

?>
 <!-- Header-->
 <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Los mejores, Textufil</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Todo lo que necesitas</p>
                </div>
            </div>
        </header>
  <!-- Section-->
  <section >
            <div class="container-fluid px-5 my-5">
                <!--Filtro-->
                <div class="row">
                    <div class="col-sm-3">
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header bg-dark text-white">
                                        Categorías
                                    </div>
                                     <div class="card-body">
                                     <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                         <label class="form-check-label" for="flexRadioDefault1">
                                            Categorías
                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <div class="d-grid gap-2">
                                    <button id="btn-filtro" class="btn btn-dark btn-block" type="button"><i class="bi bi-funnel">Aplicar Filtro</i></button>
                                </div>
                            </div>
                        </div>  
                    </div>
                        <div class="col-sm-9">              
                            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                        <?php
                        foreach($info['productos'] as $dato){
                        ?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img src="<?php echo './recursos/img/'. $dato["imagen"]?>" class="card-img-top"  alt="imágenes de productos" width="40px"/>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        
                                        <h5 class="fw-bolder"><?php echo  $dato["Titulo"]?></h5>
                                        <!-- Product price-->
                                        <?php echo '$'. $dato["Precio"]?>
                                    
                                        
                                        
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                    <a class="btn btn-dark mt-auto" href="?c=Principal&a=detalle&id=<?php echo $dato["IdProducto"]?>"><i class="bi bi-eyeglasses"></i></a>
                                    <a class="btn btn-success mt-auto" href="?c=Principal&a=carrito&id=<?php echo $dato["IdProducto"]?>"><i class="bi bi-cart"></i></a>
                                
                                </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <?php
                        }
                        ?>
                        </div>
                        </div>
                    </div>     
                </div>
            </div>        
            </div>
        </section>

        <?php
//hereda
include ('views/layouts/footer.php');

?>
