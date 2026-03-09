<?php
session_start();
$currentPage = "conditionals";

if(!isset($_SESSION['current_page'])){
    $_SESSION['current_page'] = $currentPage;
}

if($_SESSION['current_page'] !== $currentPage){
    unset($_SESSION['conditionals']);
    $_SESSION['current_page'] = $currentPage;
}

if(!isset($_SESSION['conditionals'])){
    $_SESSION['conditionals'] = [];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Conditional Statements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="../../24-1416ReyesCSS/24-1416ReyesConditionalpage.css">
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

        <a href="../24-1416ReyesBasicIO/24-1416Reyesbasicpage.php" class="nav-item"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesBasicIOSidebar.png" alt="Basic IO" class="box-img">Basic Input/Output</a>
        <a href="../24-1416ReyesVariable/24-1416Reyesvarspage.php" class="nav-item"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesVarsSidebar.png" alt="Variables & Data Types" class="box-img">Variables & Data Types</a>
        <a href="#" class="nav-item active"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesIfelseSidebar.png" alt="Conditional Statements" class="box-img">Conditional Statements</a>
        <a href="../24-1416ReyesLoops/24-1416Reyesloopspage.php" class="nav-item"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesLoopSidebar.png" alt="Loops" class="box-img">Loops</a>
        <a href="../../24-1416ReyesHTML/24-1416ReyesWelcomepage.html" class="back-btn"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416Reyesbackbutton.png" alt="Back button" class="back-icon">Back</a>
    </div>


   <div class="main-content">

    <h1 class="page-title">Conditional Statements</h1>
    <p class="page-desc">Conditional Statements in Fundamentals of Programming refer to the control structures that allow the program to make decisions based on certain conditions.</p>
    <p class="supporting-desc">• If Statement: This is used to execute a block of code only if a specified condition is true. <br>
    • If-Else Statement: This is used to execute one block of code if a condition is true, and another block if it is false. <br>
    • If-Else if-Else Statement: This is used to check multiple conditions and execute different blocks of code based on which condition is true. <br>
    • Nested If Statements: This is when you have an if statement inside another if statement, allowing for more complex decision-making. <br>
    • Switch Statement: This is used to perform different actions based on different conditions, typically when you have a variable that can take on multiple values. <br> 
</p>

  <!-- SAMPLE 1 -->
<div class="sample-header">
    Sample 1 - <span>Letter Grade Remarks</span>
</div>

<div id="sample1" class="sample-box">

    <!-- LEFT -->
    <div class="sample-left">
        <form id="letterGradeForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Enter the Letter Grade:</label>
            <input type="text" id="letterGradeInput" maxlength="1">

            <br><br>

            <button type="submit" class="add-btn">Check</button>

        </form>
    </div>

    <!-- MIDDLE -->
    <div class="sample-middle">
        <label>Output</label> 
        <div class="output-box" id="letterGradeOutput"></div>
        <button type="button" class="reset-btn" id="resetLetterGrade">Reset</button>
    </div>

    <!-- RIGHT -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example uses a switch statement to determine the remarks based on the letter grade input.
            Each case corresponds to a specific letter grade, and the default case handles invalid inputs.
        </p>
    </div>

</div>


 <!-- SAMPLE 2 -->
<div class="sample-header">
    Sample 2 - <span>Pass or Fail</span>
</div>

<div id="sample2" class="sample-box">

    <div class="sample-left">
        <form id="gradeForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Enter Grade:</label>
            <input type="number" id="gradeInput" min="50" max="100">

            <br><br>

            <button type="submit" class="add-btn">Check</button>

        </form>
    </div>

    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="gradeOutput"></div>
        <button type="button" class="reset-btn" id="resetGrade">Reset</button>
    </div>

    <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example uses an if-else statement to determine if a student passed or failed. User will input a numeric grade in whole number. 
        </p>
    </div>

</div>



<!-- SAMPLE 3 -->
<div class="sample-header">
    Sample 3 - <span>Number Classification</span>
</div>

<div id="sample3" class="sample-box">

    <div class="sample-left">
        <form id="numberForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Enter a Number:</label>
            <input type="number" id="numberInput">

            <br><br>

            <button type="submit" class="add-btn">Check</button>

        </form>
    </div>

    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="numberOutput"></div>
        <button type="button" class="reset-btn" id="resetNumber">Reset</button>
    </div>

    <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example uses if-else-if statements to classify a number as positive, negative, or zero.
        </p>
    </div>

</div>


 <!-- SAMPLE 4 -->
<div class="sample-header">
    Sample 4 - <span>Even or Odd with Nested IF</span>
</div>

<div id="sample4" class="sample-box">

    <div class="sample-left">
        <form id="evenOddForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Enter a Number:</label>
            <input type="number" id="evenOddInput">

            <br><br>

            <button type="submit" class="add-btn">Check</button>

        </form>
    </div>

    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="evenOddOutput"></div>
        <button type="button" class="reset-btn" id="resetEvenOdd">Reset</button>
    </div>

    <div class="sample-right">
        <h4>Description</h4>
        <p>
            <strong>NESTED IF STATEMENT:</strong> This example uses nested if statements to determine if a number is EVEN or ODD,
            with additional validation and classification.<br><br>
            
            <strong>Logic Flow:</strong><br>
            • First IF: Check if input is a valid number<br>
            • Nested IF: Check if number is positive, negative, or zero<br>
            • Double Nested IF: Check if number is even or odd<br>
            • Additional classification for special numbers
        </p>
    </div>

</div>

 <!-- SAMPLE 5 -->
<div class="sample-header">
    Sample 5 - <span>Voting Qualification Checker</span>
</div>

<div id="sample5" class="sample-box">

    <div class="sample-left">
        <form id="ageForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Enter Your Age:</label>
            <input type="number" id="ageInput" min="0">

            <br><br>

            <button type="submit" class="add-btn">Check</button>

        </form>
    </div>

    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="ageOutput"></div>
        <button type="button" class="reset-btn" id="resetAge">Reset</button>
    </div>

    <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example uses if-else-if statements with logical operators 
            (&&) to determine if a person is qualified to vote based on age.
        </p>
    </div>

</div>


</div>
<script src="../../24-1416ReyesJS/24-1416Reyesconditional.js"></script>
    </body>
</html>