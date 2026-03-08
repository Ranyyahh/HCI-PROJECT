<?php
session_start();
$currentPage = "basic_io";

if(!isset($_SESSION['current_page'])){
    $_SESSION['current_page'] = $currentPage;
}

if($_SESSION['current_page'] !== $currentPage){
    unset($_SESSION['basic_io']);
    $_SESSION['current_page'] = $currentPage;
}

if(!isset($_SESSION['basic_io'])){
    $_SESSION['basic_io'] = [];
}
?>

<html>
<head>
    <title>Basic Input and Output</title>
 <link rel="stylesheet" href="../../24-1416ReyesCSS/24-1416ReyesBasicIOpage.css">
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

        <a href="#" class="nav-item active"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesBasicIOSidebar.png" alt="Basic IO" class="box-img">Basic Input/Output</a>
        <a href="../24-1416ReyesVariable/24-1416Reyesvarspage.php" class="nav-item"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesVarsSidebar.png" alt="Variables & Data Types" class="box-img">Variables & Data Types</a>
        <a href="../24-1416ReyesConditional/24-1416Reyesconditionalpage.php" class="nav-item"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesIfelseSidebar.png" alt="Conditional Statements" class="box-img">Conditional Statements</a>
        <a href="../24-1416ReyesLoops/24-1416Reyesloopspage.php" class="nav-item"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesLoopSidebar.png" alt="Loops" class="box-img">Loops</a>
        <a href="../../24-1416ReyesHTML/24-1416ReyesWelcomepage.html" class="back-btn"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416Reyesbackbutton.png" alt="Back button" class="back-icon">Back</a>
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

    <!-- LEFT (INPUT) -->
    <div class="sample-left">
    <form id="reverseForm">

        <label class="section-label">Input</label>
        <br><br>

        <label>Enter Text:</label>
        <input type="text" id="reverseInput">

        <br><br>

        <button type="submit" class="add-btn">Reverse</button>

    </form>
</div>

<!-- MIDDLE (OUTPUT) -->
<div class="sample-middle">
    <label>Output</label>
    <div class="output-box" id="reverseOutput"></div>
    <button type="button" class="reset-btn" id="resetReverse">Reset</button>
</div>

    <!-- RIGHT (DESCRIPTION) -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>This example shows how to reverse a string input by a user.</p>
    </div>

</div>


   <!-- SAMPLE 2 -->
<div class="sample-header">
    Sample 2 - <span>Name Greeting</span>
</div>

<div id="sample2" class="sample-box">

    <!-- LEFT (INPUT) -->
    <div class="sample-left">
        <form id="greetForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Enter Name:</label>
            <input type="text" id="nameInput">

            <br><br>

            <button type="submit" class="add-btn">Submit</button>

        </form>
    </div>

    <!-- MIDDLE (OUTPUT) -->
   <div class="sample-middle">
    <label>Output</label>
    <div class="output-box" id="greetOutput"></div>
    <button type="button" class="reset-btn" id="resetGreet">Reset</button>
</div>
  <!-- RIGHT (DESCRIPTION) -->
        <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example shows the process of greeting the user by their name. 
        </p>
    </div>

</div>



 <!-- SAMPLE 3 -->
<div class="sample-header">
    Sample 3 - <span>Sum of Two Numbers</span>
</div>

<div id="sample3" class="sample-box">

    <!-- LEFT (INPUT) -->
    <div class="sample-left">
        <form id="sumForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Number 1:</label>
            <input type="number" id="num1Input">

            <br>

            <label>Number 2:</label>
            <input type="number" id="num2Input">

            <br><br>

            <button type="submit" class="add-btn">Add</button>

        </form>
    </div>

  <div class="sample-middle">
    <label>Output</label>
    <div class="output-box" id="sumOutput"></div>
    <button type="button" class="reset-btn" id="resetSum">Reset</button>
</div>

    <!-- RIGHT (DESCRIPTION) -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example shows the process of adding two numbers input by the user.
            The system will compute and display their sum.
        </p>
    </div>

</div>


   <!-- SAMPLE 4 -->
<div class="sample-header">
    Sample 4 - <span>BMI Calculator</span>
</div>

<div id="sample4" class="sample-box">

    <!-- LEFT (INPUT) -->
    <div class="sample-left">
        <form id="bmiForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Weight (kg):</label>
            <input type="number" id="weightInput" step="0.01" min="0">

            <br>

            <label>Height (cm):</label>
            <input type="number" id="heightInput"  step="0.01" min="0">

            <br><br>

            <button type="submit" class="add-btn">Calculate</button>

        </form>
    </div>

    <!-- MIDDLE (OUTPUT) -->
    <div class="sample-middle">
    <label>Output</label>
    <div class="output-box" id="bmiOutput"></div>
    <button type="button" class="reset-btn" id="resetBmi">Reset</button>
</div>

    <!-- RIGHT (DESCRIPTION) -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example shows the process of calculating the Body Mass Index (BMI) 
            based on the height and weight input by the user.
            The system will compute and display the BMI result and category.
        </p>
    </div>

</div>

 <!-- SAMPLE 5 -->
<div class="sample-header">
    Sample 5 - <span>Product of Two Numbers</span>
</div>

<div id="sample5" class="sample-box">

    <!-- LEFT (INPUT) -->
    <div class="sample-left">
        <form id="multiplyForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Number 1:</label>
            <input type="number" id="mul1Input">

            <br>

            <label>Number 2:</label>
            <input type="number" id="mul2Input">

            <br><br>

            <button type="submit" class="add-btn">Multiply</button>

        </form>
    </div>

    <!-- MIDDLE (OUTPUT) -->
    <div class="sample-middle">
    <label>Output</label>
    <div class="output-box" id="multiplyOutput"></div>
    <button type="button" class="reset-btn" id="resetMultiply">Reset</button>
</div>

    <!-- RIGHT (DESCRIPTION) -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example shows the process of multiplying two numbers 
            input by the user. The system will compute and display 
            their product.
        </p>
    </div>

</div>


</div>
<script src="../../24-1416ReyesJS/24-1416Reyesbasicio.js"></script>
    </body>
</html>