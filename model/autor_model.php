<?php
    class autor_model{
        private $db;
        private $llista;

        public function __construct(){
            $this->db = Connectar::connexio();
            $this->llista = array(); 
        }

        public function get_autors(){
            $query = $this->db->query("SELECT * FROM autors");
            while($registres=$query->fetch_assoc()){
                $this->llista[] = $registres;
            }
            return $this->llista;
        }
        public function get_autor($codi) {
            $query = $this->db->query("SELECT * FROM autors WHERE codi=".$codi.";");
            $autor = $query->fetch_array(MYSQLI_ASSOC);
            return $autor;
        }
        public function delete_autor($codi){
            $query = $this->db->query("DELETE FROM autors WHERE codi=".$codi);
        }
        public function update_autor($codi) {
            $query = "UPDATE autors SET nom='".$_POST["nom"]."',nacionalitat='".$_POST["nacionalitat"]."',descripcio='".$_POST["descripcio"]."' WHERE codi=".$codi.";";
            $this->db->query($query);
        }
        public function store_autor() {
            $cols = "(nom, nacionalitat, descripcio)";
            $query = "INSERT INTO autors ".$cols." VALUES ('".$_POST["nom"]."', '".$_POST["nacionalitat"]."', '".$_POST["descripcio"]."');";
            $this->db->query($query);
        }
    }
?>