
window.addEventListener('load', init);

function init(){

    let addBtn = document.getElementById("add");
    addBtn.addEventListener('click', showAdd);

    let editBtn = document.getElementById("edit");
    editBtn.addEventListener('click', showEdit);

}

function showAdd(){
    let addElm = document.getElementById("add-form");
    addElm.classList.remove("hidden");

    let editElm = document.getElementById("edit-form");
    editElm.classList.add("hidden");
}

function showEdit(){
    let editElm = document.getElementById("edit-form");
    editElm.classList.remove("hidden");

    let addElm = document.getElementById("add-form");
    addElm.classList.add("hidden");
}