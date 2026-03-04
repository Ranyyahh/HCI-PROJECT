<?php
session_start();

if(!isset($_SESSION['basic_io'])){
    $_SESSION['basic_io'] = [];
}

/* SAMPLE 1 */
if(isset($_POST['reverse'])){
    $_SESSION['basic_io']['reverse'] = $_POST['reverse'];
    $_SESSION['basic_io']['output1'] = "Reversed: " . strrev($_POST['reverse']);
}

/* SAMPLE 2 */
if(isset($_POST['name'])){
    $_SESSION['basic_io']['name'] = $_POST['name'];
    $_SESSION['basic_io']['output2'] = "Hello, " . $_POST['name'];
}

/* SAMPLE 3 */
if(isset($_POST['num1']) && isset($_POST['num2'])){
    $_SESSION['basic_io']['num1'] = $_POST['num1'];
    $_SESSION['basic_io']['num2'] = $_POST['num2'];
    $_SESSION['basic_io']['output3'] = "Sum: " . ($_POST['num1'] + $_POST['num2']);
}

/* SAMPLE 4 */
if(isset($_POST['weight']) && isset($_POST['height'])){
    $_SESSION['basic_io']['weight'] = $_POST['weight'];
    $_SESSION['basic_io']['height'] = $_POST['height'];

    if($_POST['height'] != 0){
        $bmi = $_POST['weight'] / ($_POST['height'] * $_POST['height']);
        $_SESSION['basic_io']['output4'] = "BMI: " . round($bmi,2);
    }
}

/* SAMPLE 5 */
if(isset($_POST['mul1']) && isset($_POST['mul2'])){
    $_SESSION['basic_io']['mul1'] = $_POST['mul1'];
    $_SESSION['basic_io']['mul2'] = $_POST['mul2'];
    $_SESSION['basic_io']['output5'] = "Product: " . ($_POST['mul1'] * $_POST['mul2']);
}
?>

<html>
<head>
    <title>Basic Input and Output</title>
 <link rel="stylesheet" href="../../../24-1416ReyesCSS/24-1416ReyesBasicIOpage.css">
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

        <a href="#" class="nav-item active"><img src="../../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesBasicIOSidebar.png" alt="Basic IO" class="box-img">Basic Input/Output</a>
        <a href="24-1416Reyesvarspage.php" class="nav-item"><img src="../../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesVarsSidebar.png" alt="Variables & Data Types" class="box-img">Variables & Data Types</a>
        <a href="24-1416Reyesconditionalpage.php" class="nav-item"><img src="../../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesIfelseSidebar.png" alt="Conditional Statements" class="box-img">Conditional Statements</a>
        <a href="24-1416Reyesloopspage.php" class="nav-item"><img src="../../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416ReyesLoopSidebar.png" alt="Loops" class="box-img">Loops</a>
        <a href="24-1416ReyesWelcomepage.php" class="back-btn"><img src="../../../24-1416ReyesIMAGES/24-1416ReyesWebsite/24-1416Reyesbackbutton.png" alt="Back button" class="back-icon">Back</a>
    </div>


   <div class="main-content">

    <h1 class="page-title">Basic Input/Output</h1>
    <p class="page-desc">Basic Input/Output in Fundamentals of Programming refers to the process of asking the user to input a data or information and the computer will process and display an associated result.</p>
    <p class="supporting-desc">• User Input: This is the data or information that the user will provide or input. It can be in the form of texts, numbers, etc.<br>
    • Output: This is the associated result that the computer will display. It can be in the form of texts, numbers, etc.
    </p>

    <!-- SAMPLE 1 -->
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

