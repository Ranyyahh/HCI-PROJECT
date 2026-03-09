//loop 1 to n
document.getElementById("forLoopForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("forLoopInput").value.trim(); // (1) TRIM
    
   
    if(number === "") { 
        document.getElementById("forLoopOutput").innerHTML = "⚠️ Please enter a number.";
        return; 
    }
    
  
    if(isNaN(number)) {
        document.getElementById("forLoopOutput").innerHTML = "⚠️ Please enter a valid number.";
        return;
    }
    
   
    number = parseInt(number); 
    

    if(number <= 0) { 
        document.getElementById("forLoopOutput").innerHTML = "⚠️ Please enter a positive number greater than 0.";
        return;
    }
    

    if(number > 1000) { 
        document.getElementById("forLoopOutput").innerHTML = "⚠️ Number is too large. Please enter 1000 or less.";
        return;
    }

    fetch("24-1416Reyesforloop_onetonprocess.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "number=" + encodeURIComponent(number)
    })
    .then(response => response.text())
    .then(data => {

        document.getElementById("forLoopOutput").innerHTML = data;

        localStorage.setItem("forLoopInput", number);
        localStorage.setItem("forLoopOutput", data);

    })
    .catch(error => {
        document.getElementById("forLoopOutput").innerHTML = "❌ Error processing request.";
        console.error("Error:", error);
    });

});


//even numbers
//even numbers
document.getElementById("evenForForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("evenForInput").value.trim(); // (1) TRIM
    
    // VALIDATIONS
    if(number === "") { // (2) EMPTY CHECK
        document.getElementById("evenForOutput").innerHTML = "⚠️ Please enter a number.";
        return;
    }
    
    // Check if it's a number
    if(isNaN(number)) { // (3) NUMBER CHECK
        document.getElementById("evenForOutput").innerHTML = "⚠️ Please enter a valid number.";
        return;
    }
    
    // Convert to integer
    number = parseInt(number); // (4) CONVERT TO INTEGER
    
    // Check if it's positive
    if(number <= 0) { // (5) POSITIVE CHECK
        document.getElementById("evenForOutput").innerHTML = "⚠️ Please enter a positive number greater than 0.";
        return;
    }
    
    // Check if it's too large
    if(number > 1000) { // (6) SIZE LIMIT
        document.getElementById("evenForOutput").innerHTML = "⚠️ Number is too large. Please enter 1000 or less.";
        return;
    }
    
    // Optional: Check if number is at least 2 para may even numbers
    if(number < 2) {
        document.getElementById("evenForOutput").innerHTML = "⚠️ Please enter a number greater than or equal to 2 to see even numbers.";
        return;
    }

    fetch("24-1416Reyesforloop_evennumprocess.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "number=" + encodeURIComponent(number)
    })
    .then(response => response.text())
    .then(data => {

        document.getElementById("evenForOutput").innerHTML = data;

        localStorage.setItem("evenForInput", number);
        localStorage.setItem("evenForOutput", data);

    })
    .catch(error => {
        document.getElementById("evenForOutput").innerHTML = "❌ Error processing request.";
        console.error("Error:", error);
    });

});

//factorial

//factorial
document.getElementById("factorialForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("factorialInput").value.trim(); // (1) TRIM
    
    // VALIDATIONS
    if(number === "") { // (2) EMPTY CHECK
        document.getElementById("factorialOutput").textContent = "⚠️ Please enter a number.";
        return;
    }
    
    // Check if it's a number
    if(isNaN(number)) { // (3) NUMBER CHECK
        document.getElementById("factorialOutput").textContent = "⚠️ Please enter a valid number.";
        return;
    }
    
    // Check if it's an integer (walang decimal)
    if(number.includes(".")) { // (4) INTEGER CHECK
        document.getElementById("factorialOutput").textContent = "⚠️ Please enter a whole number (no decimals).";
        return;
    }
    
    // Convert to integer
    number = parseInt(number); // (5) CONVERT TO INTEGER
    
    // Check if it's non-negative (0 is allowed for factorial: 0! = 1)
    if(number < 0) { // (6) NON-NEGATIVE CHECK
        document.getElementById("factorialOutput").textContent = "⚠️ Please enter a non-negative number (0 or positive).";
        return;
    }
    
    // Check if it's too large (factorial grows very fast)
    if(number > 20) { // (7) SIZE LIMIT - 20! is already very large
        document.getElementById("factorialOutput").textContent = "⚠️ Number is too large. Please enter 20 or less for factorial.";
        return;
    }

    fetch("24-1416Reyesforloop_factorialprocess.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "number=" + encodeURIComponent(number)
    })
    .then(response => response.text())
    .then(data => {

        document.getElementById("factorialOutput").textContent = data;

        localStorage.setItem("factorialInput", number);
        localStorage.setItem("factorialOutput", data);

    })
    .catch(error => {
        document.getElementById("factorialOutput").textContent = "❌ Error processing request.";
        console.error("Error:", error);
    });

});


