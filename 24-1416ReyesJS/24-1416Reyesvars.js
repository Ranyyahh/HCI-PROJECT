//Sample 1
document.getElementById("stringForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let name = document.getElementById("stringInput").value.trim();

    if(name === "") {
        document.getElementById("stringOutput").innerHTML = "⚠️ Please enter your name.";
        return;
    }

    fetch("24-1416Reyesstring_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "userName=" + encodeURIComponent(name)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("stringOutput").innerHTML = data;
        localStorage.setItem("stringInput", name);
        localStorage.setItem("stringOutput", data);
    })
    .catch(error => {
        document.getElementById("stringOutput").innerHTML = "❌ Error processing request.";
        console.error("Error:", error);
    });
});

//age calcu
document.getElementById("integerForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let year = document.getElementById("birthYearInput").value.trim();

    if(year === "") {
        document.getElementById("integerOutput").innerHTML = "⚠️ Please enter your birth year.";
        return;
    }

    let currentYear = new Date().getFullYear();
    if(year < 1900 || year > currentYear) {
        document.getElementById("integerOutput").innerHTML = "⚠️ Please enter a valid birth year (1900-" + currentYear + ").";
        return;
    }

    fetch("24-1416Reyesinteger_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "birthYear=" + encodeURIComponent(year)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("integerOutput").innerHTML = data;
        localStorage.setItem("birthYearInput", year);
        localStorage.setItem("integerOutput", data);
    })
    .catch(error => {
        document.getElementById("integerOutput").innerHTML = "❌ Error processing request.";
        console.error("Error:", error);
    });
});


//grade average
document.getElementById("floatForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let grade1 = document.getElementById("grade1Input").value.trim();
    let grade2 = document.getElementById("grade2Input").value.trim();
    let grade3 = document.getElementById("grade3Input").value.trim();

    if(grade1 === "" || grade2 === "" || grade3 === "") {
        document.getElementById("floatOutput").innerHTML = "⚠️ Please enter all three grades.";
        return;
    }

    if(grade1 < 0 || grade1 > 100 || grade2 < 0 || grade2 > 100 || grade3 < 0 || grade3 > 100) {
        document.getElementById("floatOutput").innerHTML = "⚠️ Grades must be between 0 and 100.";
        return;
    }

    fetch("24-1416Reyesfloat_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "grade1=" + encodeURIComponent(grade1) +
              "&grade2=" + encodeURIComponent(grade2) +
              "&grade3=" + encodeURIComponent(grade3)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("floatOutput").innerHTML = data;
        localStorage.setItem("grade1Input", grade1);
        localStorage.setItem("grade2Input", grade2);
        localStorage.setItem("grade3Input", grade3);
        localStorage.setItem("floatOutput", data);
    })
    .catch(error => {
        document.getElementById("floatOutput").innerHTML = "❌ Error processing request.";
        console.error("Error:", error);
    });
});


//password check
document.getElementById("booleanForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let password = document.getElementById("passwordInput").value;

    if(password === "") {
        document.getElementById("booleanOutput").innerHTML = "⚠️ Please enter a password.";
        return;
    }

    fetch("24-1416Reyesboolean_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "password=" + encodeURIComponent(password)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("booleanOutput").innerHTML = data;
        localStorage.setItem("passwordInput", password);
        localStorage.setItem("booleanOutput", data);
    })
    .catch(error => {
        document.getElementById("booleanOutput").innerHTML = "❌ Error processing request.";
        console.error("Error:", error);
    });
});

//student information
document.getElementById("multiTypeForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let name = document.getElementById("studentNameInput").value.trim();
    let age = document.getElementById("studentAgeInput").value.trim();

    if(name === "" || age === "") {
        document.getElementById("multiTypeOutput").innerHTML = "⚠️ Please enter both name and age.";
        return;
    }

    let nameRegex = /^[A-Za-z\s]+$/;
    if(!nameRegex.test(name)) {
        document.getElementById("multiTypeOutput").innerHTML = "⚠️ Please enter a valid name (letters and spaces only).";
        return;
    }
    

    if(name.length < 2) {
        document.getElementById("multiTypeOutput").innerHTML = "⚠️ Name must be at least 2 characters.";
        return;
    }
    
    if(name.length > 50) {
        document.getElementById("multiTypeOutput").innerHTML = "⚠️ Name is too long (maximum 50 characters).";
        return;
    }

    if(age < 1 || age > 120) {
        document.getElementById("multiTypeOutput").innerHTML = "⚠️ Please enter a valid age (1-120).";
        return;
    }

    fetch("24-1416Reyesmultitype_process.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "studentName=" + encodeURIComponent(name) +
              "&studentAge=" + encodeURIComponent(age)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("multiTypeOutput").innerHTML = data;
        localStorage.setItem("studentNameInput", name);
        localStorage.setItem("studentAgeInput", age);
        localStorage.setItem("multiTypeOutput", data);
    })
    .catch(error => {
        document.getElementById("multiTypeOutput").innerHTML = "❌ Error processing request.";
        console.error("Error:", error);
    });
});


