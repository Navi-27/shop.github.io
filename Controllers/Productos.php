<?php 

    class Productos extends Controllers{
        public function __construct(){
            parent::__construct();

        }

        public function productos()
        {
            $data['page_id'] = 2;
            $data['page_tag'] = "Productos";
            $data['page_title'] = "Productos en Venta";
            $data['page_name'] = "Productos";
            $this->views->getViews($this,"productos",$data);
        }
        public function view(string $referencia)
        {
            $data['page_id'] = 1;
            $data['page_tag'] = "Producto - ". $referencia;
            $data['page_title'] = "Pagina Principal";
            $data['page_name'] = "home";
            $data['page_content'] = "hola este es el lore :D";
            $this->views->getViews($this,"View",$data);
        }
    }

?>