//Reverse number
document.getElementById("reverseWhileForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("reverseWhileInput").value.trim(); 
    

    if(number === "") { 
        document.getElementById("reverseWhileOutput").textContent = "⚠️ Please enter a number.";
        return;
    }
    
   
    if(isNaN(number)) { 
        document.getElementById("reverseWhileOutput").textContent = "⚠️ Please enter a valid number.";
        return;
    }
    
   
    if(number.includes(".")) { 
        document.getElementById("reverseWhileOutput").textContent = "⚠️ Please enter a whole number (no decimals).";
        return;
    }
    

    let originalNumber = parseInt(number);
    
  
    if(Math.abs(originalNumber) > 1000000) { 
        document.getElementById("reverseWhileOutput").textContent = "⚠️ Number is too large. Please enter between -1,000,000 and 1,000,000.";
        return;
    }
    
    if(Math.abs(originalNumber) < 10 && Math.abs(originalNumber) >= 0) {
        console.log("Single digit number - reverse is the same");
    }

    fetch("24-1416Reyeswhileloop_reverseprocess.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "number=" + encodeURIComponent(originalNumber)
    })
    .then(response => response.text())
    .then(data => {

        document.getElementById("reverseWhileOutput").textContent = data;

        localStorage.setItem("reverseWhileInput", originalNumber);
        localStorage.setItem("reverseWhileOutput", data);

    })
    .catch(error => {
        document.getElementById("reverseWhileOutput").textContent = "❌ Error processing request.";
        console.error("Error:", error);
    });

});

//biling process

document.getElementById("billingForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let name = document.getElementById("customerName").value.trim();
    let classCode = document.getElementById("classCode").value;
    let days = document.getElementById("days").value;

    if(name === "" || classCode === "" || days === "") {
        document.getElementById("multipleDoOutput").innerHTML = "Please complete all fields.";
        return;
    }

    if(classCode < 1 || classCode > 3) {
        document.getElementById("multipleDoOutput").innerHTML = 
            "Class code must be between 1 and 3 only.";
        return;
    }

    if(days <= 0) {
        document.getElementById("multipleDoOutput").innerHTML = 
            "Number of days must be greater than 0.";
        return;
    }


    document.getElementById("multipleDoOutput").innerHTML = "Computing...";


    fetch("24-1416Reyesdowhile_billingprocess.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "customerName=" + encodeURIComponent(name) +
              "&classCode=" + encodeURIComponent(classCode) +
              "&days=" + encodeURIComponent(days)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then(data => {
        document.getElementById("multipleDoOutput").innerHTML = data;
        

        localStorage.setItem("customerName", name);
        localStorage.setItem("classCode", classCode);
        localStorage.setItem("days", days);
        localStorage.setItem("multipleDoOutput", data);
    })
    .catch(error => {
        document.getElementById("multipleDoOutput").innerHTML = 
            "❌ Error processing request. Please try again.";
        console.error("Error:", error);
    });
});


//Restore data

window.addEventListener("load", function(){

    document.getElementById("forLoopInput").value =
        localStorage.getItem("forLoopInput") || "";
    document.getElementById("forLoopOutput").innerHTML =
        localStorage.getItem("forLoopOutput") || "";

    document.getElementById("evenForInput").value =
        localStorage.getItem("evenForInput") || "";
    document.getElementById("evenForOutput").innerHTML =
        localStorage.getItem("evenForOutput") || "";

    document.getElementById("factorialInput").value =
        localStorage.getItem("factorialInput") || "";
    document.getElementById("factorialOutput").textContent =
        localStorage.getItem("factorialOutput") || "";

    document.getElementById("reverseWhileInput").value =
        localStorage.getItem("reverseWhileInput") || "";
    document.getElementById("reverseWhileOutput").textContent =
        localStorage.getItem("reverseWhileOutput") || "";

     document.getElementById("customerName").value =
        localStorage.getItem("customerName") || "";
    document.getElementById("classCode").value =
        localStorage.getItem("classCode") || "";
    document.getElementById("days").value =
        localStorage.getItem("days") || "";
    document.getElementById("multipleDoOutput").innerHTML =
        localStorage.getItem("multipleDoOutput") || "";

});


///Reset button

document.getElementById("resetForLoop").addEventListener("click", function(){
    document.getElementById("forLoopInput").value = "";
    document.getElementById("forLoopOutput").innerHTML = "";
    localStorage.removeItem("forLoopInput");
    localStorage.removeItem("forLoopOutput");
});

document.getElementById("resetEvenFor").addEventListener("click", function(){
    document.getElementById("evenForInput").value = "";
    document.getElementById("evenForOutput").innerHTML = "";
    localStorage.removeItem("evenForInput");
    localStorage.removeItem("evenForOutput");
});

document.getElementById("resetFactorial").addEventListener("click", function(){
    document.getElementById("factorialInput").value = "";
    document.getElementById("factorialOutput").textContent = "";
    localStorage.removeItem("factorialInput");
    localStorage.removeItem("factorialOutput");
});

document.getElementById("resetReverseWhile").addEventListener("click", function(){
    document.getElementById("reverseWhileInput").value = "";
    document.getElementById("reverseWhileOutput").textContent = "";
    localStorage.removeItem("reverseWhileInput");
    localStorage.removeItem("reverseWhileOutput");
});

document.getElementById("resetMultipleDo").addEventListener("click", function(){

    document.getElementById("customerName").value = "";
    document.getElementById("classCode").value = "";
    document.getElementById("days").value = "";
    document.getElementById("multipleDoOutput").innerHTML = "";

    localStorage.removeItem("customerName");
    localStorage.removeItem("classCode");
    localStorage.removeItem("days");
    localStorage.removeItem("multipleDoOutput");
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