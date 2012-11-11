<?php
require_once 'model.php';

$action = $_POST["action"];


if ($action=="changeDescription"){
        $id= $_POST["id"];
        $newvalue= $_POST["value"];
        $tool = $_POST["tool"];
        echo $newvalue;

        if(isset ($id) && isset($newvalue) && isset($tool) ){
           changeToolDescription($tool, $newvalue);
        }
}


else if ($action=="simpleSubscribe"){
        $email= $_POST["email"];
        if(isset ($email)){
           simpleSubscribe($email);
        }
}

else if ($action=="simpleSuggestion"){
        $toolSuggestion= $_POST["toolSuggestion"];
        if(isset ($toolSuggestion)){
           simpleSuggestion($toolSuggestion);
        }
}

else if ($action=="newTool" || $action=="editTool"){
        $name=$_POST["name"];
        $description= $_POST["description"];
        $pitch= $_POST["pitch"];        
        $url= $_POST["url"];
        $icon= $_POST["icon"];
        
        if(isset($_POST["tags"])) {
                $tags=$_POST["tags"];
        } else {
                $tags=array();
        }
   

        if(isset($name) && isset($url) && isset($pitch) && isset($icon)){
           if($action=="newTool") {
                   addTool($name, $url, $pitch, $description, $icon, $tags);
                   header('Location: new-tool.php');
                   }
           if($action=="editTool") {
                updateTool($name, $url, $pitch, $description, $icon, $tags);
                header('Location: select-tool.php');
                }
        }

}



?>