//restore data
window.addEventListener("load", function() {
    // Sample 1 - String
    if (localStorage.getItem("stringInput")) {
        document.getElementById("stringInput").value = localStorage.getItem("stringInput");
    }
    if (localStorage.getItem("stringOutput")) {
        document.getElementById("stringOutput").innerHTML = localStorage.getItem("stringOutput");
    }

    // Sample 2 - Integer
    if (localStorage.getItem("birthYearInput")) {
        document.getElementById("birthYearInput").value = localStorage.getItem("birthYearInput");
    }
    if (localStorage.getItem("integerOutput")) {
        document.getElementById("integerOutput").innerHTML = localStorage.getItem("integerOutput");
    }

    // Sample 3 - Float
    if (localStorage.getItem("grade1Input")) {
        document.getElementById("grade1Input").value = localStorage.getItem("grade1Input");
    }
    if (localStorage.getItem("grade2Input")) {
        document.getElementById("grade2Input").value = localStorage.getItem("grade2Input");
    }
    if (localStorage.getItem("grade3Input")) {
        document.getElementById("grade3Input").value = localStorage.getItem("grade3Input");
    }
    if (localStorage.getItem("floatOutput")) {
        document.getElementById("floatOutput").innerHTML = localStorage.getItem("floatOutput");
    }

    // Sample 4 - Boolean
    if (localStorage.getItem("passwordInput")) {
        document.getElementById("passwordInput").value = localStorage.getItem("passwordInput");
    }
    if (localStorage.getItem("booleanOutput")) {
        document.getElementById("booleanOutput").innerHTML = localStorage.getItem("booleanOutput");
    }

    // Sample 5 - Multiple Types (UPDATED)
    if (localStorage.getItem("studentNameInput")) {
        document.getElementById("studentNameInput").value = localStorage.getItem("studentNameInput");
    }
    if (localStorage.getItem("studentAgeInput")) {
        document.getElementById("studentAgeInput").value = localStorage.getItem("studentAgeInput");
    }
    if (localStorage.getItem("multiTypeOutput")) {
        document.getElementById("multiTypeOutput").innerHTML = localStorage.getItem("multiTypeOutput");
    }
});


//reset buttons

// Reset Sample 1 - String
document.getElementById("resetString").addEventListener("click", function() {
    document.getElementById("stringInput").value = "";
    document.getElementById("stringOutput").innerHTML = "";
    localStorage.removeItem("stringInput");
    localStorage.removeItem("stringOutput");
});

// Reset Sample 2 - Integer
document.getElementById("resetInteger").addEventListener("click", function() {
    document.getElementById("birthYearInput").value = "";
    document.getElementById("integerOutput").innerHTML = "";
    localStorage.removeItem("birthYearInput");
    localStorage.removeItem("integerOutput");
});

// Reset Sample 3 - Float
document.getElementById("resetFloat").addEventListener("click", function() {
    document.getElementById("grade1Input").value = "";
    document.getElementById("grade2Input").value = "";
    document.getElementById("grade3Input").value = "";
    document.getElementById("floatOutput").innerHTML = "";
    localStorage.removeItem("grade1Input");
    localStorage.removeItem("grade2Input");
    localStorage.removeItem("grade3Input");
    localStorage.removeItem("floatOutput");
});

// Reset Sample 4 - Boolean
document.getElementById("resetBoolean").addEventListener("click", function() {
    document.getElementById("passwordInput").value = "";
    document.getElementById("booleanOutput").innerHTML = "";
    localStorage.removeItem("passwordInput");
    localStorage.removeItem("booleanOutput");
});

// Reset Sample 5 - Multiple Types (UPDATED)
document.getElementById("resetMultiType").addEventListener("click", function() {
    document.getElementById("studentNameInput").value = "";
    document.getElementById("studentAgeInput").value = "";
    document.getElementById("multiTypeOutput").innerHTML = "";
    localStorage.removeItem("studentNameInput");
    localStorage.removeItem("studentAgeInput");
    localStorage.removeItem("multiTypeOutput");
});



document.addEventListener("DOMContentLoaded", function () {
    
    let navItems = document.querySelectorAll(".nav-item");
    
    navItems.forEach(function (item) {
        
        item.addEventListener("click", function (e) {
            
            let href = this.getAttribute("href");
            
            if (href && href !== "#" && !this.classList.contains('active')) {
                
        
                e.preventDefault();
                
                // Clear all localStorage
                localStorage.clear();
                
                console.log("✅ LocalStorage cleared! Navigating to: " + href);
                

                window.location.href = href;
            }
      
            else if (this.classList.contains('active')) {
                e.preventDefault();
                console.log("📍 Already on current page");
            }
            
        });
        
    });
    
});


//input validation

// Sample 2 - Birth Year validation
document.getElementById("birthYearInput").addEventListener("blur", function() {
    let year = this.value;
    let currentYear = new Date().getFullYear();
    if (year && (year < 1900 || year > currentYear)) {
        alert("⚠️ Please enter a valid birth year (1900-" + currentYear + ")");
        this.value = "";
    }
});

// Sample 3 - Grade validation
document.getElementById("grade1Input").addEventListener("blur", validateGrade);
document.getElementById("grade2Input").addEventListener("blur", validateGrade);
document.getElementById("grade3Input").addEventListener("blur", validateGrade);

function validateGrade() {
    let grade = this.value;
    if (grade && (grade < 0 || grade > 100)) {
        alert("⚠️ Grade must be between 0 and 100");
        this.value = "";
    }
}

// Sample 5 - Age and Grade validation
document.getElementById("studentAgeInput").addEventListener("blur", function() {
    let age = this.value;
    if (age && (age < 1 || age > 120)) {
        alert("⚠️ Please enter a valid age (1-120)");
        this.value = "";
    }
});

document.getElementById("studentGradeInput").addEventListener("blur", function() {
    let grade = this.value;
    if (grade && (grade < 0 || grade > 100)) {
        alert("⚠️ Grade must be between 0 and 100");
        this.value = "";
    }
});