<?php
// database connection
include 'db.php';


global $link;

        

function connect_db()
{
	global $hostname, $username, $password, $dbname;
        global $link;

        $link = mysql_connect($hostname, $username, $password);
        if (!$link) {
            die('Não foi possível conectar: ' . mysql_error());
        }
        mysql_select_db($dbname);
        
}

function disconnect_db()
{
        global $link;
	mysql_close($link);
}


/******Function: my_mysql_query
   parametros:  $sql
   retorna: $result
	abre e fecha a conexão com o BD
********************/

function my_mysql_query($sql)
{

	connect_db();
        $result = mysql_query($sql);
        if (!$result) {
                    die('Invalid query: ' . mysql_error());
                }
        disconnect_db();
	return $result;
}


function simpleSubscribe($email){
 connect_db();
       
        $email = mysql_real_escape_string($email);
        $sql = "insert into users (email) VALUES ('".$email."')";
	$result = my_mysql_query($sql);
        
        
}

function simpleSuggestion($name){
        connect_db();
        $name = mysql_real_escape_string($name);
        $sql = "insert into toolsuggestion (name) VALUES ('".$name."')";
	$result = my_mysql_query($sql);
        
        
}

function addTool($name, $url="", $pitch="", $description="", $icon="", $tags=array()){
        connect_db();
        $name = mysql_real_escape_string($name);
        $url = mysql_real_escape_string($url);
        $pitch = mysql_real_escape_string($pitch);
        $icon = mysql_real_escape_string($icon);
        $description = mysql_real_escape_string($description);
        
        
        
        $sql = "insert into tool (name, url, pitch, icon, description) VALUES ('$name','$url','$pitch','$icon','$description')";
        $result = my_mysql_query($sql);
        
        $toolId= getToolIdByName($name);
        
		
        foreach($tags as $tag){
				connect_db();
                $tag = mysql_real_escape_string($tag);
                addToolTag($toolId, getTagIdByName($tag));
        }
}

function updateTool($name, $url="", $pitch="", $description="", $icon="", $tags=array()){
        connect_db();
        $name = mysql_real_escape_string($name);
        $url = mysql_real_escape_string($url);
        $pitch = mysql_real_escape_string($pitch);
        $icon = mysql_real_escape_string($icon);
        $description = mysql_real_escape_string($description);
        
        $sql = "update tool set url='$url', pitch='$pitch', description='$description', icon='$icon' where name='".$name."'";
        $result = my_mysql_query($sql);
        
        $toolId= getToolIdByName($name);
        
        foreach($tags as $tag){
	        connect_db();
                $tag = mysql_real_escape_string($tag);
                addToolTag($toolId, getTagIdByName($tag));
        }
        
}

function addToolTag($toolId, $tagId){
        connect_db();
        $toolId = mysql_real_escape_string($toolId);
        $tagId = mysql_real_escape_string($tagId);
        
        $sql = "insert ignore into tooltag (toolId, tagId) VALUES ('$toolId','$tagId')";
        $result = my_mysql_query($sql);
        
        
}

function getTagIdByName($tagName)
{
        connect_db();
        $tagName = mysql_real_escape_string($tagName);
        
	$sql = "SELECT tagId FROM tag where name='".$tagName."'";
	$result =  my_mysql_query($sql);
        
        return mysql_result($result, 0);
}

function getToolIdByName($toolName)
{
        connect_db();
        $toolName = mysql_real_escape_string($toolName);
		$sql = "SELECT toolId FROM tool where name='".$toolName."'";
		$result =  my_mysql_query($sql);
        
        return mysql_result($result, 0);
}

function getTodaysTool()
{
        $today = date("Y-m-d");
        $sql = "SELECT * FROM tool t inner join dailytoolcalendar dtc on t.name=dtc.toolName where date='$today'";
	$result =  my_mysql_query($sql);
        
        return mysql_fetch_assoc($result);       
} 


