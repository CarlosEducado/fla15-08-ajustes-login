<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="src/css/home.css">


    <title>Nação - Home</title>
</head>

<body>
    <header>
        <div class="logo-mobile">
            <a href="#"><img src="src/img/logo-crf.png" alt="Logo CRF" class="logo-mobile"></a>
        </div>
        <div class="titulo">
            <a href="#">
                <h1>Feed do Urubu</h1>
            </a>
        </div>

        <div class="menu-desktop">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="comentarios.php?pagina=1">Comentarios</a> </li>
                    </ul>
                </nav>
            </div>
            <div id="dropdow-menu" class="dropdown-menu">
                <?php
                echo '<a style=color:#fff href="?logout=true" id="logout-button">Sair</a>';
                ?>
            </div>
            <div class="icone-perfil" id="icone-perfil">
                <i class="bi bi-person-circle"></i>
            </div>
        </div>
    </header>

    <main>
        <div class="menu-main">
            <nav>
                <ul>
                    <li>
                        <button id="historia">Historia</button>
                    </li>

                    <li>
                        <button id="titulos">Titulos</button>
                    </li>

                    <li>
                        <button>Historia</button>
                    </li>

                    <li>
                        <button>Historia</button>
                    </li>

                    <li>
                        <button>Historia</button>
                    </li>
                </ul>
            </nav>
        </div>

        <section id="historiaClube" class="section">
            <h1>A Origem</h1>

            <p>
                No final do século XIX, o remo era popular no Rio de Janeiro, enquanto o futebol começava a ganhar espaço. Jovens do Flamengo formaram um grupo para competir em remo e compraram um barco chamado "Pherusa". Em 6 de outubro de 1895, enfrentaram um vento forte que virou o barco. Joaquim Bahia nadou até a praia para buscar ajuda, e, após serem resgatados pelo barco "Leal", a Pherusa foi reformada novamente, mas acabou sendo roubada.
            </p>

            <div class="imagens">
                <img class="remo" src="https://estanterubronegra.com.br/wp-content/uploads/2020/11/remo_do_flamengo.jpeg" alt="Time de Remo do Flamengo no inicio.">
                <p>Time de Remo do Flamengo no inicio.</p>
            </div>

            <h1>Fundação do Clube</h1>

            <p>
                Em 17 de novembro de 1895, Nestor de Barros e outros fundaram o Grupo de Regatas do Flamengo na casa de Barros, na Praia do Flamengo. O barco "Scyra" foi a principal atração da reunião, onde foram eleitos a primeira diretoria e definidos os sócios-fundadores. A data oficial da fundação foi estabelecida para 15 de novembro. As cores iniciais do clube eram azul e ouro, mas mudaram para vermelho e preto em 1898.
            </p>

            <div class="imagens">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/1896_-_Flamengo.jpg/220px-1896_-_Flamengo.jpg" alt="Integrantes da equipe de remo do Flamengo em 1896.">
                <p>Integrantes da equipe de remo do Flamengo em 1896.</p>
            </div>

            <h1>Crescimento e Futebol</h1>

            <p>
                O Flamengo começou a se destacar nas competições, conquistando sua primeira vitória na I Regata do Campeonato Náutico do Brasil em 1898. Em 1902, o clube foi rebatizado como Clube de Regatas do Flamengo. Em 25 de outubro de 1903, antes da criação oficial do departamento de futebol, os remadores do Flamengo participaram de um amistoso contra o Botafogo, marcando o início da sua incursão no futebol.
            </p>

            <div class="imagens">
                <img src="https://images.flamengo.com.br/public/images/artigos/bodies/1524168175.jpg" alt="Flamengo na decada de 1910.">
                <p>Flamengo na decada de 1910.</p>
            </div>
        </section>

        <section id="titulosClube" class="section">
            <h1>teste</h1>
        </section>

        <!-- <section>
            <h1>Em construção 🏗️🚧 </h1>
        </section> -->
    </main>
    <script defer>
        // Menu do main

        let historia = document.getElementById('historia');
        let titulos = document.getElementById('titulos');

        let historiaClube = document.getElementById('historiaClube');
        let titulosClube = document.getElementById('titulosClube');


        // Adiciona evento de clique ao botão 'historia'
        historia.addEventListener('click', () => {
            // Oculta todas as seções
            historiaClube.style.display = 'block';
            titulosClube.style.display = 'none';

            // Atualiza a aparência dos botões
            historia.classList.add('active-button');
            titulos.classList.remove('active-button');
        });

        // Adiciona evento de clique ao botão 'titulos'
        titulos.addEventListener('click', () => {
            // Oculta todas as seções
            historiaClube.style.display = 'none';
            titulosClube.style.display = 'block';

            // Atualiza a aparência dos botões
            titulos.classList.add('active-button');
            historia.classList.remove('active-button');
        });


        let iconePerfil = document.getElementById('icone-perfil');
        let dropdownMenu = document.getElementById('dropdow-menu');

        iconePerfil.addEventListener('click', (event) => {
            // Previne que o clique no ícone feche o menu imediatamente
            event.stopPropagation();
            // Alterna a visibilidade do menu
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', (event) => {
            // Verifica se o clique foi fora do ícone e do menu
            if (!iconePerfil.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.style.display = 'none'; // Oculta o menu
            }
        });
    </script>
</body>

</html>