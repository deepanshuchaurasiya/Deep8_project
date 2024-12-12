<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <option value=""><--Select country</option>
        <?php
            $country = ["India","pakistan",'china','america'];
            for($i=0;$i<=4;$i++){
                echo "<option value=''>$country[$i]</option>";
            }
            foreach($country as $value){
                
            
        ?>
        <!-- <option value=''><?php //echo $value; ?></option> -->
        <option value=""><?=$value?></option>
        <?php
            }
        ?>
         <!-- <option value="">India</option>
         <option value="">pakistan</option>
         <option value="">Izrael</option>
         <option value="">Ukrane</option>
        <option value="">china</option>
        <option value="">America</option>  -->
       
    </select>
    
</body>
</html>