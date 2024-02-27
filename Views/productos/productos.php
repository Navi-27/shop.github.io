<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Assets/css/stylesheet1.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Tienda Virtual</title>
</head>
<body>
    <header class="t1">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-3">
                    <div class="d-flex justify-content-start alings-items-start">
                        <a class="logo" href="<?php echo base_url();?>">
                            <img src="<?php echo media();?>images/uploads/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                        <!-- <div class="bt d-flex justify-content-center aligns-items-center">
                                <button class="btn btn-lg">shop</button>
                                <button class="btn btn-lg">productos</button>
                                <button class="btn btn-lg">contacto</button>
                        </div> -->
                </div>
                <div class="col-md-3">
                    <div class="tr d-flex w-100 justify-content-end alings-items-end">
                        <input class=" btn form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn " type="submit">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="pl">
        <div class="container-fluid">   
                <div class="row">
                    <div class="col-md-3"></div>
                        <div class="col-md-6 d-flex justify-content-center aligns-items-center ">
                            <h1>PRODUCTOS</h1>
                        </div>
                    <div class="col-md-3"></div>
                </div>
        </div>
    </div>
    <div class="cards">
        <div class="container-fluid">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 t3">
                        <div class="card m-0">
                            <div class="card-body">
                                <div class="over">
                                <h5 class="card-title fw-bold;">$producto</h5>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/silla1.png" class="card-img-top " alt="silla rimax">
                                </div>
                                    <div class="buton">
                                        <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-0">
                            <div class="card-body">
                            <div class="over">
                                <h5 class="card-title fw-bold;">$producto</h5>
                                </div>
                            <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/mesa.png" class="card-img-top " alt="silla rimax">
                                </div>
                                <div class="buton">
                                <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-0">
                            <div class="card-body">
                                <div class="over">
                                <h5 class="card-title fw-bold;">$producto</h5>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/termo11.png" class="card-img-top " alt="silla rimax">
                                </div>
                                <div class="buton">
                                <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 t3">
                        <div class="card m-0">
                            <div class="card-body">
                            <div class="over">
                                <h5 class="card-title fw-bold;">$producto</h5>
                                </div>
                            <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/cocina.png" class="card-img-top " alt="silla rimax">
                                </div>
                                        <div class="buton">
                                        <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-0">
                            <div class="card-body">
                            <div class="over">
                                <h5 class="card-title fw-bold;">$producto</h5>
                                </div>
                            <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/cocina.png" class="card-img-top " alt="silla rimax">
                                </div>
                                        <div class="buton">
                                        <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-0">
                            <div class="card-body">
                            <div class="over">
                                <h5 class="card-title fw-bold;">$producto</h5>
                                </div>
                            <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/cocina.png" class="card-img-top " alt="silla rimax">
                                </div>
                                        <div class="buton">
                                        <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 t3">
                        <div class="card m-0">
                            <div class="card-body">
                            <div class="over">
                                <h5 class="card-title fw-bold;">$producto</h5>
                                </div>
                            <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/cocina.png" class="card-img-top " alt="silla rimax">
                                </div>
                                        <div class="buton">
                                        <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-0">
                            <div class="card-body">
                            <div class="over">
                                <h5 class="card-title fw-bold;">$producto</h5>
                                </div>
                            <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/cocina.png" class="card-img-top " alt="silla rimax">
                                </div>
                                        <div class="buton">
                                        <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-0">
                            <div class="card-body">
                            <div class="over">
                                <h5 class="card-title fw-bold;">$prodcuto</h5>
                                </div>
                            <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/cocina.png" class="card-img-top " alt="silla rimax">
                                </div>
                                        <div class="buton">
                                        <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-0">
                            <div class="card-body">
                            <div class="over">
                                <h5 class="card-title fw-bold;">$prodcuto</h5>
                                </div>
                            <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/cocina.png" class="card-img-top " alt="silla rimax">
                                </div>
                                        <div class="buton">
                                        <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-0">
                            <div class="card-body">
                            <div class="over">
                                <h5 class="card-title fw-bold;">$producto</h5>
                                </div>
                            <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/cocina.png" class="card-img-top " alt="silla rimax">
                                </div>
                                        <div class="buton">
                                        <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-0">
                            <div class="card-body">
                            <div class="over">
                                <h5 class="card-title fw-bold;">$prodcuto</h5>
                                </div>
                            <hr>
                                <div class="d-flex justify-content-center justify-content-center aligns-items-center card-img p-3">
                                    <img src="../Assets/images/uploads/cocina.png" class="card-img-top " alt="silla rimax">
                                </div>
                                        <div class="buton">
                                        <a href="<?php echo base_url(); ?>Productos/View/1/">
                                            <button class="card-text btn text-body-secondary" >ITEM:"$item"_______REFERENCIA:"$referencia"</button>
                                        </a>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
</html>