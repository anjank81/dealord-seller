<?php
header("Content-Type: application/json");
session_start();
include_once('vendor/autoload.php');
$cat_id =$_GET['id'];
function apicall($url)
    {
        $headers = array('Authorization' =>'token c1ad8870c1d535ebbe02e0eb5c9ee3df6a14b312');
        $response = Unirest\Request::get($url, $headers);
        return $response;
    }
$url ="http://api.dealord.com/getcategories?id";
                        $res = apicall($url);
                        $result = $res->body;
                        $cat= array();
                        // print_r($result);
                        for ($i=0;$i<sizeof($result);$i++)
                        {
                            $id = $result[$i]->id;
                            $cname = $result[$i]->c_name;
                            $parent_id  =$result[$i]->parent_id;
                            if($parent_id == $cat_id)
                            {                        
                                $cat[$id] = $cname;
                            }

                        }
?>
<?php if(sizeof($cat)> 0){ 
echo json_encode($cat );
}
else{
    echo json_encode("error: O results" );
}
?>