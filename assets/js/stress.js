window.onload = function () {
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

    // Variable to store the fetched data
    let questionsData = [];

    // Variable to keep track of the current question index
    let currentQuestionIndex = 0;

    // total score
    let totalScore = 0;

    // Function to load and display a question
    function loadQuestion() {
        if (currentQuestionIndex < questionsData.length) {
            const question = questionsData[currentQuestionIndex]['q'];
            const question_id = questionsData[currentQuestionIndex]['q_id'];
            $("#questions").text(question);
            $("#btnNext").prop("disabled", true); // Disable the next button initially
            $("#btnFinish").hide(); // Hide the Finish button
            currentQuestionIndex++;
        } else {
            // Hide unnecessary elements
            $("#q_body").hide();
            $("#q_note").hide();
            $("#btnNext").hide();
            $("#btnFinish").show();
            $("#success").css('display', "block");
        }
    }

    // Fetch data from the PHP script when the document is ready
    $(document).ready(function () {
        $.ajax({
            url: "php/Code/stress_level.php",
            dataType: "json",
            success: function (data) {
                questionsData = data;
                loadQuestion(); // Load the first question
            },
            error: function () {
                console.error("Error fetching data.");
            }
        });
    });

    // Event listener for the btnNext button
    $("#btnNext").click(function () {
        // Ensure question_id is defined here
        const question_id = questionsData[currentQuestionIndex - 1]['q_id'];

        let mark = $("input[type='radio']:checked").val();
        let int_mark = parseInt(mark);
        if (question_id === "4" || question_id === "5" || question_id === "7" || question_id === "8") {
            if (mark === "0") {
                totalScore += 4;
            } else if (mark === "1") {
                totalScore += 3;
            } else if (mark === "2") {
                totalScore += 2;
            } else if (mark === "3") {
                totalScore += 1;
            } else if (mark === "4") {
                totalScore += 0;
            }
        } else {
            totalScore += int_mark;
        }
        loadQuestion();
        $("input[type='radio']").prop("checked", false); // Clear radio button selection
    });

    // Event listener for the btnFinish button
    $("#btnFinish").click(function () {
        // Display the total score
        //$("#questions").text("Total Score: " + totalScore);
        let url = "pages/stress_report.php?score=" + totalScore;
        $(location).attr('href',url);

    });
}


