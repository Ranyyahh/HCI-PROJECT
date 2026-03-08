// Letter Grade Remarks

document.getElementById("letterGradeForm").addEventListener("submit", function(e){

    e.preventDefault();

    let grade = document.getElementById("letterGradeInput").value;

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

    });

});

// Pass or Fail

document.getElementById("gradeForm").addEventListener("submit", function(e){

    e.preventDefault();

    let grade = document.getElementById("gradeInput").value;

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

    });

});

// Number Classification

document.getElementById("numberForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("numberInput").value;

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

    });

});

// Even or Odd Checker

document.getElementById("evenOddForm").addEventListener("submit", function(e){

    e.preventDefault();

    let number = document.getElementById("evenOddInput").value;

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

    let age = document.getElementById("ageInput").value;

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

    });

});

// Voting Qualification Checker

document.getElementById("ageForm").addEventListener("submit", function(e){

    e.preventDefault();

    let age = document.getElementById("ageInput").value;

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