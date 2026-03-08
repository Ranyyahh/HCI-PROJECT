<?php
session_start();
$currentPage = "variables";

if(!isset($_SESSION['current_page'])){
    $_SESSION['current_page'] = $currentPage;
}

if($_SESSION['current_page'] !== $currentPage){
    unset($_SESSION['variables']);
    $_SESSION['current_page'] = $currentPage;
}

if(!isset($_SESSION['variables'])){
    $_SESSION['variables'] = [];
}
?>

<html>
<head>
    <title>Variables and Data Types</title>
 <link rel="stylesheet" href="../../24-1416ReyesCSS/24-1416ReyesVariablepage.css">
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
        <a href="#" class="nav-item active"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesVarsSidebar.png" alt="Variables & Data Types" class="box-img">Variables & Data Types</a>
        <a href="../24-1416ReyesConditional/24-1416Reyesconditionalpage.php" class="nav-item"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesIfelseSidebar.png" alt="Conditional Statements" class="box-img">Conditional Statements</a>
        <a href="../24-1416ReyesLoops/24-1416Reyesloopspage.php" class="nav-item"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesLoopSidebar.png" alt="Loops" class="box-img">Loops</a>
        <a href="../../24-1416ReyesHTML/24-1416ReyesWelcomepage.html" class="back-btn"><img src="../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416Reyesbackbutton.png" alt="Back button" class="back-icon">Back</a>
    </div>


   <div class="main-content">

    <h1 class="page-title">Variables and Data Types</h1>
    <p class="page-desc">Variables and Data Types in Fundamentals of Programming refers to how the data is stored and organized inside the program.</p>
    <p class="supporting-desc">• Variable: This is a container used to store data or information. <br>
    • Data Type: This defines the type or kind of data that a variable can hold. It can be a number, text, boolean, string, etc.
    </p>

  <!-- SAMPLE 1 - String Variable: Name Processor -->
<div class="sample-header">
    Sample 1 - <span>String Variable: Name Processor</span>
</div>
<div id="sample1" class="sample-box">

    <!-- LEFT (INPUT) -->
    <div class="sample-left">
        <form id="stringForm">
            <label class="section-label">Input</label>
            <br><br>
            <label>Enter your name:</label>
            <input type="text" id="stringInput">
            <br><br>
            <button type="submit" class="add-btn">Process</button>
        </form>
    </div>

    <!-- MIDDLE (OUTPUT) -->
    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="stringOutput"></div>
        <button type="button" class="reset-btn" id="resetString">Reset</button>
    </div>

    <!-- RIGHT (DESCRIPTION) -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>This example demonstrates STRING variables. It shows how text data is processed - original text, uppercase conversion, and character count.</p>
    </div>
</div>

<!-- SAMPLE 2 - Integer Variable: Age Calculator -->
<div class="sample-header">
    Sample 2 - <span>Integer Variable: Age Calculator</span>
</div>
<div id="sample2" class="sample-box">

    <!-- LEFT (INPUT) -->
    <div class="sample-left">
        <form id="integerForm">
            <label class="section-label">Input</label>
            <br><br>
            <label>Enter your birth year:</label>
            <input type="number" id="birthYearInput" min="1900" max="<?= date("Y") ?>">
            <br><br>
            <button type="submit" class="add-btn">Calculate Age</button>
        </form>
    </div>

    <!-- MIDDLE (OUTPUT) -->
    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="integerOutput"></div>
        <button type="button" class="reset-btn" id="resetInteger">Reset</button>
    </div>

    <!-- RIGHT (DESCRIPTION) -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>This example demonstrates INTEGER variables. It shows how whole numbers are used in calculations - birth year, current year, and age computation.</p>
    </div>
</div>

<!-- SAMPLE 3 - Float Variable: Grade Average -->
<div class="sample-header">
    Sample 3 - <span>Float Variable: Grade Average</span>
</div>
<div id="sample3" class="sample-box">

    <!-- LEFT (INPUT) -->
    <div class="sample-left">
        <form id="floatForm">
            <label class="section-label">Input</label>
            <label>Grade 1:</label>
            <input type="number" id="grade1Input" step="0.01" min="50" max="100">
            <br>
            <label>Grade 2:</label>
            <input type="number" id="grade2Input" step="0.01" min="50" max="100">
            <br>
            <label>Grade 3:</label>
            <input type="number" id="grade3Input" step="0.01" min="50" max="100">
            <br><br>
            <button type="submit" class="add-btn">Compute Average</button>
        </form>
    </div>

    <!-- MIDDLE (OUTPUT) -->
    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="floatOutput"></div>
        <button type="button" class="reset-btn" id="resetFloat">Reset</button>
    </div>

    <!-- RIGHT (DESCRIPTION) -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>This example demonstrates FLOAT variables. It shows how decimal numbers are processed and averaged with precise calculations.</p>
    </div>
</div>


<!-- SAMPLE 4 - Boolean Variable: Password Check -->
<div class="sample-header">
    Sample 4 - <span>Boolean Variable: Password Check</span>
</div>
<div id="sample4" class="sample-box">

    <!-- LEFT (INPUT) -->
    <div class="sample-left">
        <form id="booleanForm">
            <label class="section-label">Input</label>
            <br><br>
            <label>Enter password:</label>
            <input type="password" id="passwordInput" >
            <br><br>
            <button type="submit" class="add-btn">Check Password</button>
        </form>
    </div>

    <!-- MIDDLE (OUTPUT) -->
    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="booleanOutput"></div>
        <button type="button" class="reset-btn" id="resetBoolean">Reset</button>
    </div>

    <!-- RIGHT (DESCRIPTION) -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>This example demonstrates BOOLEAN variables. It shows how true/false values work in conditional statements and access control.</p>
    </div>
</div>

<!-- SAMPLE 5 - Multiple Data Types: Student Information -->
<div class="sample-header">
    Sample 5 - <span>Multiple Data Types: Student Info</span>
</div>
<div id="sample5" class="sample-box">

    <!-- LEFT (INPUT) -->
    <div class="sample-left">
        <form id="multiTypeForm">
            <label class="section-label">Input</label>
            <label>Student Name:</label>
            <input type="text" id="studentNameInput">
            <br>
            <label>Age:</label>
            <input type="number" id="studentAgeInput" min="0" >
            <br>
            <button type="submit" class="add-btn">Process Info</button>
        </form>
    </div>

    <!-- MIDDLE (OUTPUT) -->
    <div class="sample-middle">
        <label>Output</label>
        <div class="output-box" id="multiTypeOutput"></div>
        <button type="button" class="reset-btn" id="resetMultiType">Reset</button>
    </div>

    <!-- RIGHT (DESCRIPTION) -->
    <div class="sample-right">
        <h4>Description</h4>
        <p>This example combines MULTIPLE DATA TYPES. It shows how String, Integer, Float, and Boolean variables work together in one program.</p>
    </div>
</div>
<script src="../../24-1416ReyesJS/24-1416Reyesvars.js"></script>
    </body>
</html>