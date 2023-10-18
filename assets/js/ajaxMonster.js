const openModalBtn = document.getElementsByClassName("open-modal-btn");
for (let omb of openModalBtn) {
    omb.addEventListener("click", function (e) {
        document.querySelector('.statBody').innerHTML = '';
console.log(e.target);
        let idMonsters = e.target.getAttribute('idmonster');
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let data = JSON.parse(this.responseText);
                console.log(data)
                for (let d of data) {
                    let pattern = `<tr>
                        <td><img width="30" height="30" src="${d.elementImg}"></td>
                        <td>${d.pourcentagemin}</td>
                        <td>${d.pourcentagemax}</td>
                    </tr>`
                    document.querySelector('.statBody').innerHTML += pattern;
                }
            }
        };
        xmlhttp.open("GET", "controllers/bestiaire/ajaxMonsterController.php?id=" + idMonsters, true);
        xmlhttp.send();

    });
}
