/* =========================
   SAMPLE 1 - REVERSE
========================= */

document.getElementById("reverseForm").addEventListener("submit", function(e) {

    e.preventDefault();

    let text = document.getElementById("reverseInput").value;

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

        // SAVE to localStorage
        localStorage.setItem("reverseInput", text);
        localStorage.setItem("reverseOutput", data);

    });

});


/* =========================
   SAMPLE 2 - GREETING
========================= */

document.getElementById("greetForm").addEventListener("submit", function(e) {

    e.preventDefault();

    let name = document.getElementById("nameInput").value;

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

        // SAVE to localStorage
        localStorage.setItem("nameInput", name);
        localStorage.setItem("greetOutput", data);

    });

});


/* =========================
   SAMPLE 3 - SUM
========================= */

document.getElementById("sumForm").addEventListener("submit", function(e){

    e.preventDefault();

    let num1 = document.getElementById("num1Input").value;
    let num2 = document.getElementById("num2Input").value;

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

        // SAVE to localStorage
        localStorage.setItem("num1Input", num1);
        localStorage.setItem("num2Input", num2);
        localStorage.setItem("sumOutput", data);

    });

});

/* =========================
   SAMPLE 4 - BMI
========================= */

document.getElementById("bmiForm").addEventListener("submit", function(e){

    e.preventDefault();

    let weight = document.getElementById("weightInput").value;
    let height = document.getElementById("heightInput").value;

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

        // Save to localStorage
        localStorage.setItem("weightInput", weight);
        localStorage.setItem("heightInput", height);
        localStorage.setItem("bmiOutput", data);

    });

});

/* =========================
   RESTORE DATA ON RELOAD
========================= */

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

});


/* =========================
   AUTO CLEAR WHEN LEAVING PAGE
========================= */

