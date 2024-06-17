function enableEdit() {
    // Get all form inputs
    var inputs = document.getElementsByclass("update");
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].removeAttribute("enable");
    }
    // Optionally, you can enable other form elements like textareas, selects, etc. here
}