//loop 1 to n
document.getElementById("forLoopForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("forLoopInput").value.trim();
   
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
document.getElementById("evenForForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("evenForInput").value.trim();
    

    if(number === "") { 
        document.getElementById("evenForOutput").innerHTML = "⚠️ Please enter a number.";
        return;
    }
    
    
    if(isNaN(number)) { 
        document.getElementById("evenForOutput").innerHTML = "⚠️ Please enter a valid number.";
        return;
    }
    
   
    number = parseInt(number); 
    
  
    if(number <= 0) {
        document.getElementById("evenForOutput").innerHTML = "⚠️ Please enter a positive number greater than 0.";
        return;
    }
    
  
    if(number > 1000) {
        document.getElementById("evenForOutput").innerHTML = "⚠️ Number is too large. Please enter 1000 or less.";
        return;
    }
    
  
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
document.getElementById("factorialForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("factorialInput").value.trim(); 
    
   
    if(number === "") { 
        document.getElementById("factorialOutput").textContent = "⚠️ Please enter a number.";
        return;
    }
    
  
    if(isNaN(number)) { 
        document.getElementById("factorialOutput").textContent = "⚠️ Please enter a valid number.";
        return;
    }
    
   
    if(number.includes(".")) {
        document.getElementById("factorialOutput").textContent = "⚠️ Please enter a whole number (no decimals).";
        return;
    }
    
  
    number = parseInt(number); 
    
    
    if(number < 0) { 
        document.getElementById("factorialOutput").textContent = "⚠️ Please enter a non-negative number (0 or positive).";
        return;
    }
    

    if(number > 20) {
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
        document.getElementById("reverseWhileOutput").textContent = " ⚠️ Please enter a number.";
        return;
    }
    
   
    if(isNaN(number)) { 
        document.getElementById("reverseWhileOutput").textContent = " ⚠️ Please enter a valid number.";
        return;
    }
    
   
    if(number.includes(".")) { 
        document.getElementById("reverseWhileOutput").textContent = " ⚠️ Please enter a whole number (no decimals).";
        return;
    }
   
    let digits = number.replace('-', '').length;
    
   
    if(digits > 9) { 
        document.getElementById("reverseWhileOutput").textContent = "⚠️ Maximum of 9 digits only.";
        return;
    }
    

    if(digits < 2) {
        document.getElementById("reverseWhileOutput").textContent = "⚠️ Please enter at least 2 digits.";
        return;
    }

    
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

    })
    .catch(error => {
        document.getElementById("reverseWhileOutput").textContent = "❌ Error processing request.";
        console.error("Error:", error);
    });

});


//billing process
document.getElementById("billingForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let name = document.getElementById("customerName").value.trim();
    let classCode = document.getElementById("classCode").value;
    let days = document.getElementById("days").value;

  
    if(name === "" || classCode === "" || days === "") {
        document.getElementById("multipleDoOutput").innerHTML = "Please complete all fields.";
        return;
    }

  
    let nameRegex = /^[A-Za-z\s]+$/;
    if(!nameRegex.test(name)) {
        document.getElementById("multipleDoOutput").innerHTML = 
            "❌ Please enter a valid name (letters and spaces only).";
        return;
    }
    
    if(name.length < 2) {
        document.getElementById("multipleDoOutput").innerHTML = 
            "❌ Name must be at least 2 characters.";
        return;
    }
    
    if(name.length > 50) {
        document.getElementById("multipleDoOutput").innerHTML = 
            "❌ Name is too long (maximum 50 characters).";
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
    
    if(days > 365) {
        document.getElementById("multipleDoOutput").innerHTML = 
            "Number of days cannot exceed 365.";
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