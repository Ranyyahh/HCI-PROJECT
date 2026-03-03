<?php
// PROCESSING SECTION (PHP LOGIC)

$output1 = "Hello, World!";

$output2 = "";
if(isset($_POST['name'])){
    $output2 = "Hello, " . $_POST['name'];
}

$output3 = "";
if(isset($_POST['num1']) && isset($_POST['num2'])){
    $output3 = "Sum: " . ($_POST['num1'] + $_POST['num2']);
}

$output4 = "";
if(isset($_POST['age'])){
    $output4 = "After 5 years, you will be: " . ($_POST['age'] + 5);
}

$output5 = "";
if(isset($_POST['number'])){
    $output5 = "Square: " . ($_POST['number'] * $_POST['number']);
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

    <a href="#" class="nav-item active">Basic Input/Output</a>
    <a href="#" class="nav-item">Variables & Data Types</a>
    <a href="#" class="nav-item">Conditional Statements</a>
    <a href="#" class="nav-item">Loops</a>
    <a href="24-1416ReyesWelcomepage.html" class="back-btn">Back</a>
</div>

<div class="main-content">

<h1 class="page-title">Basic Input/Output</h1>
<p class="page-desc">This page demonstrates different examples of basic input and output using PHP.</p>

<!-- SAMPLE 1 -->
<div class="sample-header">
    Sample 1 - <span>Hello World</span>
</div>
<div class="sample-box">
    <?php echo $output1; ?>
</div>

<!-- SAMPLE 2 -->
<div class="sample-header">
    Sample 2 - <span>Display Name</span>
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
    Sample 3 - <span>Add Two Numbers</span>
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
    Sample 4 - <span>Age After 5 Years</span>
</div>
<div class="sample-box">
    <form method="POST">
        Enter Age: <input type="number" name="age">
        <button type="submit">Submit</button>
    </form>
    <p><?php echo $output4; ?></p>
</div>

<!-- SAMPLE 5 -->
<div class="sample-header">
    Sample 5 - <span>Square of a Number</span>
</div>
<div class="sample-box">
    <form method="POST">
        Enter Number: <input type="number" name="number">
        <button type="submit">Submit</button>
    </form>
    <p><?php echo $output5; ?></p>
</div>

</div>
</div>

</body>
</html>