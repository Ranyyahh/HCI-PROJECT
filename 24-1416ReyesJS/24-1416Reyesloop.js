// ==============================
// SAMPLE 1 – For Loop (1 to N)
// ==============================

document.getElementById("forLoopForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("forLoopInput").value;

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

    });

});


// ==============================
// SAMPLE 2 – Even Numbers
// ==============================

document.getElementById("evenForForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("evenForInput").value;

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

    });

});


// ==============================
// SAMPLE 3 – Factorial
// ==============================

document.getElementById("factorialForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("factorialInput").value;

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

    });

});


// ==============================
// SAMPLE 4 – Reverse Number
// ==============================

document.getElementById("reverseWhileForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("reverseWhileInput").value;

    fetch("24-1416Reyeswhileloop_reverseprocess.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "number=" + encodeURIComponent(number)
    })
    .then(response => response.text())
    .then(data => {

        document.getElementById("reverseWhileOutput").textContent = data;

        localStorage.setItem("reverseWhileInput", number);
        localStorage.setItem("reverseWhileOutput", data);

    });

});

// ==============================
// SAMPLE 5 – Billing (Do While) - IMPROVED VERSION
// ==============================

document.getElementById("billingForm").addEventListener("submit", function(e) {
    e.preventDefault();

    // Get input values
    let name = document.getElementById("customerName").value.trim();
    let classCode = document.getElementById("classCode").value;
    let days = document.getElementById("days").value;

    // Validation
    if(name === "" || classCode === "" || days === "") {
        document.getElementById("multipleDoOutput").innerHTML = "⚠️ Please complete all fields.";
        return;
    }

    // Validate class code range (1-3)
    if(classCode < 1 || classCode > 3) {
        document.getElementById("multipleDoOutput").innerHTML = 
            "⚠️ Class code must be between 1 and 3 only.";
        return;
    }

    // Validate days (positive number)
    if(days <= 0) {
        document.getElementById("multipleDoOutput").innerHTML = 
            "⚠️ Number of days must be greater than 0.";
        return;
    }

    // Show loading message
    document.getElementById("multipleDoOutput").innerHTML = "Computing...";

    // Send data to PHP
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
        // Display the result
        document.getElementById("multipleDoOutput").innerHTML = data;
        
        // Save to localStorage
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


// ==============================
// RESTORE DATA ON PAGE LOAD
// ==============================

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


// ==============================
// RESET BUTTONS
// ==============================

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