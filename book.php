<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php

session_start();

if( $_SESSION['logIn']!="yes")
{
  echo "
<script>
 alert('You are not Login yet');
   window.location.href='wabPage.php';
</script>
";
}

?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 bg-white  m-auto shadow font-monospace border boroder-info">

                <p class="text-warning text-center fw-bold my-3 fs-5">Ticket Booking</p>

                <form action="insert_book.php" method="POST">
             
                <div class="mb-3">   
                    <label for="cars">Choose a Class:</label>
                    <select name="Packages" id="package">

                    <option value="Economy">Economy</option>
                    <option value="Business">Business</option>
                    <option value="OpenDeck">Open Deck</option>
                    <option value="BunkerBed">Bunker Bed</option>
                    <option value="VIPPresidential">VIP Presidential</option>
                    <option value="Royal">Royal</option>
                    <option value="VVIPCabin">VVIP Cabin</option>
                    <option value="FamilyBunkerCabin">Family Bunker Cabin</option>
                    <option value="VIPPresidentialPlus">VIP Presidential Plus</option>
                    <option value="TheEmperorsCabin">The Emperor's Cabin</option>
                  </select>

                </div>

                     

                    <div class="mb-3">
                     <label for="">CustomerName</label>   
                     <input type="text" name="name" placeholder="Enter User Name" class="form-control">
                    </div>

                    <div class="mb-3">
                     <label for="">UserNumber</label>   
                      <input type="number" name="phone" placeholder="Enter User Number" class="form-control">
                    </div>

                    <div class="mb-3">
                       <label for="">Ticket Quantity</label>   
                       <input type="number" name="tQuantity" placeholder="Enter User Number" class="form-control">
                    </div>

                    <div class="mb-3">
                      <label for="">Payment Method</label>   
                      <input type="text" name="payment" placeholder="Enter Payment Method" class="form-control">
                    </div>

                    <div class="mb-3">
                     <label for="">Trip Date</label>   
                       <input type="date" name="tripDate"
                       value="2022-03-02">
                       
                    </div>


                    <div class="mb-3">
                         <button name="submit" class="w-100 bg-primary fs-4 text-white">Book</button>
                    </div>

                 

               </form>

            </div>
        </div>
    </div>
</body>
</html>