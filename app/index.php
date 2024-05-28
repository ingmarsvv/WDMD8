<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-col w-11/12 max-w-2xl sm:mx-3 mx-auto mt-10">
        <div class="container flex flex-col mb-10">
            <h2 class="text-lg font-medium">Personal Information</h2>
            <p>Use a permanent address where you can receive mail.</p>
        </div>
        <form action="index.php" method="POST">
            <div class="flex flex-col">
                <div class="flex flex-col sm:flex-row sm:gap-3 mb-10">
                    <div class="basis-1/2">                     
                        <label for="firstName"><h4>First name</h4></label>                      
                        <input class="border border-black rounded w-full" type="text" name="firstName">                      
                    </div>
                    <div class="basis-1/2">
                        <label for="lastName"><h4>Last name</h4></label>                    
                        <input class="border border-black rounded w-full" type="text" name="lastName">       
                    </div>
                </div>
                <div class="mb-10">
                        <label for="email"><h4>Email address</h4></label>
                        <input class="border border-black rounded w-full sm:max-w-lg" type="text" name="email">     
                </div>
                <div class="mb-10">
                    <label for="country"><h4>Country</h4></label>
                    <div class="sm:flex sm:flex-row sm:gap-3">
                        <div class="sm:basis-1/2">
                            <select class="border border-black rounded w-full" name="country">
                                <option value="Latvia">Latvia</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Germany">Germany</option>
                                <option value="Poland">Poland</option>
                            </select>
                        </div>
                    </div>    
                </div>
                <div class="mb-10">
                        <label for="address"><h4>Street address</h4></label>
                        <input class="border border-black rounded w-full" type="text" name="address">     
                </div>
                <div class="flex flex-col sm:flex-row sm:gap-3 mb-10">
                    <div class="basis-1/3">
                        <label for="city"><h4>City</h4></label>                    
                        <input class="border border-black rounded w-full" type="text" name="city">       
                    </div>
                    <div class="basis-1/3">                     
                        <label for="state"><h4>State / Province</h4></label>                      
                        <input class="border border-black rounded w-full" type="text" name="state">                      
                    </div>
                    <div class="basis-1/3">
                        <label for="zip"><h4>ZIP / Postal code</h4></label>                    
                        <input class="border border-black rounded w-full" type="text" name="zip">       
                    </div>
                </div>
                <div class="mb-10">
                        <input class="border border-black rounded w-full hover:bg-orange-300 cursor-pointer" type="submit" value="Click to submit">     
                </div>   
            </div>         
        </form>    
    </div>
    <?php
        $firstName = !empty($_POST["firstName"]) ? $_POST["firstName"] : NULL;
        $lastName = !empty($_POST["lastName"]) ? $_POST["lastName"] : NULL;
        $email = !empty($_POST["email"]) ? $_POST["email"] : NULL;
        $country = !empty($_POST["country"]) ? $_POST["country"] : NULL;
        $address = !empty($_POST["address"]) ? $_POST["address"] : NULL;
        $city = !empty($_POST["city"]) ? $_POST["city"] : NULL;
        $state = !empty($_POST["state"]) ? $_POST["state"] : NULL;
        $zip = !empty($_POST["state"]) ? $_POST["zip"] : NULL;
    ?>
    <div class="flex flex-col w-11/12 max-w-2xl sm:mx-3 mx-auto mt-10">
        <h2 class="text-lg font-medium">Your data:</h2>
        <div>
           <?php
            if (!empty($firstName) || !empty($lastName)){
                echo "<p> First name: " . $firstName . "</p>";
                echo "<p> Last name: " . $lastName . "</p>";
                echo "<p> Email: ". $email . "</p>";
                echo "<p> Country: " . $country . "</p>";
                echo "<p> Address: " . $address . "</p>";
                echo "<p> City: " . $city . "</p>";
                echo "<p> State: " . $state . "</p>";
                echo "<p> Postal code: " . $zip . "</p>";
            }
            ?> 
        </div>
        
    </div>
</body>
</html>