
// Reverse
document.getElementById("reverseForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let text = document.getElementById("reverseInput").value.trim();
    
    // CLIENT-SIDE VALIDATION
    if(text === "") {
        document.getElementById("reverseOutput").textContent = "Please enter some text.";
        return;
    }
    
    if(text.length > 1000) {
        document.getElementById("reverseOutput").textContent = "Text is too long.";
        return;
    }

    fetch("24-1416Reyesreverse_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "reverse=" + encodeURIComponent(text)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("reverseOutput").textContent = data;
        localStorage.setItem("reverseInput", text);
        localStorage.setItem("reverseOutput", data);
    });
});


// Name Greeting
document.getElementById("greetForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let name = document.getElementById("nameInput").value.trim();

    if(name === "") {
        document.getElementById("greetOutput").textContent = "Please enter your name.";
        return;
    }
    
    if(name.length > 100) {
        document.getElementById("greetOutput").textContent = "Name is too long.";
        return;
    }
    
    if(/\d/.test(name)) {
        document.getElementById("greetOutput").textContent = "Please do not include numbers.";
        return;
    }

    fetch("24-1416Reyesgreet_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "name=" + encodeURIComponent(name)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("greetOutput").textContent = data;
        localStorage.setItem("nameInput", name);
        localStorage.setItem("greetOutput", data);
    });
});


// Sum of Two Numbers
document.getElementById("sumForm").addEventListener("submit", function(e){
    e.preventDefault();

    let num1 = document.getElementById("num1Input").value.trim();
    let num2 = document.getElementById("num2Input").value.trim();
    
    if(num1 === "" || num2 === "") {
        document.getElementById("sumOutput").textContent = "Please enter both numbers.";
        return;
    }
    
    if(isNaN(num1) || isNaN(num2)) {
        document.getElementById("sumOutput").textContent = "Please enter valid numbers.";
        return;
    }
    
    if(Math.abs(parseFloat(num1)) > 999999999 || Math.abs(parseFloat(num2)) > 999999999) {
        document.getElementById("sumOutput").textContent = "Numbers are too large.";
        return;
    }

    fetch("24-1416Reyessum_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "num1=" + encodeURIComponent(num1) +
              "&num2=" + encodeURIComponent(num2)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("sumOutput").textContent = data;
        localStorage.setItem("num1Input", num1);
        localStorage.setItem("num2Input", num2);
        localStorage.setItem("sumOutput", data);
    });
});

// BMI Calculator
document.getElementById("bmiForm").addEventListener("submit", function(e){

    e.preventDefault();

    let weight = document.getElementById("weightInput").value.trim();
    let height = document.getElementById("heightInput").value.trim();


    if(weight === "" || height === "") {
        document.getElementById("bmiOutput").textContent = "Please enter both weight and height.";
        return;
    }

    if(isNaN(weight) || isNaN(height)) {
        document.getElementById("bmiOutput").textContent = "Please enter valid numbers.";
        return;
    }


    let weightNum = parseFloat(weight);
    let heightNum = parseFloat(height);


    if(weightNum <= 0 || heightNum <= 0) {
        document.getElementById("bmiOutput").textContent = "Please enter positive values.";
        return;
    }

    fetch("24-1416Reyesbmi_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "weight=" + encodeURIComponent(weight) +
              "&height=" + encodeURIComponent(height)
    })
    .then(response => response.text())
    .then(data => {

        document.getElementById("bmiOutput").textContent = data;
        

        localStorage.setItem("weightInput", weight);
        localStorage.setItem("heightInput", height);
        localStorage.setItem("bmiOutput", data);

    })
    .catch(error => {
        document.getElementById("bmiOutput").textContent = "Error: " + error.message;
    });
});


