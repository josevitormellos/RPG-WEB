function StatusClasse(classe) {
    const status = document.getElementById("statusClass");
    status.innerHTML = ``;
    switch (classe) {
        case 1:
            status.innerHTML = `<h2>Arqueiro</h2>
            <p> Habilidade a longa distancia e habilidade consideravel com magia. Dano, velocidade de ataque e critico é seu ponto forte.
            Ponto fraco podemos considerar sua vida e defesa, então tome cuidado com essa classa para não morrer sem perceber. Foque em dano e esquiva
            e logo matara com apenas uma flechada e ira esquivar facilmente do ataque dos inimigos</p>`;
            break;
        case 2:
            status.innerHTML = `<h2>Guerreiro</h2>
            <p> Seu estilo de luta é corpo a corpo, por isso tem uma vida consideravel e um controle magico moderado junto com sua força de ataque.
            É uma classe tanque, suporte e dano. Então dependendo dos equipamentos que usar poderá focar em 1 dessas áreas. Porém por sua alta escalabilidade
            de status, todos os status são moderados, então é sabendo usar você terá a classe perfeita para confronto e dano</p>`;
            break;
        case 3:
            status.innerHTML = `<h2>Mago</h2>
            <p> Extremamento controlado por mana e totalmente focado em dano magico. O mago tem o controle de todos os atributos podendo usar magia de diversos tipos.
            Dependendo do mago ele vai ter um avanço maior em cada atributo. Mais um mago foca seus poderes em atributos base como fogo, agua, vento, terra.
            Ele não chega ser um elementar, mas conhece os elementos e com eles pode criar todo tipo de habilidades. Uma Classe que varia muito, seu estilo de jogo.</p>`;
            break;
         case 4:
            status.innerHTML = `<h2>Assassino</h2>
            <p> São sorrateiros dominam a arte da camuflagem por isso é bem dificil acerta-los porém sua vida é baixa, mas seu dano e seu critico faz com que essa classe
            se torne muito forte. Sua velocidade de ataque as vezes pode ultrapassar arqueiros e lutadores. Habilidades focada em sombra e vento, porém seu poder elemental pode
            variar muito dependendo do heroi assassino que escolher.</p>`;
            break;
         case 5:
            status.innerHTML = `<h2>Atirador</h2>
            <p> O atirador deveria ser mais rapido que o arqueiro mas na verdade é bem mais lento, sua vantagem é o dano aumentado e a chance de critico que ultrapassa classes que focam
            nesta vantagem. Então ele troca velocidade por mais dano e isso o torna uma maquina de matar. Sua vida é baixa então mire com precisão e não erre o tiro, pois pode ser o
            ultimo. Atiradores não são focados em mana, porém podem usar algumas habilidades de aumento de status</p>`;
            break;
         case 6:
            status.innerHTML = `<h2>Necromance</h2>
            <p> Focado restritamente em mana, suas ressucitações de mortos e de si mesmo gastam muita mana, então focar em dano não é uma boa opção. na verdade ele ganha em quantidade.
            quanto mais tropas invocar mais vida e mais barreira tem em sua frente para evitar ataques de inimigos, porém sofrer ataques em área pode ser fatal. Tente sempre variar
            em suas ressucitações por cada morto vivo tem sua especialidade. Foque em magias de cura e resistencia para curar seus mortos vivos que sofre muito com essa desvantagem.</p>`;
            break;
         case 7:
            status.innerHTML = `<h2>Bardo</h2>
            <p> Uma das classe Suportes mais importantes do game, seu foco não é em dano ou regeneração dos aliados mesmo que possivel, seu foco é em aumentar estatisticas.
            O bardo pode fazer você triplicar sua força de combate se unir todos seus encantamentos. Mesmo sendo de classe mais suporte seus ataques, podem ser bem efetivos, causando
            lentidão, confusão ou fazendo com que os inimigos lutem entre si. Então você deve escolher que tipo de bardo deseja ser, um mais ofensivo ou mais suporte. Os dois
            são extremamente poderosos e é um classe rara pode se dizer.</p>`;
            break;
         case 8:
            status.innerHTML = `<h2>Berserker</h2>
            <p> Esqueça magia e mana, aqui o que importar é bater, cortar e dilacerar. Quando mais sangue jogar no campo mais forte fica, seja dele ou dos inimigos. Essa classe
            é perfeita para combate, graças a sua sede de sangue e sua vida elevada, não usam magias, mas pode sacrificar sua vida para criar habilidades de sangue. Focada também
            em passivas de dano, roubo de vida e critico. Sua fraqueza são magias elementais e efeitos negativos, mas isso se conseguir usar um ataque antes que ele te mate.</p>`;
            break;
        default:
            break;

    }
}