<div class="sample-middle">
    <label>Output</label>
    <div class="output-box" id="reverseOutput"></div>
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
    <div id= "sample2" class="sample-box">
        <div class="sample-left">
        <form method="POST">
        Enter Name: <input type="text" name="name" value="<?php echo isset($_SESSION['basic_io']['name']) ? $_SESSION['basic_io']['name'] : ''; ?>">
        <button type="submit">Submit</button>
    </form>
    <p class="output"><?php echo isset($_SESSION['basic_io']['output2']) ? $_SESSION['basic_io']['output2'] : ''; ?></p>
    </div>

        <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example shows the process of greeting the user by their name. The user will input their own name and the system will process it to greet them with a message.
        </p>
    </div>

</div>

    <!-- SAMPLE 3 -->
    <div class="sample-header">
        Sample 3 - <span>Sum of Two Numbers</span>
    </div>
    
    <div id= "sample3" class="sample-box">
        <div class="sample-left">
       <form method="POST">
    
    <div class="input-row">
        <label>Number 1:</label>
        <input type="number" name="num1" value="<?php echo isset($_SESSION['basic_io']['num1']) ? $_SESSION['basic_io']['num1'] : ''; ?>">
    </div>

    <div class="input-row">
        <label>Number 2:</label>
        <input type="number" name="num2" value="<?php echo isset($_SESSION['basic_io']['num2']) ? $_SESSION['basic_io']['num2'] : ''; ?>">
    </div>

    <button type="submit" class="add-btn">Add</button>
</form>
    <p class="output"><?php echo isset($_SESSION['basic_io']['output3']) ? $_SESSION['basic_io']['output3'] : ''; ?></p>
    </div>

    <div class="sample-right">
        <h4>Description</h4>
        <p>
            This example shows the process of adding two numbers input by the user. The user will input two numbers and the system will display the sum of it.
        </p>
    </div>

</div>

    <!-- SAMPLE 4 -->
    <div class="sample-header">
        Sample 4 - <span>BMI Calculator</span>
    </div>
    <div id= "sample4" class="sample-box">
        <div class="sample-left">
        <form method="POST">
            <div class="input-row">
                <label>Weight (kg):</label>
                <input type="number" name="weight" value="<?php echo isset($_SESSION['basic_io']['weight']) ? $_SESSION['basic_io']['weight'] : ''; ?>">
            </div>

            <div class="input-row">
                <label>Height (m):</label>
                <input type="number" name="height" value="<?php echo isset($_SESSION['basic_io']['height']) ? $_SESSION['basic_io']['height'] : ''; ?>">
            </div>
    <button type="submit" class="add-btn">Calculate</button>
</form>
 <p class="output"><?php echo isset($_SESSION['basic_io']['output4']) ? $_SESSION['basic_io']['output4'] : ''; ?></p>
    </div>

      <div class="sample-right">
        <h4>Description</h4>
        <p>
           This example shows the process of calculating the Body Mass Index (BMI) based on the height and weight input by the user.
    </div>

</div>


    <!-- SAMPLE 5 -->
    <div class="sample-header">
        Sample 5 - <span>Product of Two Numbers</span>
    </div>
    <div id= "sample5" class="sample-box">
         <div class="sample-left">
        <form method="POST">
             <div class="input-row">
                <label>Number 1: </label>
                <input type="number" name="mul1" value="<?php echo isset($_SESSION['basic_io']['mul1']) ? $_SESSION['basic_io']['mul1'] : ''; ?>">
             </div>

     <div class="input-row">
        <label>Number 2: </label>
        <input type="number" name="mul2" value="<?php echo isset($_SESSION['basic_io']['mul2']) ? $_SESSION['basic_io']['mul2'] : ''; ?>">
    </div>
    <button type="submit" class="add-btn">Multiply</button>
    
</form>
<p class="output"><?php echo isset($_SESSION['basic_io']['output5']) ? $_SESSION['basic_io']['output5'] : ''; ?></p>
    </div>

      <div class="sample-right">
        <h4>Description</h4>
        <p>
           This example shows the process of multiplying two numbers input by the user.
    </div>

</div>
</div>


</div>
<script src="../24-1416ReyesJS/24-1416Reyesbasicio.js"></script>
    </body>
</html>