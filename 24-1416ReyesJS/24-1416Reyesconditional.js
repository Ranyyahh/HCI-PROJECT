// Letter Grade Remarks
document.getElementById("letterGradeForm").addEventListener("submit", function(e){
    e.preventDefault();

    let grade = document.getElementById("letterGradeInput").value.trim(); 
    

    if(grade === "") { 
        document.getElementById("letterGradeOutput").textContent = "⚠️ Please enter a grade letter (A, B, C, D, F).";
        return; 
    }
    
    grade = grade.toUpperCase(); 
    
  
    const validGrades = ["A", "B", "C", "D", "F"];
    if(!validGrades.includes(grade)) { 
        document.getElementById("letterGradeOutput").textContent = "⚠️ Please enter a valid grade letter (A, B, C, D, or F only).";
        return;
    }
    
   
    if(grade.length !== 1) { 
        document.getElementById("letterGradeOutput").textContent = "⚠️ Please enter only one letter.";
        return;
    }

    fetch("24-1416Reyeslettergrade_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "grade=" + encodeURIComponent(grade)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("letterGradeOutput").textContent = data;
        localStorage.setItem("letterGradeInput", grade);
        localStorage.setItem("letterGradeOutput", data);
    })
    .catch(error => {
        document.getElementById("letterGradeOutput").textContent = "❌ Error processing request.";
        console.error("Error:", error);
    });
});

// Pass or Fail
document.getElementById("gradeForm").addEventListener("submit", function(e){
    e.preventDefault();

    let grade = document.getElementById("gradeInput").value.trim(); 
    
    
    if(grade === "") { 
        document.getElementById("gradeOutput").textContent = "⚠️ Please enter your grade.";
        return;
    }
    
    
    if(isNaN(grade)) { 
        document.getElementById("gradeOutput").textContent = "⚠️ Please enter a valid number.";
        return;
    }
    
   
    grade = parseFloat(grade); 
    
    
    if(grade < 0 || grade > 100) { 
        document.getElementById("gradeOutput").textContent = "⚠️ Grade must be between 0 and 100.";
        return;
    }
    
    
    if((grade * 100) % 1 !== 0) { 
        document.getElementById("gradeOutput").textContent = "⚠️ Please enter grade with maximum 2 decimal places.";
        return;
    }

    fetch("24-1416Reyespassfail_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "grade=" + encodeURIComponent(grade)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("gradeOutput").textContent = data;
        localStorage.setItem("gradeInput", grade);
        localStorage.setItem("gradeOutput", data);
    })
    .catch(error => {
        document.getElementById("gradeOutput").textContent = "❌ Error processing request.";
        console.error("Error:", error);
    });
});


// Number Classification
document.getElementById("numberForm").addEventListener("submit", function(e){
    e.preventDefault();

    let number = document.getElementById("numberInput").value.trim(); 
    
    
    if(number === "") { 
        document.getElementById("numberOutput").textContent = "⚠️ Please enter a number.";
        return;
    }
    
   
    if(isNaN(number)) { 
        document.getElementById("numberOutput").textContent = "⚠️ Please enter a valid number.";
        return;
    }
    
   
    number = parseFloat(number);
    
   
    if(number > 1000000 || number < -1000000) { 
        document.getElementById("numberOutput").textContent = "⚠️ Number is too large. Please enter between -1,000,000 and 1,000,000.";
        return;
    }
    
    
    if(Number.isInteger(number)) {
       
        console.log("Integer detected");
    }

    fetch("24-1416Reyesnumber_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "number=" + encodeURIComponent(number)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("numberOutput").textContent = data;
        localStorage.setItem("numberInput", number);
        localStorage.setItem("numberOutput", data);
    })
    .catch(error => {
        document.getElementById("numberOutput").textContent = "❌ Error processing request.";
        console.error("Error:", error);
    });
});



// Even or Odd Checker with Nested IF 

document.getElementById("evenOddForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("evenOddInput").value;
    

    if(number === "" || number === null){
        alert("Please enter a number!");
        return;
    } else {
        if(isNaN(number)){
            alert("Invalid input! Please enter a valid number.");
            return;
        }
    }

    fetch("24-1416Reyesevenodd_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "number=" + encodeURIComponent(number)
    })
    .then(response => response.text())
    .then(data => {

        document.getElementById("evenOddOutput").textContent = data;

        localStorage.setItem("evenOddInput", number);
        localStorage.setItem("evenOddOutput", data);

    });

});

