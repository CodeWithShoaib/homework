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
