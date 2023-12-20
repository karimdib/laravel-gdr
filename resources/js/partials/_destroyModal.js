const modal = document.getElementById("confirm-modal");
const destroyBtn = document.getElementById("btn-destroy");
const cancelBtn = document.getElementById("btn-cancel");
const charName = document.getElementById("character-name");

modal.style.display = "none";

const deletionForm = document.querySelectorAll("#deletionForm");
const deletionBtn = document.querySelectorAll("#deletion");
let currentForm;

deletionBtn.forEach((element, id) => {
    element.addEventListener("click", (e) => {
        e.preventDefault();
        currentForm = id;
        modal.style.display = "flex";
        document.body.style.overflow = "hidden";
        charName.innerHTML = element.name;
    });
});

destroyBtn.addEventListener("click", (e) => {
    deletionForm[currentForm].submit();
});

cancelBtn.addEventListener("click", (e) => {
    modal.style.display = "none";
    document.body.style.overflow = "auto";
});
