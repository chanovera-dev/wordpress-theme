// // Get the select element
// var select = document.getElementById("pa_talla");

// // Create a div to hold the radio inputs
// var radioDiv = document.createElement("div");

// radioDiv.setAttribute("id", "container-talla");

// // Loop through the options of the select element
// for (var i = 0; i < select.options.length; i++) {
//   // Get the current option
//   var option = select.options[i];

//   // Create a label element
//   var label = document.createElement("label");

//   // Create a radio input element
//   var radio = document.createElement("input");
//   radio.type = "radio";
//   radio.name = "size";
//   radio.value = option.value;
//   radio.className = "item_size";
//   // Add a data-index attribute to store the index of the option
//   radio.setAttribute("data-index", i);

//   // Check the first option by default
//   if (i == 0) {
//     radio.checked = true;
//     label.className = "checked";
//     // Set the selected index of the select element to match the checked radio input
//     select.selectedIndex = i;
//   }

//   // Add a change event listener to the radio input
//   radio.addEventListener("change", function() {
//     // Get all the labels in the radio div
//     var labels = radioDiv.getElementsByTagName("label");

//     // Loop through the labels and remove the checked class
//     for (var j = 0; j < labels.length; j++) {
//       labels[j].className = "";
//     }

//     // Add the checked class to the parent label of the checked radio input
//     this.parentNode.className = "checked";

//     // Set the selected index of the select element to match the checked radio input
//     // Use the data-index attribute instead of the value
//     select.selectedIndex = this.getAttribute("data-index");
//   });

//   // Append the radio input to the label element
//   label.appendChild(radio);

//   // Append the option text to the label element
//   label.appendChild(document.createTextNode(option.text));

//   // Append the label element to the radio div
//   radioDiv.appendChild(label);
// }

// // Hide the original select element
// select.style.display = "none";

// // Insert the radio div before the select element
// select.parentNode.insertBefore(radioDiv, select);

// // Delete the first label in the radio div
// radioDiv.removeChild(radioDiv.firstChild);

// // Get the submit button
// var submit = document.querySelector(".item_add");

// // Add a click event listener to the submit button
// submit.addEventListener("click", function(e) {
//   // Prevent the default action of submitting the form
//   e.preventDefault();

//   // Get all the radio inputs in the radio div
//   var radios = radioDiv.getElementsByTagName("input");

//   // Initialize a variable to store whether any radio input is checked or not
//   var checked = false;

//   // Loop through the radio inputs and check if any of them is checked
//   for (var k = 0; k < radios.length; k++) {
//     if (radios[k].checked) {
//       checked = true;
//       break;
//     }
//   }

//   // If none of them is checked, show an alert message and return
//   if (!checked) {
//     alert("Please choose a size.");
//     return;
//   }

//   // Otherwise, submit the form normally
//   this.form.submit();
// });

// Get the select element
var select = document.getElementById("pa_talla");

// Create a div to hold the radio inputs
var radioDiv = document.createElement("div");

radioDiv.setAttribute("id", "container-talla");

// Loop through the options of the select element
for (var i = 0; i < select.options.length; i++) {
  // Get the current option
  var option = select.options[i];

  // Create a label element
  var label = document.createElement("label");

  // Create a radio input element
  var radio = document.createElement("input");
  radio.type = "radio";
  radio.name = "size";
  radio.value = option.value;
  radio.className = "item_size";
  // Add a data-index attribute to store the index of the option
  radio.setAttribute("data-index", i);

  // Check the first option by default
  if (i == 0) {
    radio.checked = true;
    label.className = "checked";
    // Set the selected index of the select element to match the checked radio input
    select.selectedIndex = i;
  }

  // Add a change event listener to the radio input
  radio.addEventListener("change", function() {
    // Get all the labels in the radio div
    var labels = radioDiv.getElementsByTagName("label");

    // Loop through the labels and remove the checked class
    for (var j = 0; j < labels.length; j++) {
      labels[j].className = "";
    }

    // Add the checked class to the parent label of the checked radio input
    this.parentNode.className = "checked";

    // Set the selected index of the select element to match the checked radio input
    // Use the data-index attribute instead of the value
    select.selectedIndex = this.getAttribute("data-index");
  });

  // Append the radio input to the label element
  label.appendChild(radio);

  // Append the option text to the label element
  label.appendChild(document.createTextNode(option.text));

  // Append the label element to the radio div
  radioDiv.appendChild(label);
}

// Hide the original select element
select.style.display = "none";

// Insert the radio div before the select element
select.parentNode.insertBefore(radioDiv, select);

// Delete the first label in the radio div
radioDiv.removeChild(radioDiv.firstChild);

// Get the submit button
var submit = document.querySelector(".item_add");

// Add a click event listener to the submit button
submit.addEventListener("click", function(e) {
  // Prevent the default action of submitting the form
  e.preventDefault();

  // Get all the radio inputs in the radio div
  var radios = radioDiv.getElementsByTagName("input");

  // Initialize a variable to store whether any radio input is checked or not
  var checked = false;

  // Loop through the radio inputs and check if any of them is checked
  for (var k = 0; k < radios.length; k++) {
    if (radios[k].checked) {
      checked = true;
      break;
    }
  }

  // If none of them is checked, show an alert message and return
  if (!checked) {
    alert("Please choose a size.");
    return;
  }

  // Otherwise, submit the form normally
  this.form.submit();
});