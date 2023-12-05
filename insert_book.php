<?php

if(isset($_POST['submit']))
{
    $package=$_POST['Packages'];
    $User=$_POST['name'];
    $quantity=$_POST['tQuantity'];
    $number=$_POST['phone'];
    $payment=$_POST['payment'];
    $date=date('d-m-Y', strtotime($_POST['tripDate']));

    $Con=mysqli_connect('localhost','root','','bayone');

    //  $query1=mysqli_query($Con,"INSERT INTO booking(`Name`, `Phone`, `Package`, `Quantity`, `Payment`, `TripDate`) VALUES ('$User','$number','$package','$quantity','$payment','$date')");

    $price=mysqli_query($Con,"SELECT  `Price` FROM `ticketandquantity` WHERE Type='$package'");

   

     if(mysqli_num_rows($price) ==1 )
     {
       while($row=mysqli_fetch_assoc($price))
        {
            $taka= $row['Price'] ;
        }
      
    } 

            //  $query2=mysqli_query($Con,"UPDATE booking set   Total='$quantity' * '$taka' WHERE Phone ='$number' AND Package ='$package'");

            $ticketQuantity=mysqli_query($Con,"SELECT  `Quantity`,`Boked` FROM `ticketandquantity` WHERE Type='$package'");



            if(mysqli_num_rows($ticketQuantity) ==1 )
            {
              while($row=mysqli_fetch_assoc($ticketQuantity))
               {
                   $quant= $row['Quantity'] ;
                   $booked=$row['Boked'];
               }
             
           } 

           
           echo "<script>
           alert('$quant $quantity');
        </script>";

           if($quant>=$quantity && $quant!=0)
           {


                 $ticket_upadate=mysqli_query($Con,"UPDATE `ticketandquantity` SET `Quantity`='$quant'-'$quantity',`Boked`='$booked'+'$quantity' WHERE Type='$package'");

                 $query1=mysqli_query($Con,"INSERT INTO booking(`Name`, `Phone`, `Package`, `Quantity`, `Payment`, `TripDate`) VALUES ('$User','$number','$package','$quantity','$payment','$date')");


                $query2=mysqli_query($Con,"UPDATE booking set   Total='$quantity' * '$taka' WHERE Phone ='$number' AND Package ='$package'");
            echo "<script>
           alert('Booking Successful');
           window.location.href='book.php';
             </script> ";
           }
           else{
            echo "<script>
            alert('Booking is Full');
            window.location.href='book.php';
            </script>
           ";
           }

          
 
    

           
        
        
        
      

    }



  mysqli_close($Con);
    


?>