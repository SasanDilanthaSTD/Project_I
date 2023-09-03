function ContactUsMail() {
    console.log("work");
    var params = {
        from_name: document.getElementById("name-1").value,
        email_id: document.getElementById("email-1").value,
        message: document.getElementById("message-1").value
    }
    emailjs.send("service_hahniw8", "template_ygxlz0j", params).then(function (res) {
            if (res.status === 200) {
                var successMessage = document.getElementById("success-message");
                successMessage.innerHTML = "Email sent successfully!";
            }
        }
    )
}