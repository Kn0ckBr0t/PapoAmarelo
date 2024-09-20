<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Papo Amarelo</title>
<link href="assets/styles.css" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js" defer></script>
</head>
<body>
    <?php
        require_once('components/header.php');
    ?>
<main>
        <section class="home_align">
          <span class="home_align--span">
            <h1 id="dish-title" class="home_align--text">Virado a paulista</h1>
            <p id="dish-description" class="home_align--paragraph">
                Um clássico da culinária paulista, o Virado à Paulista é um prato rico e saboroso que combina arroz, feijão-tropeiro, couve refogada e um delicioso bife à milanesa. Finalizado com um ovo frito, oferece uma explosão de sabores e texturas que encantam o paladar. Acompanhe com uma porção de banana frita e experimente o verdadeiro gosto de São Paulo!
            </p>
            <div id="dish-buttons">
                <img data-index="0" class="home_align--image dish-button" src="/papoamarelo/assets/images/viradopaulista.png">
                <img data-index="1" class="home_align--image dish-button" src="/papoamarelo/assets/images/feijoada.png">
                <img data-index="2" class="home_align--image dish-button" src="/papoamarelo/assets/images/pizza.png">
            </div>
            </span>
            <figure>
                <img id="dish-image" src="/papoamarelo/assets/images/viradopaulista.png" class="home_image">
            </figure>
        </section>
    </main>
    <section class="cardapio">
        <span class="cardapio--input__align">
            <input class="cardapio--input" type="text" placeholder="Procurar">
            <p class="cardapio--filtrar">Filtrar por <span style="color: #FFC107">▼</span></p>
        </span>
      <div class="cardapio--carousel">
            <div class="carousel">
                <div class="carousel-item active">
                    <img class="carousel-image" src="/papoamarelo/assets/images/carousel1.png" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img class="carousel-image" src="/papoamarelo/assets/images/carousel2.png" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img class="carousel-image" src="/papoamarelo/assets/images/carousel3.png" alt="Image 3">
                </div>
            </div>
            <div class="controls">
                <button class="carousel-button prev">❮</button>
                <button class="carousel-button next">❯</button>
            </div>
        </div>
        <span class="cardapio--card__align">
            <div class="cardapio--card">
                <img class="cardapio--card__image" src="/papoamarelo/assets/images/promocao1.png">
                <p class="cardapio--paragraph__card">Garantir o novo molho Cajun</p>
            </div>
            <div class="cardapio--card">
                <img class="cardapio--card__image" src="/papoamarelo/assets/images/promocao2.png">
              <p class="cardapio--paragraph__card">Experimente a calda caramelo</p>
            </div>
            <div class="cardapio--card">
                <img class="cardapio--card__image" src="/papoamarelo/assets/images/promo3.png">
              <p class="cardapio--paragraph__card">O novo brabo ClubHouse Onion Rings.</p>
            </div>
            <div class="cardapio--card">
                <img class="cardapio--card__image" src="/papoamarelo/assets/images/promo4.png">
              <p class="cardapio--paragraph__card">O melhor Choco&Cream</p>
            </div>
        </span>
    </section>
    <section class="aboutus">
        <span class="home_align--span">
            <h1 class="home_align--text">Quem somos?</h1>
            <p id="dish-description" class="aboutus_align--paragraph">
                Bem-vindo ao Papo Amarelo! Nós somos a Turma A 3 Info, um grupo apaixonado por proporcionar as melhores experiências para nossos clientes. Acreditamos que cada interação deve ser única e saborosa, e estamos aqui para garantir que você tenha tudo o que precisa para satisfazer sua fome, seja ela de conhecimento, de sabor ou de boas conversas.

                Com um espírito colaborativo e uma abordagem inovadora, nossa missão é entregar qualidade e excelência em tudo o que fazemos. Quando dizemos "Deu fome? Abre o amarelinho!", estamos convidando você a explorar um mundo de delícias e novidades que vão além do comum.

                Nosso compromisso é com a satisfação total dos nossos clientes, sempre buscando ouvir suas necessidades e superá-las com carinho e dedicação. Estamos aqui para criar conexões significativas e tornar sua experiência inesquecível.

                Venha conosco e descubra como podemos transformar cada momento em algo especial. No Papo Amarelo, a conversa nunca acaba, e a fome sempre é saciada!
            </p>
        </span>
        <figure>
            <img src="/papoamarelo/assets/images/eu.png" class="about_image">
        </figure>
    </section>
    <section class="contact">
        <div class="contact_align--span">
            <div class="form-container">
                <h2>Entre em Contato Conosco</h2>
                <form action="seu_script_de_processamento.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Mensagem:</label>
                        <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="submit-button">Enviar</button>
                </form>
            </div>
        </div>
        <figure>
            <img src="/papoamarelo/assets/images/logo.png">
        </figure>
    </section>
    <script src="assets/js/script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/mickidum/acc_toolbar/acctoolbar/acctoolbar.min.js"></script>
    <script>
      window.onload = function() {
        window.micAccessTool = new MicAccessTool({
          link: 'http://your-awesome-website.com/your-accessibility-declaration.pdf',
          contact: 'mailto:your-mail@your-awesome-website.com',
          buttonPosition: 'right',
          forceLang: 'en-US'
        });
      }
    </script>
  </body>
</body>
</html>