function SendMail()
{
    var params = {
        from_name: document.getElementById("fullname").value,
        email_id: document.getElementById("email_id").value,
        message: document.getElementById("message").value
    }
    emailjs.send("service_hahniw8", "template_cwfgfb4", params).then(function(res)
    {
        alert("Success!" + res.status);
    }
)
}