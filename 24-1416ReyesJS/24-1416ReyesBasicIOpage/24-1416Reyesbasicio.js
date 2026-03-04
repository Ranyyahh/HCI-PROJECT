document.addEventListener("DOMContentLoaded", function () {

    const forms = document.querySelectorAll(".sample-left form");
    const headerHeight = 500; 

    forms.forEach(function(form) {

        form.addEventListener("submit", function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const sampleBox = this.closest(".sample-box");
            const outputElement = sampleBox.querySelector(".output");

            fetch(window.location.href, {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {

                const parser = new DOMParser();
                const doc = parser.parseFromString(data, "text/html");

                const updatedSample = doc.getElementById(sampleBox.id);

if (updatedSample) {
    const newOutput = updatedSample.querySelector(".output").innerHTML;
    outputElement.innerHTML = newOutput;
}
                const yOffset = -headerHeight - 20; 
                const y = sampleBox.getBoundingClientRect().top + window.pageYOffset + yOffset;

                window.scrollTo({ top: y, behavior: "smooth" });

            })
            .catch(error => console.error("Error:", error));
        });

    });

});