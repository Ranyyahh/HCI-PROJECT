<?php
session_start();
$currentPage = "loops";

if(!isset($_SESSION['current_page'])){
    $_SESSION['current_page'] = $currentPage;
}

if($_SESSION['current_page'] !== $currentPage){
    unset($_SESSION['loops']);
    $_SESSION['current_page'] = $currentPage;
}

if(!isset($_SESSION['loops'])){
    $_SESSION['loops'] = [];
}
?>

<html>
<head>
    <title>Loops</title>
 <link rel="stylesheet" href="../../24-1416ReyesCSS/24-1416ReyesLoopspage.css">
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
        <a href="../24-1416ReyesConditional/24-1416Reyesconditionalpage.php" class="nav-item"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesIfelseSidebar.png" alt="Conditional Statements" class="box-img">Conditional Statements</a>
        <a href="#" class="nav-item active"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesLoopSidebar.png" alt="Loops" class="box-img">Loops</a>
        <a href="../../24-1416ReyesHTML/24-1416ReyesWelcomepage.html" class="back-btn"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416Reyesbackbutton.png" alt="Back button" class="back-icon">Back</a>
    </div>


   <div class="main-content">

    <h1 class="page-title">Loops</h1>
    <p class="page-desc">Loops in Fundamentals of Programming refer to the control structures that allow the program to repeat a block of code multiple times.</p>
    <p class="supporting-desc">• For Loop: This is used to execute a block of code a specific number of times. <br>
    • While Loop: This is used to execute a block of code as long as a specified condition is true. <br>
    • Do-While Loop: This is used to execute a block of code at least once, and then continue executing as long as a specified condition is true.
    </p>

  <!-- SAMPLE 1 -->
<div class="sample-header">
    Sample 1 - <span>For Loop: Print 1 to ???</span>
</div>

<div id="sample1" class="sample-box">

    <!-- LEFT -->
    <div class="sample-left">
        <form id="forLoopForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Generate numbers from 1 to:</label>
            <input type="number" id="forLoopInput" min="1">

            <br><br>

            <button type="submit" class="add-btn">Generate</button>

        </form>
    </div>

    <!-- MIDDLE -->
    <div class="sample-middle">
        <label>Output</label> 
        <div class="output-box" id="forLoopOutput"></div>
        <button type="button" class="reset-btn" id="resetForLoop">Reset</button>
    </div>

    <!-- RIGHT -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example uses a for loop to print numbers
            starting from 1 up to the number entered by the user.
        </p>
    </div>

</div>


<!-- SAMPLE 2 -->
<div class="sample-header">
    Sample 2 - <span>For Loop: Even Numbers</span>
</div>

<div id="sample2" class="sample-box">

    <!-- LEFT -->
    <div class="sample-left">
        <form id="evenForForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Enter maximum number:</label>
            <input type="number" id="evenForInput" min="2">

            <br><br>

            <button type="submit" class="add-btn">Generate</button>

        </form>
    </div>

    <!-- MIDDLE -->
    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="evenForOutput"></div>
        <button type="button" class="reset-btn" id="resetEvenFor">Reset</button>
    </div>

    <!-- RIGHT -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>
            Uses a for loop to print all even numbers
            from 2 up to the entered maximum value.
        </p>
    </div>

</div>


<!-- SAMPLE 3 -->
<div class="sample-header">
    Sample 3 - <span>For Loop: Factorial</span>
</div>

<div id="sample3" class="sample-box">

    <div class="sample-left">
        <form id="factorialForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Enter a number:</label>
            <input type="number" id="factorialInput" min="1">

            <br><br>

            <button type="submit" class="add-btn">Compute</button>

        </form>
    </div>

    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="factorialOutput"></div>
        <button type="button" class="reset-btn" id="resetFactorial">Reset</button>
    </div>

    <div class="sample-right">
        <h4>Description</h4>
        <p>
            Uses a for loop to calculate the factorial
            of the entered number.
        </p>
    </div>

</div>

  <!-- SAMPLE 4 -->
<div class="sample-header">
    Sample 4 - <span>While Loop: Reverse Number</span>
</div>

<div id="sample4" class="sample-box">

    <div class="sample-left">
        <form id="reverseWhileForm">

            <label class="section-label">Input</label>
            <br><br>

            <label>Enter a number:</label>
            <input type="number" id="reverseWhileInput" min="1" max="999999999">

            <br><br>

            <button type="submit" class="add-btn">Reverse</button>

        </form>
    </div>

    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="reverseWhileOutput"></div>
        <button type="button" class="reset-btn" id="resetReverseWhile">Reset</button>
    </div>

    <div class="sample-right">
        <h4>Description</h4>
        <p>
            Uses a while loop to reverse the digits
            of the entered number. Users can enter a number up to 9 digits long.
        </p>
    </div>

</div>

<!-- SAMPLE 5 -->
<div class="sample-header">
    Sample 5 - <span>Do While: ABCD Company Billing</span>
</div>

<div id="sample5" class="sample-box">

<div class="sample-left">
    <form id="billingForm" method="POST">  <!-- Added method="POST" -->

        <label class="section-label">Input</label>
        <br><br>

        <label>Customer Name:</label>
        <input type="text" name="customerName" id="customerName" required>  <!-- Added name attribute -->

        <br><br>

        <label>Class Code (1-3):</label>
        <input type="number" name="classCode" id="classCode" required>  <!-- Added name attribute -->

        <br><br>

        <label>No. of Days:</label>
        <input type="number" name="days" id="days" required>  <!-- Added name attribute -->

        <br><br>

        <button type="submit" class="add-btn">Compute</button>

    </form>
</div>

    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="multipleDoOutput"></div>
        <button type="button" class="reset-btn" id="resetMultipleDo">Reset</button>
    </div>

    <div class="sample-right">
        <h4>Description</h4>
        <p>
            This program computes the total bill of a customer based on 
            the selected class code and number of days rented. 
            It applies the corresponding recreation fee and daily rate 
            to generate the final billing amount.
        </p>
    </div>

</div>
</div>
<script src="../../24-1416ReyesJS/24-1416Reyesloop.js"></script>
    </body>
</html>