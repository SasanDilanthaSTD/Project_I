document.addEventListener("DOMContentLoaded", function () {
    const modal = new mdb.Modal(document.getElementById("stress_1"));
    modal.show();
    const nextButton = document.getElementById("btnNext");
    const radioButtons = document.querySelectorAll(".btn-check");

    // Function to enable or disable the Next button
    function updateNextButtonState() {
        nextButton.style.display = "block"; // Show the button
        nextButton.disabled = !document.querySelector('input[name="options"]:checked');
    }

    // Attach change event to radio buttons
    radioButtons.forEach(radio => {
        radio.addEventListener("change", () => {
            updateNextButtonState();
        });
    });

    // Initialize button state
    updateNextButtonState();
});


