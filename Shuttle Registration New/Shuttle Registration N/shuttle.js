document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registrationForm');
    const reset = document.getElementById('reset');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        let firstName = document.getElementById('firstName').value;
        let surName = document.getElementById('surName').value;
        let email = document.getElementById('email').value;

        if (firstName.trim() == '' || surName.trim() == '' || email.trim() == '') {  /* Got reference from google */
            alert('You must fill all the fields to submit the form');
            return;
        }
        else
            alert('You have successfully submitted the form');

    });

    reset.addEventListener('click', function () {
        alert('Your form has been reset!');
        form.reset();
    });

});

document.addEventListener('DOMContentLoaded', function () {   /* Got reference from google */
    var select = document.getElementById('Location');
    select.selectedIndex = -1; // Removes the default selected option
});

document.addEventListener('DOMContentLoaded', function () {   /* Got reference from google */
    var select = document.getElementById('centre');
    select.selectedIndex = -1; // Removes the default selected option
});