alert("Welcome to Ticket Page");

function showMessage()
{
    alert("Your form has been submitted..");
}

function submitForm()
{
    var name  = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var idnum  = document.getElementById('idnum').value;
    var faculty = document.getElementById('faculty').value;
    var center  = document.getElementById('center').value;
    var inquiry = document.getElementById('inquiry').value;
    var subject  = document.getElementById('subject').value;
    var message = document.getElementById('message').value;
} 


document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('ticketform');
    const submit = document.getElementById('submit');
    const reset = document.getElementById('reset');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
            let Name = document.getElementById('name').value;
            let Email = document.getElementById('email').value;
            let ID = document.getElementById('idnum').value;
            let Faculty = document.getElementById('faculty').value;
            let Center = document.getElementById('center').value;
            let Inquiry = document.getElementById('inquiry').value;
            let Subject = document.getElementById('subject').value;
            let Message = document.getElementById('message').value;

            if (Name.trim() == '' || Email.trim() == '' || ID.trim() == '' || Faculty.trim() == '' || Center.trim() == '' || Inquiry.trim() == '' || Subject.trim() == '' || Message.trim() == '') {
                alert('You must fill all the fields to submit the form');
                return;
            }
            else
            alert('You have successfully submitted the form');
        
    });

    reset.addEventListener('click', function() {
        alert('Your form has been Updated!');
        form.reset();
    });

});
function clickUpdate()
{
    alert("Now you can update the form..");
}
function DeleteForm()
{
    alert("Your form has been deleted");
}
