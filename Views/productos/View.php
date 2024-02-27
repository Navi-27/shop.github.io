<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo media();?>css/stylesheet1.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title><?php echo $data['page_tag']; ?></title>
</head>
<body>
    <header class="t1">
        <div class="container-fluid">
            <div class="row">
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
                    <!-- <div class="tr d-flex w-100 justify-content-end alings-items-end">
                        <input class=" btn form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn " type="submit">Search</button>
                    </div> -->
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <div class="container">
            <div class="row ">
            <div class="col-md-2">
                <div class="contenido d-flex justify-content-center align-items-center flex-wrap p-3">
                    <a><img src="<?php echo media();?>images/uploads/termo1.png" alt="termo1"></a>
                    <a><img src="<?php echo media();?>images/uploads/termo2.png" alt="termo2"></a>
                    <a><img src="<?php echo media();?>images/uploads/termo3.png" alt="termo3"></a>
                    <a><img src="<?php echo media();?>images/uploads/termo4.png" alt="termo4"></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contenido1 d-flex justify-content-center align-items-center p-3 h-100 overflow-hidden">
                    <a><img src="<?php echo media();?>images/uploads/termo1.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="texto1 d-flex flex-column h-100">
                    <div class="p-3">
                        <h1>$producto</h1>
                        <hr>
                        <div class="descrip">
                            <h6>$descripcion_Producto</h6>
                        </div>
                        <hr>
                        <h6>
                            <div class="item">Item: "$item"</div>
                            <div class="referencia">Referencia: "$referencia"</div>
                        </h6>
                    </div>
                    <p class="mt-auto price p-3">
                        <div class="precio del producto">$price_Producto</div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
</html>