<?php 

    include 'config.php';

     $name = @$_POST['name'];
     $ID = @$_POST['ID'];
     $TableName = "Book_details";

    $query = "select id from $TableName";
    $num = 0; //id not present
    $pass = mysqli_query($con,$query);

    $ID_list = [];
    
    foreach($pass as $row){
        array_push($ID_list,$row['id']);
    };
    foreach($ID_list as $item){
        if($item == $ID){
            $num = 1; // id present
            break;
        };
    };

    if($num == 1){
        $GetQuery = "select * from $TableName where id = '$ID'";
        $results = mysqli_query($con,$GetQuery);

        $list = [];

        foreach($results as $row){
            
            array_push($list,$row['book1']);
            array_push($list,$row['book2']);
            array_push($list,$row['book3']);
            array_push($list,$row['name']);
            array_push($list,$row['Issue_Date']);
        }

        echo json_encode($list);
    }else{
        echo " alert('Staus not found...!!!') ";
    }

?>