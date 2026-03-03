<?php

$output1 = "";
if(isset($_POST['reverse'])){
    $output1 = "Reversed: " . strrev($_POST['reverse']);
}

$output2 = "";
if(isset($_POST['name'])){
    $output2 = "Hello, " . $_POST['name'];
}

$output3 = "";
if(isset($_POST['num1']) && isset($_POST['num2'])){
    $output3 = "Sum: " . ($_POST['num1'] + $_POST['num2']);
}

$output4 = "";
if(isset($_POST['weight']) && isset($_POST['height'])){
    if($_POST['height'] != 0){
        $bmi = $_POST['weight'] / ($_POST['height'] * $_POST['height']);
        echo "BMI: " . round($bmi,2);
    }
}

$output5 = "";
if(isset($_POST['mul1']) && isset($_POST['mul2'])){
    echo "Product: " . ($_POST['mul1'] * $_POST['mul2']);
}
?>

<html>
<head>
    <title>Basic Input and Output</title>
 <link rel="stylesheet" href="../24-1416ReyesCSS/24-1416ReyesBasicIOpage.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

</head>
 <body>
   <header class="bar">
            <span class="header-text">Fundamentals of Programming Compilation</span>
            <span class="header-text">Franz Remnant R. Reyes | SBIT-2D</span>
        <div class="fill"></div>
    </header>
   
    <div class="layout">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="nav-title">NAVIGATION</div>

        <a href="#" class="nav-item active"><img src="../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesBasicIOSidebar.png" alt="Basic IO" class="box-img">Basic Input/Output</a>
        <a href="../24-1416ReyesPHP/24-1416Reyesvarspage.php" class="nav-item"><img src="../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesVarsSidebar.png" alt="Variables & Data Types" class="box-img">Variables & Data Types</a>
        <a href="../24-1416ReyesPHP/24-1416Reyesconditionalpage.php" class="nav-item"><img src="../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesIfelseSidebar.png" alt="Conditional Statements" class="box-img">Conditional Statements</a>
        <a href="../24-1416ReyesPHP/24-1416Reyesloopspage.php" class="nav-item"><img src="../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesLoopSidebar.png" alt="Loops" class="box-img">Loops</a>
        <a href="../24-1416ReyesHTML/24-1416ReyesWelcomepage.html" class="back-btn"><img src="../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416Reyesbackbutton.png" alt="Back button" class="back-icon">Back</a>
    </div>


   <div class="main-content">

    <h1 class="page-title">Basic Input/Output</h1>
    <p class="page-desc">Basic Input/Output in Fundamentals of Programming refers to the process of asking the user to input a data or information and the computer will process and display an associated result.</p>
    <p class="supporting-desc">• User Input: This is the data or information that the user will provide or input. It can be in the form of texts, numbers, etc.<br>
    • Output: This is the associated result that the computer will display. It can be in the form of texts, numbers, etc.
    </p>

    <!-- SAMPLE 1 -->
    <div class="sample-header">
    Sample 1 - <span>Reverse Conversion</span>
</div>

<div id="sample1" class="sample-box">

    <div class="sample-left">
        <form method="POST">
            <input type="hidden" name="section" value="sample1">
            Enter Text: <input type="text" name="reverse">
            <button type="submit">Reverse</button>
        </form>

        <p class="output"><?php echo $output1; ?></p>
    </div>

    <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example shows how to reverse a string input by a user. 
        </p>
    </div>

</div>


    <!-- SAMPLE 2 -->
    <div class="sample-header">
        Sample 2 - <span>Name Greeting</span>
    </div>
    <div class="sample-box">
        <form method="POST">
        Enter Name: <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
    <p><?php echo $output2; ?></p>
    </div>

    <!-- SAMPLE 3 -->
    <div class="sample-header">
        Sample 3 - <span>Sum of Two Numbers</span>
    </div>
    
    <div class="sample-box">
        <form method="POST">
        Number 1: <input type="number" name="num1"><br>
        Number 2: <input type="number" name="num2"><br>
        <button type="submit">Add</button>
    </form>
    <p><?php echo $output3; ?></p>
    </div>

    <!-- SAMPLE 4 -->
    <div class="sample-header">
        Sample 4 - <span>BMI Calculator</span>
    </div>
    <div class="sample-box">
        <form method="POST">
    Weight (kg): <input type="number" name="weight" step="0.1">
    Height (m): <input type="number" name="height" step="0.01">
    <button type="submit">Calculate</button>
</form>
    </div>

    <!-- SAMPLE 5 -->
    <div class="sample-header">
        Sample 5 - <span>Product of Two Numbers</span>
    </div>
    <div class="sample-box">
        <form method="POST">
    Number 1: <input type="number" name="mul1">
    Number 2: <input type="number" name="mul2">
    <button type="submit">Multiply</button>
</form>
    </div>
</div>

</div>
    </body>
</html>