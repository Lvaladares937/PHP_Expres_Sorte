<?php

    if(isset($_POST['submit']))
    {
      include_once('salvar_formulario.php');

      $name = $_POST['nome'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $interesse = $_POST['interesse'];

      $result = mysqli_query($conn, "INSERT INTO usuarios (nome, email, telefone, interesse) VALUES ('$nome', '$email', '$phone', '$interesse')");

    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Expres Sorte</title>
    <!-- Text font -->
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Icons Font -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <header id="event-subscription">
      <div id="disclaimer">
        <h2>Expres Sorte</h2>
        <p class="about-event">
          Um evento onde pagamos até 40% para nossos vendedores
        </p>
        <p>Data do proximo sorteio:</p>
        <p class="event-date">"A ser definida"</p>
      </div>
      <div id="subscription-form">
        <p>Preencha o formulário para se tornar um de nossos vendendor</p>
        <form action="index.php" method="POST">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome" />
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu melhor e-mail" />
          </div>
          <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" placeholder="Número de Whatsapp" />
          </div>
          <div class="form-group">
            <label for="interesse">Principal interesse</label>
            <select name="interesse">
              <option value="" disabled selected>Selecione</option>
              <option value="apartment">Comprar bilhete</option>
              <option value="house">Torna-se um vendedor</option>
              <option value="other">Duvidas</option>
            </select>
          </div>
          <input type="submit" class="btn" value="Quero me inscrever" />
        </form>
      </div>
    </header>
    <section id="key-benefits">
      <h2>Como trabalhamos :</h2>
      <div class="benefits">
        <div class="benefit">
          <div id="benefit-1" class="benefit-img"></div>
          <p>
             A Esprex Sorte fornece um link exclusivo para cada sorteio criado pelos usuários
          </p>
        </div>
        <div class="benefit">
          <div id="benefit-2" class="benefit-img"></div>
          <p>
            Os criadores de sorteios podem compartilhar esse link nas redes sociais
          </p>
        </div>
        <div class="benefit">
          <div id="benefit-3" class="benefit-img"></div>
          <p>
            Para receber por e-mail para que as pessoas saibam sobre o sorteio e possam participar
          </p>
        </div>
      </div>
    </section>
    <section id="location">
      <div id="address">
        <i class="bi bi-geo-alt-fill"></i>
        <div id="address-details">
          <p>Av. Nossa Sra. de Fátima, 250</p>
          <p>Jóquei Teresina - PI</p>
          <p>64048-180</p>
        </div>
      </div>
      <div id="about-location">
        <h3>Local de destaque</h3>
        <p>
          O evento será realizado em um local prestigiado pelos amantes de
          Design de Interiores, onde teremos exemplos de vários ambientes, tanto
          internos como externos.
        </p>
      </div>
    </section>
    <section id="details">
      <div class="detail" id="detail-1">
        <img src="img/raffle.jpg" alt="" />
        <div class="detail-description">
          <h3>Conheça os ambientes e nossos sistemas de sorteio</h3>
        </div>
      </div>
      <div class="detail" id="detail-2">
        <div class="detail-description">
          <h3>Detalhes</h3>
          <ul>
            <li>Posicionamento</li>
            <li>Aproveitamento de espaço</li>
            <li>Combinação de cores</li>
            <li>Organização</li>
            <li>E muito mais...</li>
          </ul>
        </div>
        <img src="img/raffle2.png" alt="" />
      </div>
      <div class="detail" id="detail-3">
        <img src="img/raflle3.jpg" alt="" />
        <div class="detail-description">
          <h3>Objetos</h3>
          <ul>
            <li>Cadeiras</li>
            <li>Mesas</li>
            <li>Espelhos</li>
            <li>Plantas</li>
            <li>Cortinas</li>
            <li>E muito mais...</li>
          </ul>
        </div>
      </div>
    </section>
    <section id="cta">
      <section id="cta">
        <h3>Vendedor? Autentique seu bilhete por aqui</h3>
        <button class="btn" onclick="redirecionarPagina()">Registrar Bilhete</button>
      </section>
      
      <script>
        function redirecionarPagina() {
          window.location.href = '/html_css_landing_page-main/inscrição_sorteio_com/inscricao.html';
        }
      </script>

    </section>
    <footer id="footer">
      <h3>Expres Sorte</h3>
      <p>A companhia da oportunidade</p>
      <p><span>Entre em contato:</span> expressorte@gmail.com</p>
      <p><span>Ou pelo telefone:</span> (89)8119-2227</p>
    </footer>
  </body>
</html>