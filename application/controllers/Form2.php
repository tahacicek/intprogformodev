<?php

class Form2 extends CI_Controller
{

    /* Sınıfın yapıcı metodu. Sınıf çağırıldığında otomatik çalışır. */
    public function __construct()
    {
        parent::__construct();

        $this->load->model("Form2_Model");
    }

    /* Kayıt formunun ekrana basılması işlemidir. */
    public function index()
    {
        $this->load->view("form2.php");
    }

    public function listele()
    {
        $items = $this->Form2_Model->get_all();
        //print_r($items);
        $viewData = array(
            "items" => $items
        );

        $this->load->view("listele", $viewData);
    }

    public function insert()
    {
        //echo "Form Kayıt İşlemi" ;
        $data = array(
            "id"      => $this->input->post("id"),

            "name"      => $this->input->post("name"),
            "email"     => $this->input->post("email"),
            "service"   => $this->input->post("service"),
            "phone"   => $this->input->post("phone"),
            "type-product"   => $this->input->post("type-product"),
            "from-value"   => $this->input->post("from-value"),
            "to-value"   => $this->input->post("to-value"),
            "message"   => $this->input->post("message"),

        );

        $insert = $this->Form2_Model->insert($data);

        if ($insert) {
echo "Form Başarıyla Gönderildi";
        } else {
echo "Form Başarıyla Gönderilemedi";
           
        }
    }
}
