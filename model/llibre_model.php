<?php
    class llibre_model{
        private $db;
        private $llista;

        public function __construct() {
            $this->db = Connectar::connexio();
            $this->llista = array(); 
        }
        public function get_llibres() {
            $query = $this->db->query("SELECT * FROM llibres");
            while($registres=$query->fetch_assoc()) {
                $this->llista[] = $registres;
            }
            return $this->llista;
        }
        public function get_llibre($codi) {
            $query = $this->db->query("SELECT * FROM llibres WHERE codi=".$codi.";");
            $llibre = $query->fetch_array(MYSQLI_ASSOC);
            return $llibre;
        }
        public function delete_llibre($codi) {
            $query = $this->db->query("DELETE FROM llibres WHERE codi=".$codi);
        }
        public function update_llibre($codi)
        {
            $query = "UPDATE llibres SET titol='".$_POST["titol"]."',isbn='".$_POST["isbn"]."',any_publicacio='".$_POST["any_publicacio"]."',descripcio='".$_POST["descripcio"]."',editorial='".$_POST["editorial"]."',lloc_publicacio='" . $_POST["lloc_publicacio"]."' WHERE codi=" . $codi . ";";
            $this->db->query($query);
        }
        public function store_llibre() {
          $cols = "(titol, isbn, any_publicacio, descripcio, editorial, lloc_publicacio)";
          $query = "INSERT INTO llibres ".$cols." VALUES ('".$_POST["titol"]."', '".$_POST["isbn"]."', '".$_POST["any_publicacio"]."', '".$_POST["descripcio"]."', '".$_POST["editorial"]."', '".$_POST["lloc_publicacio"]."');";
          $this->db->query($query);
        }
    }
?>