// Voting Qualification Checker
document.getElementById("ageForm").addEventListener("submit", function(e){
    e.preventDefault();

    let age = document.getElementById("ageInput").value.trim(); 
    
   
    if(age === "") { 
        document.getElementById("ageOutput").textContent = "⚠️ Please enter your age.";
        return;
    }
    

    if(isNaN(age)) {
        document.getElementById("ageOutput").textContent = "⚠️ Please enter a valid number for age.";
        return;
    }
    

    if(!Number.isInteger(parseFloat(age))) { 
        document.getElementById("ageOutput").textContent = "⚠️ Age must be a whole number.";
        return;
    }
    

    age = parseInt(age); 
    
    if(age < 1 || age > 120) { 
        document.getElementById("ageOutput").textContent = "⚠️ Please enter a realistic age (1-120 years).";
        return;
    }
    
    if(age < 18) {
        console.log("Below voting age");
    }

    fetch("24-1416Reyesvoting_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "age=" + encodeURIComponent(age)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("ageOutput").textContent = data;
        localStorage.setItem("ageInput", age);
        localStorage.setItem("ageOutput", data);
    })
    .catch(error => {
        document.getElementById("ageOutput").textContent = "❌ Error processing request.";
        console.error("Error:", error);
    });
});


// Restore data from localStorage

window.addEventListener("load", function(){

    // Sample 1
    document.getElementById("letterGradeInput").value =
        localStorage.getItem("letterGradeInput") || "";

    document.getElementById("letterGradeOutput").textContent =
        localStorage.getItem("letterGradeOutput") || "";

    // Sample 2
    document.getElementById("gradeInput").value =
        localStorage.getItem("gradeInput") || "";

    document.getElementById("gradeOutput").textContent =
        localStorage.getItem("gradeOutput") || "";

    // Sample 3
    document.getElementById("numberInput").value =
        localStorage.getItem("numberInput") || "";

    document.getElementById("numberOutput").textContent =
        localStorage.getItem("numberOutput") || "";

    // Sample 4
    document.getElementById("evenOddInput").value =
        localStorage.getItem("evenOddInput") || "";

    document.getElementById("evenOddOutput").textContent =
        localStorage.getItem("evenOddOutput") || "";

    // Sample 5
    document.getElementById("ageInput").value =
        localStorage.getItem("ageInput") || "";

    document.getElementById("ageOutput").textContent =
        localStorage.getItem("ageOutput") || "";

});


//reset buttons

// Sample 1 – Letter Grade
document.getElementById("resetLetterGrade").addEventListener("click", function(){

    document.getElementById("letterGradeInput").value = "";
    document.getElementById("letterGradeOutput").textContent = "";

    localStorage.removeItem("letterGradeInput");
    localStorage.removeItem("letterGradeOutput");

});


// Sample 2 – Pass or Fail
document.getElementById("resetGrade").addEventListener("click", function(){

    document.getElementById("gradeInput").value = "";
    document.getElementById("gradeOutput").textContent = "";

    localStorage.removeItem("gradeInput");
    localStorage.removeItem("gradeOutput");

});


// Sample 3 – Number Classification
document.getElementById("resetNumber").addEventListener("click", function(){

    document.getElementById("numberInput").value = "";
    document.getElementById("numberOutput").textContent = "";

    localStorage.removeItem("numberInput");
    localStorage.removeItem("numberOutput");

});


// Sample 4 – Even or Odd
document.getElementById("resetEvenOdd").addEventListener("click", function(){

    document.getElementById("evenOddInput").value = "";
    document.getElementById("evenOddOutput").textContent = "";

    localStorage.removeItem("evenOddInput");
    localStorage.removeItem("evenOddOutput");

});


// Sample 5 – Voting Qualification
document.getElementById("resetAge").addEventListener("click", function(){

    document.getElementById("ageInput").value = "";
    document.getElementById("ageOutput").textContent = "";

    localStorage.removeItem("ageInput");
    localStorage.removeItem("ageOutput");

});


document.addEventListener("DOMContentLoaded", function () {

    let navItems = document.querySelectorAll(".nav-item");

    if (navItems.length > 0) {

        navItems.forEach(function (item) {

            item.addEventListener("click", function () {

                // CLEAR ALL LOCAL STORAGE
                localStorage.clear();

            });

        });

    }

});