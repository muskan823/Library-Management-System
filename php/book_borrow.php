<?php 

    include 'config.php';

    $name = @$_POST['name'];
    $ID = @$_POST['ID'];
    $issuedate = @$_POST['issuedate'];
    $book_1 = @$_POST['book_1'];
    $book_2 = @$_POST['book_2'];
    $book_3 = @$_POST['book_3'];
    $returndate = @$_POST['returndate'];
    $TableName = "Book_details";
    
    $returndate = "none";
   

    $query = "select id from $TableName";
    $num = 0; //non dupicate
    $pass = mysqli_query($con,$query);

    $ID_list = [];
    
    foreach($pass as $row){
        array_push($ID_list,$row['id']);
    };
    foreach($ID_list as $item){
        if($item == $ID){
            $num = 1; //duplicate
            break;
        };
    };
        

    if($num == 0){
        $InsertQuery = "insert into $TableName values('$ID','$name','$issuedate','$book_1','$book_2','$book_3','$returndate')";
        $pass = mysqli_query($con,$InsertQuery);
        if($pass){
            echo "'inserted successfully'";
        }else{
                echo mysqli_error($con);
            //  echo "alert('inserted unsuccessfully');" ;  
        }
    }else{
        $space_1;
        $space_2;
        $space_3;
        $FetchingQuery_1 = "select * from $TableName where id='$ID'";
        $pass = mysqli_query($con,$FetchingQuery_1);
        foreach($pass as $row){
            $space_1 = $row['book1'];
            $space_2 = $row['book2'];
            $space_3 = $row['book3'];
        }
        
        
        if($space_1 == "none" or $space_2 == "none" or $space_3 == "none"){

            $FetchingQuery_2 = "select * from $TableName where id = '$ID'";
            $pass = mysqli_query($con,$FetchingQuery_2);
            foreach($pass as $row){
                if($space_1 == "none" & $book_1 != "none"){
                    $UpdateQuery= "update Book_details set book1='$book_1' where id='$ID'";
                    $UpdateQuery2= "update Book_details set Issue_Date='$issuedate' where id='$ID'";
                    $UpdateQuery3= "update Book_details set Return_Date='$returndate' where id='$ID'";
                    $pass_1 = mysqli_query($con,$UpdateQuery);
                    $pass_2 = mysqli_query($con,$UpdateQuery2);
                    $pass_3 = mysqli_query($con,$UpdateQuery3);
                    if($pass_1){
                        if($pass_2)
                        echo "'updated successfully'" ;
                    }else{
                        echo "'updated error...!!'" ;
                    }

                };
                if($space_2 == "none" & $book_2 != "none"){
                    $UpdateQuery= "update Book_details set book2 ='$book_2' where id='$ID'";
                    $UpdateQuery2= "update Book_details set Issue_Date='$issuedate' where id='$ID'";
                    $UpdateQuery3= "update Book_details set Return_Date='$returndate' where id='$ID'";
                    $pass_1 = mysqli_query($con,$UpdateQuery) or trigger_error(mysqli_error($con), E_USER_ERROR);
                    $pass_2 = mysqli_query($con,$UpdateQuery2) or trigger_error(mysqli_error($con), E_USER_ERROR);
                    $pass_3 = mysqli_query($con,$UpdateQuery3) or trigger_error(mysqli_error($con), E_USER_ERROR);
                    if($pass_1){
                        if($pass_2)
                        echo "'updated successfully'";
                    }else{
                        echo "'updated error...!!'" ;
                    }
                };
                if($row['book3'] == "none" & $book_3 != "none"){
                    $UpdateQuery= "update Book_details set book3 = '$book_3' where id='$ID'";
                    $UpdateQuery2= "update Book_details set Issue_Date='$issuedate' where id='$ID'";
                    $UpdateQuery3= "update Book_details set Return_Date='$returndate' where id='$ID'";
                    $pass_1 = mysqli_query($con,$UpdateQuery);
                    $pass_2 = mysqli_query($con,$UpdateQuery2);
                    $pass_3 = mysqli_query($con,$UpdateQuery3);
                    if($pass_1){
                        if($pass_2)
                        echo "'updated successfully'";
                    }else{
                        echo "'updated error...!!'" ;
                    }
                };
            };
        }else{
            echo " 'borrow crieteria is overed...!!'";
        };
       
    };

?>