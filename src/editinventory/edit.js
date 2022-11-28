
window.addEventListener('load', init);

function init(){

    let addBtn = document.getElementById("add");
    addBtn.addEventListener('click', showAdd);

    let editBtn = document.getElementById("edit");
    editBtn.addEventListener('click', showEdit);

}

function showAdd(){
    let addElm = document.getElementById("input-form");
    addElm.classList.remove("hidden");
}