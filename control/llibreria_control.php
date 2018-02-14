<?php
//   require_once("vista/llibreria_vista.php");
   switch($_POST["Submit"]){
       case "EsborrarAutor":
           require_once("model/autor_model.php");
           $autor = new autor_model();
           $llistat = $autor->delete_autor($_POST["Registre"]);
           $show = new show();
           $show->showAutors();
           break;
       case "MostrarAutor":
           require_once("model/autor_model.php");
           $classeAutor = new autor_model();
           $autor = $classeAutor->get_autor($_POST["Registre"]);
           require_once("vista/mostrar_autor_vista.php");
           $show = new show();
           $show->showAutors();
           break;
       case "EditarAutor":
           require_once("model/autor_model.php");
           $classeAutor = new autor_model();
           $autor = $classeAutor->get_autor($_POST["Registre"]);
           require_once("vista/form_edit_autor_vista.php");
           $show = new show();
           $show->showAutors();
           break;
       case "CrearAutor":
           require_once("vista/form_create_autor_vista.php");
           $show = new show();
           $show->showAutors();
           break;
       case "StoreAutor":
           require_once("model/autor_model.php");
           $classeAutor = new autor_model();
           $classeAutor->store_autor();
           $show = new show();
           $show->showAutors();
       case "ActualitzaAutor":
           require_once("model/autor_model.php");
           $classeAutor = new autor_model();
           $classeAutor->update_autor($_POST["codi"]);
           $show = new show();
           $show->showAutors();
           break;
       case "EsborrarLlibre":
           require_once("model/llibre_model.php");
           $llibre = new llibre_model();
           $llistat = $llibre->delete_llibre($_POST["Registre"]);
           $show = new show();
           $show->showLlibres();
           break;
       case "MostrarLlibre":
           require_once("model/llibre_model.php");
           $classeLlibre = new llibre_model();
           $llibre = $classeLlibre->get_llibre($_POST["Registre"]);
           require_once("vista/mostrar_llibre_vista.php");
           $show = new show();
           $show->showLlibres();
           break;
       case "EditarLlibre":
           require_once("model/llibre_model.php");
           $classeLlibre = new llibre_model();
           $llibre = $classeLlibre->get_llibre($_POST["Registre"]);
           require_once("vista/form_edit_llibre_vista.php");
           $show = new show();
           $show->showLlibres();
           break;
       case "CrearLlibre":
         require_once("vista/form_create_llibre_vista.php");
         $show = new show();
         $show->showLlibres();
         break;
       case "StoreLlibre":
         require_once("model/llibre_model.php");
         $classeLlibre = new llibre_model();
         $classeLlibre->store_llibre();
         $show = new show();
         $show->showLlibres();
         break;
       case "ActualitzaLlibre":
           require_once("model/llibre_model.php");
           $classeLlibre = new llibre_model();
           $classeLlibre->update_llibre($_POST["codi"]);
           $show = new show();
           $show->showLlibres();
           break;
   }

   switch($_POST["opcio"]) {
       case "Autors":
         $show = new show();
         $show->showAutors();
         break;
       case "Llibres":
         $show = new show();
         $show->showLlibres();
         break;
       default:
         require_once("vista/llibreria_vista.php");
         break;
   }

  class show {
     public function showAutors() {
       require_once("vista/llibreria_vista.php");
       require_once("model/autor_model.php");
       $autor = new autor_model();
       $llistat = $autor->get_autors();
       require_once("vista/autor_vista.php");
     }

     public function showLlibres() {
       require_once("vista/llibreria_vista.php");
       require_once("model/llibre_model.php");
       $llibre = new llibre_model();
       $llistat = $llibre->get_llibres();
       require_once("vista/llibre_vista.php");
     }
  }
   //Cridem a la vista:
//   require_once("vista/llibreria_vista.php");
   //tanquem la connexio amb la BBDD:
   $mysqli->close();
?>