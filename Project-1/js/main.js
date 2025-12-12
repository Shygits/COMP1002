document.addEventListener("DOMContentLoaded", function (){
const feedbackForm = document.getElementById("feedback-form")
if (feedbackForm) {
    feedbackForm.addEventListener("submit", function (e) {
e.preventDefault();
alert("Thank you for your feedback!");
feedbackForm.reset();
});
}

const supportForm = document.getElementById("support-form");
if (supportForm){
    supportForm.addEventListener("submit", function (e) {
    e.preventDefault();
    alert("Your message has been sent. We will get back to you as soon as possible");
    supportForm.reset();    
    });
}
});
