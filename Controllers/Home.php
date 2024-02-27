<?php 

    class Home extends Controllers{
        public function __construct(){
            parent::__construct();

        }

        public function home()
        {
            $data['page_id'] = 1;
            $data['page_tag'] = "Home";
            $data['page_title'] = "Pagina Principal";
            $data['page_name'] = "home";
            $data['page_content'] = "hola este es el lore :D";
            $this->views->getViews($this,"home",$data);
        }
    }

?>