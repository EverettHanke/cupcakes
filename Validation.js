let submitButton = document.getElementById('submitBtn');

submitButton.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default form submission behavior
    let errors = 0;
    errors = validateName() + validateSelection(); // Assign the result of validateName directly to errors
    //alert("error num: " + errors);
    if (errors === 0) {
        //alert("Submit success!")
        document.forms["cupcake-order"].submit();
    }
});

function validateName() {
    let name = document.getElementById("username").value;
    //var regName = /^[a-zA-Z]+$/;
    var regFullName = /^[a-zA-Z]+ [a-zA-Z]+$/;


    if (!regFullName.test(name))
    {
        alert("Invalid name. Be sure to enter first and last name");
        return 1;
    } else {
        //alert("valid name")
        return 0;
    }
}
function validateSelection()
{
    let cupcakes = document.querySelectorAll('input[type="checkbox"]');
    let checked = false;
    cupcakes.forEach(function (checkbox)
    {
        if (checkbox.checked)
        {
            checked = true;
        }
    });
    if (!checked)
    {
        alert("Please select a cupcake");
        return 1;
    }
    else
    {
        return 0;
    }
}