<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
      <title>Document</title>
      <style>
         * {
         margin: 0;
         padding: 0;
         }
         .banner_img {
         width: 100%;
         height: 25vh;
         background: url('haji-banner.jpg');
         background-repeat: no-repeat;
         background-size: cover;
         }
         .image {
         display: flex;
         justify-content: center;
         height: 40vh;
         width: 100%;
         align-items: center;
         }
         .dname{
         font-weight: 700;
         font-size: 1.5rem;
         }
      </style>
   </head>
   <body>

   <?php 
            if(isset($_GET['searchbar']) && isset($_GET['description'])){
                $title=$_GET['searchbar'];
                $discription=$_GET['description'];
                
            }

            ?>

      <div class="container">
         <section class="banner">
            <div class="image">
               <div class="banner_img">
               </div>
            </div>
            <form  method="GET" action="index.php">
               <div class="searchbar">
                  <label class="dname">Enter The Person Number:-</label>
                  <input type="text" name="searchbar" class="searchbar form-control " >
               </div>
               <div class="">
                  <label class="dname"  >Description:-</label>
                  <textarea  name="description" id="description"   class="form-control">

<?php 
if(isset($_GET['searchbar'])){
    
    $pakwan=$_GET['searchbar'] %2==0 ? 'even':'odd';
    
    $person=$_GET['searchbar'];



     

    
    $oddnamak=0.5;
    $oddrice=0.5;
    $oddghee=0.6;
    // echo $person*10;
    $price=$person*100;


    
    switch ($pakwan) {
        case 'even':
            $evennamak=1;
            $evenrice=1;
            $evenghee=0.3;
            
            echo "<h1>Asif Thela Wala</h1>";
            echo "<p style='font-weight:1000;'>For $person persons the price of Biryani is about $price and our biryani contain the following quantity.</p> <br>";
            echo "<ul>
            <li>Namak: " .$evennamak*$person. "Kg</li>
            <li>Rice: " .$evenrice*$person. "Kg</li>
            <li>Oil: " .$evenghee*$person. "liter</li>    
            <li>Oil: " .$price." PKR</li>    
            </ul>";
            break;
        case 'odd':


            $oddnamak=0.5;
            $oddrice=0.5;
            $oddghee=0.6;
            
            echo "<h1>Asif Thela Wala</h1>";
            echo "<p style='font-weight:1000;'>For $person persons the price of Biryani is about $price and our biryani contain the following quantity.</p> <br>";
            echo "<ul>
            <li>Namak: " .$oddnamak*$person. "Kg</li>
            <li>Rice: " .$oddrice*$person. "Kg</li>
            <li>Oil: " .$oddghee*$person. "liter</li>    
            <li>Price: " .$price." PKR</li>    
            </ul>";


            
            break;  
        
        default:
            echo "Insaan Ban!";
            break;
    }
    

}


?>
                  </textarea>
               </div>
               <div class="btn">
                  <button class="btn btn-primary my-4" type="submit">Search</button>
               </div>
            </form>
         </section>
      </div>
      <script>
       CKEDITOR.replace('description');

   </script>   
   </body>
</html>











-------------------------------------------------------------------- next---------------------
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="table" placeholder="table"> <br>
        <input type="text" name="startingpoint" placeholder="startingpoint" > <br>
        <input type="text" name="endingpoint" placeholder="endingpoint" > <br> 
        <input type="submit" value="submit">
    </form> 
    <?php

use function PHPSTORM_META\type;

    if(isset($_GET['table']) && isset($_GET['startingpoint']) && isset($_GET['endingpoint'])){
         $table=($_GET['table']);
         $startingpoint=($_GET['startingpoint']);
         $endingpoint=($_GET['endingpoint']);
         $ProgramCondition=$startingpoint < $endingpoint ? 'sedha':'ulta';
         switch ($ProgramCondition) {
            case 'sedha':

                

for ($startingpoint;  $startingpoint<= $endingpoint; $startingpoint++) { 
    echo "$table x $startingpoint = " . $startingpoint*$table."<br>";
}


                break;
            case 'ulta':

                for ($startingpoint;  $endingpoint<= $startingpoint; $startingpoint--) { 
                    echo "$table x $startingpoint = " . $startingpoint*$table."<br>";
                }




                break;
            
            default:
                echo "Insaan Ban!";
                break;
         }

    }
    ?>
