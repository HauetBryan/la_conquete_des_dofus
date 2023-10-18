if(openModalBtn == undefined) {
    const openModalBtn = document.getElementsByClassName("open-modal-btn");
}
const closeBtn = document.getElementsByClassName("close-btn");

const modalContainer = document.getElementById("modal-container");

for(let omb of openModalBtn){
    omb.addEventListener("click", function (e) {
        modalContainer.style.display = "flex";
        if(e.target.classList.contains('imageSquare')) {
            let img = e.target.style.backgroundImage;
            img = img.substring(11,img.length - 2);
            document.querySelector('.modal-content').innerHTML = '<img class="modal-img" src="' + img + '">'
        }
    });
}


for (let btn of closeBtn) {
    btn.addEventListener("click", function () {
        modalContainer.style.display = "none";
    });
}
 

