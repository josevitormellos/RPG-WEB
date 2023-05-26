function StatusInimigo(sorte) {
    const nome = document.getElementById("enemyNome");
    const imagem = document.getElementById("pele");
    const lifebar = document.getElementById("enemyL");
    lifebar.innerHTML = `<button disabled id="lifeE">????/????</button>`;
    lifebar.style.border = `2px solid #193d11`;


    const vida = document.getElementById("lifeE");
    fetch("../../json/enemy.json").then((response) => {
        response.json().then((dados) => {
            console.log(dados.inimigos[sorte].local);
            nome.innerHTML = dados.inimigos[sorte].nome;
            imagem.setAttribute('src', "../../src/inimigo/" + dados.inimigos[sorte].local);
            vida.innerHTML = dados.inimigos[sorte].vida + " / " + dados.inimigos[sorte].vida + " 100%";
        })
    })

}

function TrocarInimigo() {
    let sorte = parseInt(Math.random() * 3 ); 
    StatusInimigo(sorte);
}

function SelectionEnemy() {
    const nome = document.getElementById("enemyNome");
    nome.style.color = 'red';
}