</body>
</html>
--------------------------------------------------------------------------------------------------------------------------------


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Table Logic</title>
   </head>
   <body>
      <form action="" method="get">
         <input type="text" name="IT" placeholder="Initial Table">
         <input type="text" name="FT" placeholder="Final Table">
         <input type="text" name="IP" placeholder="Initial Point">
         <input type="text" name="FP" placeholder="Final Point">
         <input type="submit" value="submit">
      </form>
      <?php 
         if(  isset($_GET['IT'])  && isset($_GET['FT'])   && isset($_GET['IP'])   && isset($_GET['FP'])){
             $IT=$_GET['IT'];
             $FT=$_GET['FT'];
             

             //  when innitial table is less than final table
         
         if($IT<$FT){
             for ($IT; $IT<=$FT; $IT++){
                 $IP=$_GET['IP'];
                 $FP=$_GET['FP'];
                 if($IP<$FP){
                     for ($IP; $IP<=$FP; $IP++){
                     echo $IT.'x'.$IP.'='.$IP*$IT;
                     echo "<br>";
         
                 }
         
             
             
             
                 echo "<br>";
             }elseif($IP>$FP){
                for ($IP; $IP>=$FP; $IP--){
                    echo $IT.'x'.$IP.'='.$IP*$IT;
                    echo "<br>";
             }
             
         
         
         
         }

        }

//  when innitial table is grreater than final table        
    }
         elseif  ($IT>$FT){
            // echo "hello";
        
            for ($IT; $IT>=$FT; $IT--){
                $IP=$_GET['IP'];
                $FP=$_GET['FP'];
                if($IP<$FP){
                    for ($IP; $IP<=$FP; $IP++){
                    echo $IT.'x'.$IP.'='.$IP*$IT;
                    echo "<br>";
        
                }
        
            
            
            
                echo "<br>";
                // when initial point is greater than final point
            }elseif ($IP>$FP){
                for ($IP; $IP>=$FP; $IP--){
                    echo $IT.'x'.$IP.'='.$IP*$IT;
                    echo "<br>";
            }
        }
             
         }  
         }
        }  
         ?>
   </body>
</html>
--------------------------------------------
22-10-2022
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Table Logic</title>
      <style>
         th, td {
         border: 1px solid black;
         }
         table{
            background-color: red;
            color: white;
         }
         span{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
         }
      </style>
   </head>
   <body>
      <form action="" method="get">
         <input type="text" name="IT" placeholder="Initial Table" class="initialtable">
         <input type="text" name="FT" placeholder="Final Table" class="finaltable">
         <input type="text" name="IP" placeholder="Initial Point" class="initialpoint">
         <input type="text" name="FP" placeholder="Final Point" class="finalpoint">
         <input type="submit" value="submit" id="btn">
      </form>

      <span>
      <?php 
         if(  isset($_GET['IT'])  && isset($_GET['FT'])   && isset($_GET['IP'])   && isset($_GET['FP'])){
             $IT=$_GET['IT'];
             $FT=$_GET['FT'];
             
         
             //  when innitial table is less than final table
         
         if($IT<=$FT){
             for ($IT; $IT<=$FT; $IT++){
                 $IP=$_GET['IP'];
                 $FP=$_GET['FP'];
                 if($IP<=$FP){
                     echo '<table>';
                     echo '<h3>'.'Table OF '.$IT.'</h3>';   
                     for ($IP; $IP<=$FP; $IP++){
         
                     echo '<tr>';
                     echo '<td>'.$IT.'</td>'.'<td>'.'x'.'</td>'.'<td>'.$IP.'</td>'.'<td>'.'='.'</td>'.'<td>'.$IP*$IT.'</td>';
                     echo '</tr>';
                     
                    }
                    echo "<br>";
         
             
             
             
                 
             }elseif($IP>=$FP){
                echo '<table>';
                echo '<h3>'.'Table OF '.$IT.'</h3>';   
                for ($IP; $IP>=$FP; $IP--){
                    
                    echo '<tr>';
                    echo '<td>'.$IT.'</td>'.'<td>'.'x'.'</td>'.'<td>'.$IP.'</td>'.'<td>'.'='.'</td>'.'<td>'.$IP*$IT.'</td>';
                    echo '</tr>';
                    
                    
             }
             echo '</table>';
             
             echo "<br>";
         
         
         }
         
         }
         
         //  when innitial table is grreater than final table        
         }
         elseif  ($IT>=$FT){
            // echo "hello";
            
         
            for ($IT; $IT>=$FT; $IT--){
                
                $IP=$_GET['IP'];
                $FP=$_GET['FP'];
                if($IP<=$FP){
                    echo '<table>';
                    echo '<h3>'.'Table OF '.$IT.'</h3>';   
                    for ($IP; $IP<=$FP; $IP++){
                    echo '<tr>';
                    echo '<td>'.$IT.'</td>'.'<td>'.'x'.'</td>'.'<td>'.$IP.'</td>'.'<td>'.'='.'</td>'.'<td>'.$IP*$IT.'</td>';
                    echo '</tr>';
                    
         
                }
         
                echo '</table>';
            
            
            
                echo "<br>";
                // when initial point is greater than final point
            }elseif ($IP>=$FP){
                echo '<table>';
                echo '<h3>'.'Table OF '.$IT.'</h3>';   
                for ($IP; $IP>=$FP; $IP--){
                    echo '<tr>';
                    echo '<td>'.$IT.'</td>'.'<td>'.'x'.'</td>'.'<td>'.$IP.'</td>'.'<td>'.'='.'</td>'.'<td>'.$IP*$IT.'</td>';
                    echo '</tr>';
                    
            }
            echo '</table>';
            echo "<br>";
         }
             
         }  
         }
         }  
         ?>
         </span>
      <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
      <script>
         $(document).ready(function(){
         $('#btn').click(function () {
         $initialtable=$('.initialtable').val();
         $finaltable=$('.finaltable').val();
         $initialpoint=$('.initialpoint').val();
         $finalpoint=$('.finalpoint').val();
         alert("Your Table start from "+$initialtable);
         alert("Your Table end at "+$finaltable);
         alert('The Table starting point is '+$initialpoint);
         alert('The Table ending point is '+$finalpoint);

           })

         
         })
         
      </script>
   </body>