//Multiply Two Numbers
document.getElementById("multiplyForm").addEventListener("submit", function(e){

    e.preventDefault();

    let mul1 = document.getElementById("mul1Input").value;
    let mul2 = document.getElementById("mul2Input").value;

    fetch("24-1416Reyesmul_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "mul1=" + encodeURIComponent(mul1) +
              "&mul2=" + encodeURIComponent(mul2)
    })
    .then(response => response.text())
    .then(data => {

        document.getElementById("multiplyOutput").textContent = data;

        localStorage.setItem("mul1Input", mul1);
        localStorage.setItem("mul2Input", mul2);
        localStorage.setItem("multiplyOutput", data);

    });

});


// Restore data from local storage on page load
window.addEventListener("load", function(){

    // Sample 1
    document.getElementById("reverseInput").value =
        localStorage.getItem("reverseInput") || "";

    document.getElementById("reverseOutput").textContent =
        localStorage.getItem("reverseOutput") || "";

    // Sample 2
    document.getElementById("nameInput").value =
        localStorage.getItem("nameInput") || "";

    document.getElementById("greetOutput").textContent =
        localStorage.getItem("greetOutput") || "";

    // Sample 3
    document.getElementById("num1Input").value =
        localStorage.getItem("num1Input") || "";

    document.getElementById("num2Input").value =
        localStorage.getItem("num2Input") || "";

    document.getElementById("sumOutput").textContent =
        localStorage.getItem("sumOutput") || "";

    // Sample 4
    document.getElementById("weightInput").value =
        localStorage.getItem("weightInput") || "";

    document.getElementById("heightInput").value =
        localStorage.getItem("heightInput") || "";

    document.getElementById("bmiOutput").textContent =
        localStorage.getItem("bmiOutput") || "";

    // Sample 5
    document.getElementById("mul1Input").value =
        localStorage.getItem("mul1Input") || "";

    document.getElementById("mul2Input").value =
        localStorage.getItem("mul2Input") || "";

    document.getElementById("multiplyOutput").textContent =
        localStorage.getItem("multiplyOutput") || "";

});



// Reset buttons

// reverse
document.getElementById("resetReverse").addEventListener("click", function(){
    document.getElementById("reverseInput").value = "";
    document.getElementById("reverseOutput").textContent = "";
    localStorage.removeItem("reverseInput");
    localStorage.removeItem("reverseOutput");
});

// name ggreeting
document.getElementById("resetGreet").addEventListener("click", function(){
    document.getElementById("nameInput").value = "";
    document.getElementById("greetOutput").textContent = "";
    localStorage.removeItem("nameInput");
    localStorage.removeItem("greetOutput");
});

// sum of two numbers
document.getElementById("resetSum").addEventListener("click", function(){
    document.getElementById("num1Input").value = "";
    document.getElementById("num2Input").value = "";
    document.getElementById("sumOutput").textContent = "";
    localStorage.removeItem("num1Input");
    localStorage.removeItem("num2Input");
    localStorage.removeItem("sumOutput");
});

// bmi calculator
document.getElementById("resetBmi").addEventListener("click", function(){
    document.getElementById("weightInput").value = "";
    document.getElementById("heightInput").value = "";
    document.getElementById("bmiOutput").textContent = "";
    localStorage.removeItem("weightInput");
    localStorage.removeItem("heightInput");
    localStorage.removeItem("bmiOutput");
});

// multiply two numbers
document.getElementById("resetMultiply").addEventListener("click", function(){
    document.getElementById("mul1Input").value = "";
    document.getElementById("mul2Input").value = "";
    document.getElementById("multiplyOutput").textContent = "";
    localStorage.removeItem("mul1Input");
    localStorage.removeItem("mul2Input");
    localStorage.removeItem("multiplyOutput");
});


document.addEventListener("DOMContentLoaded", function () {

    let navItems = document.querySelectorAll(".nav-item");

    if (navItems.length > 0) {

        navItems.forEach(function (item) {

            item.addEventListener("click", function () {

                localStorage.clear();

            });

        });

    }

});