function getToolsByTag($tagName,$toolToExclude="empty")
{
        connect_db();
        $tagName = mysql_real_escape_string($tagName);
        $toolToExclude = mysql_real_escape_string($toolToExclude);
        $id = getTagIdByName($tagName);
        
	$sql = "SELECT * FROM tool t inner join tooltag tt on t.toolId = tt.toolId where tt.tagId=".$id;
	$result =  my_mysql_query($sql);
	
        $tools=array();
        while ($row = mysql_fetch_array($result)) {
                if($row["name"]!=$toolToExclude) {array_push($tools, $row);} 
        }
        return $tools;
        
}

function getTagsFromTool($toolName)
{
        connect_db();
        $toolName = mysql_real_escape_string($toolName);
        
        $id = getToolIdByName($toolName);
        $sql = "SELECT * FROM tag t inner join tooltag tt on t.tagId = tt.tagId where tt.toolId=".$id;
	$result =  my_mysql_query($sql);
	
        $tags=array();
        while ($row = mysql_fetch_array($result)) {
                array_push($tags, $row);

        }
        
        return $tags;

}

function getFeaturedTools()
{
        $today = date("Y-m-d");
        
	$sql = "SELECT * FROM tool t inner join dailytoolcalendar dtc on t.name=dtc.toolName where date<'$today' order by date desc limit 0,9";
        $result =  my_mysql_query($sql);

        $featuredTools=array();
        while ($row = mysql_fetch_array($result)) {
        array_push($featuredTools, $row);
        }
        return $featuredTools;
}

function getToolByName($toolName)
{
	connect_db();

        $toolName = mysql_real_escape_string($toolName);
		$sql = "SELECT * FROM tool where name='".$toolName."'";
        $result =  my_mysql_query($sql);
        
        
        return mysql_fetch_assoc($result);       
        
}
function getTagByName($tagName)
{
        connect_db();
        $tagName = mysql_real_escape_string($tagName);
        
	$sql = "SELECT * FROM tag where name='".$tagName."'";
        $result =  my_mysql_query($sql);
        
        return mysql_fetch_assoc($result);       
        
}



function getAllTags()
{
	$sql = "SELECT name FROM tag order by name";
        $result =  my_mysql_query($sql);
        $allTags=array();
        while ($row = mysql_fetch_array($result)) {
        array_push($allTags, $row);
        }
        return $allTags;       
}

function getAllLists()
{
	$sql = "SELECT * FROM list";
        $result =  my_mysql_query($sql);
        $allLists=array();
        while ($row = mysql_fetch_array($result)) {
        array_push($allLists, $row);
        }
        return $allLists;       
}

function getAllTools()
{
	$sql = "SELECT * FROM tool order by name";
        $result =  my_mysql_query($sql);
        $allTools=array();
        while ($row = mysql_fetch_array($result)) {
        array_push($allTools, $row);
        }
        return $allTools;       
}

function getListBySlug($slug)
{
        connect_db();
        $slug = mysql_real_escape_string($slug);
        
	$sql = "SELECT * FROM list where slug='".$slug."'";
        $result =  my_mysql_query($sql);
        
        return mysql_fetch_assoc($result);       

}

function getListToolsById($listId)
{
        connect_db();        
	$sql = "SELECT * FROM listtool inner join tool on toolName=name where listId=$listId order by rank asc";
        $result =  my_mysql_query($sql);
        $allListTools=array();
        while ($row = mysql_fetch_array($result)) {
        array_push($allListTools, $row);
        }
        return $allListTools;       

}

function getHotTags()
{
	$sql = "SELECT name, count(*) FROM tag t inner join tooltag tt on t.tagId = tt.tagId group by t.name order by count(*) desc limit 0,6";
        $result =  my_mysql_query($sql);
        $hotTags=array();
                while ($row = mysql_fetch_array($result)) {
                array_push($hotTags, $row);
                }
        return $hotTags;       
        
}

function changeToolDescription($tool, $newvalue){
        connect_db();
        $tool = mysql_real_escape_string($tool);
       $newvalue = mysql_real_escape_string($newvalue);
        
        $result =  my_mysql_query("UPDATE tool SET description='$newvalue' where name='$tool'");
         
       
}


?>