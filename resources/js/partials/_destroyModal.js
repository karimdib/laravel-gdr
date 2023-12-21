// Get modal DOM elements
const modal = document.getElementById("confirm-modal");
const destroyBtn = document.getElementById("btn-destroy");
const cancelBtn = document.getElementById("btn-cancel");
const charName = document.getElementById("character-name");

//  Set modal display to none
modal.style.display = "none";

// Get form and button nodelists
const deletionForm = document.querySelectorAll("#deletionForm");
const deletionBtn = document.querySelectorAll("#deletion");

// Declare currentForm index variable
let currentForm;

//  Add event listener to each delete button
deletionBtn.forEach((element, id) => {
    element.addEventListener("click", (e) => {
        // Prevent default submit behaviour
        e.preventDefault();

        // Set currentform to current index
        currentForm = id;

        // Show form, lock scrolling and print character name
        modal.style.display = "flex";
        document.body.style.overflow = "hidden";
        charName.innerHTML = element.name;
    });
});

// Modal confirm button, triggers form submit on click
destroyBtn.addEventListener("click", (e) => {
    deletionForm[currentForm].submit();
});

// Modal cancel button, hides modal and unlocks scrolling
cancelBtn.addEventListener("click", (e) => {
    modal.style.display = "none";
    document.body.style.overflow = "auto";
});
