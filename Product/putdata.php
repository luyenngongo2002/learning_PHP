 <?php
    include("product.php");
    if(empty( $_POST["name"])){
        $name ='';
        $des ='';
        $price ='';
        $num ='';
       
    }
    if(!empty( $_POST["name"])){
        $name = $_POST["name"];
        $des = $_POST["des"];
        $price = $_POST["price"];
        $num= $_POST["num"];
        $content = file_get_contents("data.json");
        $dataArr = json_decode($content, true);
        //$data = new Order(count($dataArr) + 1, $name, $des, $price);
        $data = array('id'=> count($dataArr) + 1,'name' => $name, 'des' => $des,'price'=>$price, 'num' =>$num);

        array_unshift($dataArr, $data);
        //print_r($dataArr);
        $newContent = json_encode($dataArr, JSON_UNESCAPED_UNICODE);
        file_put_contents("data.json", $newContent);
    }
?>