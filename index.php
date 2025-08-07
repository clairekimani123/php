//funtions, variables, operators, data types, arrays, loops, conditionals, and more.


/*PHP TUTORIAL-it simple AND FLEXIBLE TO USE*/
//This is a comment
    /*for a multline  we use this*/
    //the good thing about php   it can contain html, js, react code

 //FLOAT = it is a floating number that contain decimald number, they are aslo into percentage.
    //if you want to have an output of  the price in dollar or shs. you need to use backeslide example 
    //BOOLEAN = it's either true or false
    //it's out put is not either true or false naah,, if sthg s true it will give you an output of 1 and if it's false  it will a zero like nothing in thr our put just the words Online status: 
    //you can mix variable or add them.
/*
    PHP is a server-side scripting language designed primarily for web development but also used as a general-purpose programming language.
    It is a powerful tool for making dynamic and interactive web pages.
    PHP code is usually processed on a web server by a PHP interpreter, which generates HTML that is sent to the client's browser.
    PHP can be embedded into HTML, making it easy to add functionality to web pages.
*/
/*
//this is an introduction to php now we going to do variables
//variables =  it is a reusable container that holds data, string, integer, float, boolean
//to decalre a variable you start with a dollar sign then a unique name a niques identifier
*/
//  to display our output we use "echo" and print is_int(): Checks if a variable is an integer.
//is_int(): Checks if a variable is an integer.
//is_string(): Checks if a variable is a string.
//is_array(): Checks if a variable is an array.
//--is_object(): Checks if a variable is an object.
//is_bool(): Checks if a variable is a boolean.
//(): Checks if a variable is NULL.

3. Date and Time Functions
//date(): Returns the current date or time.
//strtotime(): Converts a string into a Unix timestamp.
//time(): Returns the current Unix timestamp.

2. Array Functions
//array_push(): Adds elements to the end of an array.
//array_pop(): Removes the last element of an array.
//array_merge(): Merges two or more arrays.


1. String Functions
//strlen(): Returns the length of a string.
//strtoupper(): Converts a string to uppercase.
//strtolower(): Converts a string to lowercase.
//substr(): Returns a part of a string.

//it is a loosely language meaning you don't need to declarethe dat type of  a variable
//displaying a whole string directly is called literal string an o display a sentence like hello clara we use curry blaces with thr variable name inside.
<br><br>

<?php
    echo "🥰🥺I miss my mfamily🥺🥰 <br>";
    echo"Been a developer is hard especially if it is your firt time to do  or to  start working";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
?>
<br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>💫💫This shows that even in php you can still use html😂💫</p>
    <button>🍕🍕Order pizza🍕🍕</button>
    <br><br>
</body>
</html>

//variable
<br><br>
<?php
    $name = "Clara";
    $food = "🍕Pizza🍕";
    $email = "clara@gmail.com";
    $age = 21;
    $quantity = 34;

  

    $gpa = 2.5;
    $price = 4.90;
    $tax = 5.4;

    $isAvailable = true; 
    $online = false;




    print "Hello {$name} <br>";

   print "I want {$food} for my me and my friends🍕<br>";
    
    
   print "sent my email {$email} to the office or my job-hunting <br>";


   print "Hello {$name}<br>";


   print "am {$age} years old";

   print " you would want to buy or {$quantity} next year";

   print "Online status: {$online} <br>";

   print "your gpa is: {$gpa} <br>";

    print "the price of the pizza is: \${$price} <br>";

    print "the tax is: \${$tax} <br>";

    $total = null;

    echo "you have odrered a {$quantity} x {$food}s<br>";

    $total = $quantity * $price;

    echo "Your total is: \${$total}";

   ?>
   <br><br>
   
                //ARITHEMETIC OPERATORS, INCREMENT, DECREMENT IS ALL THE SAME AS NORMAL
                //OPERATOR PRECEDENCES,,,, (THIS IS LIKE BODMAS)
                    // (), **, *, /, %, +, -,

                    //GET, POST = special variable used to collect data from an HTML  form
                    //data is sent to the file in the actio attribute of <form
                    // <form action="some_files.php> methods="get>

                    //GET = Data is appended to url
                    //    NOT SECURE
                    //    Character limit
                    //    Bookmark is possible w/ values
                    //    GET requests can be cached
                    //    Better for sch pageData is visible in the URL


                    //POST = Data is sent in the request body, in thr HTTP request
                    //    More secure
                    //    No character/data limit
                    //    Not bookmarkable
                    //    GEt requests are not cached
                    //    Better for submitting credentials

                    //we be doing forms we going back to html, thing

<!-- <br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label>username</label><br>
        <input type="text" name="username" id="username"><br><br>
        <label>Password</label><br><br>
        <input type="password" name="password"><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
<?php

    echo "{$_GET["username"]} <br>";
    echo "{$_GET[password]} <br>";

?> -->

<php_
$person = food;

print {$person};
?>