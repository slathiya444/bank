
<?php
                include('conn.php');
                $acc_no=$_POST["acc_no"];  


                $sql =  "SELECT * FROM `transaction` where `acc_no` = '".$acc_no."'";
                $result = mysqli_query($conn, $sql);
                //$row = mysqli_fetch_assoc($result);

                // while($row = mysqli_fetch_assoc($result)){
                    
                // }

                // $date = $row[2];
                //WHERE `acc_no` = '".$acc_no."'"
                // $trans_type = $row[7];
                // $debit = $row[5];
                // $credit = $row[6];
                // $balance = $row[3];

                // echo "<table border = '1'>";
                // //echo "<tr> <td>name </td> <td>category</td> </tr>";
                // while($row = mysqli_fetch_assoc($result)){
                //     echo "<tr> <td> {$row['record_no']}</td> <td>category</td> </tr>";
                // }

               
?>

<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

       
    <table align="center">
                        <th>Date</th>
                        <th>TT</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                        <!-- <th>Record no</th>

                        <th>Account no</th>
                        
                        
                        <th>c_ssn</th> -->
                        
                        
                        
                        
                        <?php
                        while($row = mysqli_fetch_assoc($result)){
                            
                            echo "<tr>";

                            echo "<td>".$row['datee']."</td>";
                            echo "<td>".$row['tt']."</td>";
                            echo "<td>".$row['debit']."</td>";
                            echo "<td>".$row['credit']."</td>";
                             echo "<td>".$row['balance']."</td>";

                            // echo "<td>".$row['record_no']."</td>";
                            // echo "<td>".$row['acc_no']."</td>";
                            
                           
                            // echo "<td>".$row['c_ssn']."</td>";
                            
                            
                            echo "</tr>";
                        } ?>
    </table>
</body>
</html>
 





            
