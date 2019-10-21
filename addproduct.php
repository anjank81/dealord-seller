<?php
include_once('vendor/autoload.php');

function apicall($url,$data)
{
    $headers = array('Authorization' =>'token c1ad8870c1d535ebbe02e0eb5c9ee3df6a14b312');
    $body = Unirest\Request\Body::form($data);
    $response = Unirest\Request::post($url, $headers, $body);
    return $response;
}
$main_category= $_POST['main_category'];
$sub_category1 = $_POST['sub_category1'];
$sub_category2 = $_POST['sub_category2'];
$p_name = $_POST['p_name'];
$Length_Unit = $_POST['Length_Unit'];
$Weight_unit = $_POST['Weight_unit'];
$price = $_POST['price'];
$brand = $_POST['brand'];
$length = $_POST['length'];
$width = $_POST['width'];
$weight = $_POST['weight'];
$height =$_POST['height'];
$color = $_POST['color'];
$warranty = $_POST['warranty'];
$warranty_type = $_POST['warranty_type'];
$description = $_POST['description'];
$extra_feature = $_POST['extra_feature'];
$msg ='';


echo $sub_category1;


if($description == null)
{
    $description ="Nothing";
}
if($extra_feature == null)
{
    $extra_feature ="Nothing";
}

if ( (is_numeric ($price) == false) || (is_numeric ($length) == false) || (is_numeric ($height) == false) || (is_numeric ($width) == false) || (is_numeric ($weight) == false) )
{
    if(is_numeric ($price) == false)
    {
        $m = "Price Should be a Numeric Value";
        if ($msg == null)
        {
            $msg = $msg.$m;
        }
        else{
            $msg = $msg."<br/>".$m;
        }
    }
    if(is_numeric ($length) == false)
    {
        $m = "Length Should be a Numeric Value";
        if ($msg == null)
        {
            $msg = $msg.$m;
        }
        else{
            $msg = $msg."<br/>".$m;
        }
    }
    if(is_numeric ($height) == false)
    {
        $m = "Height Should be a Numeric Value";
$n = "Height Should be a Numeric Value";
        if ($msg == null)
        {
            $msg = $msg.$m;
        }
        else{
            $msg = $msg."<br/>".$m;
        }
    }
    if(is_numeric ($width) == false)
    {
        $m = "Width Should be a Numeric Value";
        if ($msg == null)
        {
            $msg = $msg.$m;
        }
        else{
            $msg = $msg."<br/>".$m;
        }
    }
    if(is_numeric ($weight) == false)
    {
        $m = "Weight Should be a Numeric Value";
        if ($msg == null)
        {
            $msg = $msg.$m;
        }
        else{
            $msg = $msg."<br/>".$m;
        }
    }
    header("location:ecommerce_add_product.php?msg=$msg");
}
else{
    $url ="http://api.dealord.com/createproduct/";
    $data = array(
            'sc_id'=>1,
            'p_name'=>$p_name,
            'brand'=>$brand,
            'length'=>$length,
            'width'=>$width,
            'height'=>$height,
            'weight'=>$weight,
            'description'=>$description,
            'warranty_in_years'=>$warranty,
            'extra_feature'=>$extra_feature,
            'color'=>$color,
            'Length Unit'=>$Length_Unit,
            'Weight unit' =>$Weight_unit
            // 'warranty_type'=>$warranty_type,
            // 'price'=>$price            
        );
    $ap = apicall($url,$data);
    $code = $ap->code;
    $body = $ap->body;
    if ($code == 200)
    {
        $msg = "Product".$body."Sucessfully Created";
        header("location:ecommerce_add_product.php?msg=$msg");
    }
    else{
        $msg = "Error while creating product";
        header("location:ecommerce_add_product.php?msg=$msg");
    }
}