</html>


--------------------------------------------------------------------------
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
        echo '<h1>Nested For Each in 2d Arrays</h1>';
        $list=[
            "biryani"=>array("sadibiryani"=>"allowali biryani","chickenbiryani"=>"chiken and aloo biryani","spacialbiryani"=>"beef and aloo biryani"),
            "karhai"=>array("sadikarhai"=>"simple karhai","chickenkarhai"=>"medium karhai","specialchiken"=>"beef and aloo karhai"),
            "daal"=>array("sadidaal"=>"4 daals","mediumdaal"=>"kali daal","speciladaal"=>"peli daal")
        ];
        foreach($list as $key=>$data){
            foreach($data as $key=>$detail){
                echo $key.'  :-'.$detail;
                echo "<br>";
            }
            echo "<br>";
        
        }
        
        ?>
    -----------------------------------------------------------------------------------------------------------------------
   
   
   
   
   <!DOCTYPE html>
<html lang="en">

<head>
    <title>GFG- Store Data</title>
</head>

<body>
    <center>
        <h1>Storing Form data in Database</h1>
        <form  method="post">

            <div>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </div>


            <div>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName">
            </div>


            <div>
                <label for="emailAddress">Email Address:</label>
                <input type="email" name="email" id="emailAddress">
            </div>

            <input type="submit" value="Submit">
        </form>
    </center>
</body>

</html>






<?php
$conn = mysqli_connect("localhost", "root", "", "abc");
if(isset($_POST['first_name'])  || isset($_POST['last_name'])  || isset($_POST['email']) ){


    $first_name =  $_POST['first_name'];
    $last_name = $_POST['last_name'];
     $email = $_POST['email'];




    $sql ="INSERT INTO datainsert( `first_name`, `last_name`, `email`) VALUES ('$first_name','$last_name','$email')";
$datainsertquery=mysqli_query($conn, $sql);
if ($datainsertquery) {
    echo "<h3>data add hogya ha</h3>";

    echo ("$first_name.'<br>'.$last_name.<br>.$email");
} else {
    echo "data is not add!";
}

}

// Close connection
mysqli_close($conn);
?>
</body>
</html>













-----------------------------------------------------------------------------------------------
27/10/2022


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>GFG- Store Data</title>
 </head>

 <body>
     <center>
         <h1>Updating Form data in Database</h1>
         <form method="post">

             <div>
                 <label for="firstName">First Name:</label>
                 <input type="text" name="first_name" id="firstName">
             </div>


             <div>
                 <label for="lastName">Last Name:</label>
                 <input type="text" name="last_name" id="lastName">
             </div>


             <div>
                 <label for="emailAddress">Email Address:</label>
                 <input type="email" name="email" id="emailAddress">
             </div>

             <input type="submit" value="Submit">
         </form>
     </center>
 </body>

 </html>






 <?php
    $conn = mysqli_connect("localhost", "root", "", "abc");
    if (isset($_POST['first_name'])  || isset($_POST['last_name'])  || isset($_POST['email'])) {


        $first_name =  $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];


        $sql = "UPDATE `datainsert` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email' where id=1";
        $datainsertquery = mysqli_query($conn, $sql);
        if ($datainsertquery) {
            echo "<h3>data add update ha</h3>";

            echo ("$first_name<br>$last_name<br>$email");
        } else {
            echo "data is not update!";
        }
    }

    // Close connection
    mysqli_close($conn);
    ?>
 </body>

 </html>



---------------------------credentials-----------------------------talalkhuram703@gmail.com	
dellcoei7
https://www.facebook.com/profile.php?id=100087649162650

ejazb160@gmail.com
dellcorei7
https://www.facebook.com/profile.php?id=100088129775837
Youtube channel :-comfirt plastic
https://twitter.com/ejazBut43521666


gamilaccount:-
j657549@gmail.com
facebook passowrd:-)+6Z_f=F2%p4Lr7
https://www.facebook.com/profile.php?id=100087638215526

linkdink password:-
dellcorei7
jafer
dob=9-2-2003
instegram
username:-jaferejaz
password:-
$$PK-9/QbhY+Aqd







