<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revendo Git</title>
    <link rel="stylesheet" type="text/css" href="test.css">
</head>

<body>

    <header>
        <div class="header" id="myHeader">
            <h2>Site de ingressos</h2>
        </div>
    </header>

    <form method="post" action="">
        <button type="submit" name="acao" value="opcao1">Ação 1</button>
        <button type="submit" name="acao" value="opcao2">Ação 2</button>
        <button type="submit" name="acao" value="opcao3">Ação 3</button>
    </form>

    <?php

    $acao = "";

    if (isset($_POST["acao"])) {
        $acao = $_POST['acao'];
    }

    switch ($acao) {
        case "opcao1":

    ?>

            <div class="imagemShow">
                <img src="imagens/show.jpg" alt="" style="width: 70%; height: 70%;">
            </div>

            <div class="contentZero">

                <div class="contentOne">
                    <div class="informations">
                        <div class="informations2">
                            <p><b>São Paulo Oktoberfest com Péricles</b></p>
                        </div>

                        <div class="abertura">
                            <img src="icons/show1.png" class="img1" style="width: 20px; height: 20px;" />
                            <div class="abertura2">
                                <p>Abertura: 20:00</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="contentTwo">
                    <img src="icons/show.png" alt="" style="width: 55px; height: 55px; padding: 6px;">

                    <p><b>Parque Villa-Lobos<br></b>
                        Avenida Queiroz Filho, 1365 - Vila<br> Hamburguesa - São Paulo - SP
                    </p>

                    <p><b>Organizador:<br></b>
                        Imm Spoktober Cultura e Entretenimento<br> Ltda (CNPJ: 38.132.167/0001-89)
                    </p>

                    <p><b>Classificação:<br></b>
                        18 Anos
                    </p>

                    <p><b>Pagamento:<br></b>
                        Pague em até 12x
                    </p>


                </div>

            </div>

            <div class="cupomTop">
                <img src="icons/cupom.png" alt="" style="width: 23px; height: 23px; margin-right: 10px;">
                <p>Cupom</p>
            </div>

            <div class="cupom">

                <div class="cupomInfo">
                    <p>Digite seu cupom para aplicar o desconto nos igressos:</p>
                </div>

                <div class="cupomTwo">
                    <input type="text" placeholder="Cupom...">
                    <input type="submit" value="VALIDAR!">
                </div>

            </div>

            <div class="showinfo">
                <img src="icons/tarefa.png" alt="" style="width: 23px; height: 23px; margin-right: 10px;">
                <p>Informações</p>
            </div>

            <div class="showpage">

                <p>O desconto de 20% nos ingressos para clientes Bradesco aplica-se somente aos ingressos do tipo inteira.<br>

                    Horários:<br>

                    Quintas e Sexta-Feiras das 16h às 23h.<br>

                    Sábados e Domingos das 12h às 23h.<br>

                    *Fechamento dos portões às 22h TODOS OS DIAS.<br>



                    Vendas de ingressos para o público geral no dia 24 de junho e para os clientes dos cartões Bradesco pré-venda no dia 17 de junho.<br>

                    São Paulo, 12 de junho de 2024 - A 7ª edição da São Paulo Oktoberfest, que será realizada pela primeira vez no Parque Villa-Lobos, de 10 a 20 de outubro, promete uma experiência inesquecível para toda a família, especialmente neste ano que marca a celebração dos 200 anos da imigração alemã no Brasil. E as vendas de ingressos para o público geral terão início no dia 24 de junho. Entretanto, os clientes dos cartões de crédito Bradesco, Bradescard, next e Digio terão acesso a uma pré-venda exclusiva a partir de 17 de junho.<br>

                    Inspirada na mundialmente famosa Oktoberfest de Munique, a São Paulo Oktoberfest deste ano ocupará uma área total de 30 mil metros quadrados no Parque Villa-Lobos e contará com as tradicionais tendas Biertent e Alemanha, além de espaços com muita diversão para as crianças na área Biergarten.<br>

                    A programação do festival inclui atrações musicais como Péricles, Roupa Nova, Fundo de Quintal, Jorge Aragão, Marcelo Falcão, Maneva e Thiaguinho, entre outros que ainda serão anunciados. A banda Cheers for Beers será a residente do palco principal. O lineup também conta com bandas típicas e grupos folclóricos, como Dauerlaufband, Banda Vox3 e Sonora Pop, além dos grupos Freiheit, Tirol e Tanzfreund.<br>

                    O espaço Biergarten é conhecido na região da Baviera como jardins e praças arborizadas ao ar livre onde o público desfruta de alimentos e bebidas. O Biergarten abrange toda a área externa do festival, incluindo a Vila dos Patrocinadores, Restaurantes, Bares, Palco Bradesco e Tenda Alemanha (com exceção da Biertent).<br>

                    Programação na Biertent

                    A Biertent, a tenda da cerveja, volta em 2024 com uma decoração e mobiliário especial, proporcionando uma verdadeira viagem às tradicionais tendas do festival de Munique. Na Biertent, são servidos pratos exclusivos do cardápio assinado por chefes alemães convidados pela organização. A programação do palco da Biertent será animada pela banda residente da festa, além da animação de bandas típicas tradicionais e grandes shows nacionais.<br>

                    Para quem desejar uma experiência ainda mais completa no evento, a Biertent contará com ingressos Combo, com acesso a todo o festival, com exceção aos camarotes + caneca; o Biertent Pista, com acesso a todos os locais do Festival, com exceção dos camarotes; e o Camarote Open Bier, com direito a bebida da Cervejaria Oficial + Frios + Caneca.<br>

                    Os valores dos ingressos para a Biertent na pré-venda exclusiva para clientes dos clientes dos cartões de crédito Bradesco, Bradescard, next e Digio são R$ 80,00 (quinta e sexta-feira) e R$ 85,00 (sábado e domingo) para a Pista Inteira, R$ 110,00 (quinta e sexta-feira) e R$ 115,00 (sábado e domingo) para o Combo (ingresso + caneca), e R$ 400,00 (quinta e sexta-feira) e R$ 420,00 (sábado e domingo) para o Open Bier.<br>

                    Após a pré-venda, os ingressos estarão disponíveis em diferentes lotes: Lote 1 com valores de R$ 105,00 a R$ 110,00 para a Pista Inteira, de R$ 140,00 a R$ 145,00 para o Combo, e de R$ 440,00 a R$ 460,00 para o Open Bier; Lote 2 com valores de R$ 110,00 a R$ 125,00 para a Pista Inteira, de R$ 155,00 a R$ 170,00 para o Combo, e de R$ 460,00 a R$ 490,00 para o Open Bier; e Lote 3 com valores de R$ 125,00 a R$ 135,00 para a Pista Inteira, de R$ 175,00 a R$ 185,00 para o Combo, e de R$ 500,00 a R$ 510,00 para o Open Bier.<br>

                    Na bilheteria, durante o evento, os ingressos para a Biertent serão vendidos por R$ 150,00 (quinta e sexta-feira) e R$ 175,00 (sábado e domingo) para a Pista Inteira, e por R$ 560,00 (quinta e sexta-feira) e R$ 610,00 (sábado e domingo) para o Open Bier (mediante disponibilidade).<br>

                    Os ingressos deverão ser adquiridos exclusivamente através da plataforma de vendas oficial do festival: https://www.ticket360.com.br/<br>

                    de chefes renomados da gastronomia paulistana, proporcionando uma experiência culinária única para todos os visitantes. A organização do evento está planejando a maior festa alemã de São Paulo, repleta de cultura, gastronomia, música e diversão.<br>

                    Ingresso Biergarten - Este ingresso inclui acesso apenas às áreas externas, como o palco Bradesco e Tenda Alemanha, com as apresentações de bandas típicas, rock, apresentações culturais e encerramento especial. Inclui também o Bierpark, que oferece diversão completa liberada, diversas áreas de alimentação, bares com diferentes estilos de chopp, além de apresentações artísticas e culturais.<br>

                    Ingresso Biergarten + Combo Caneca - Aproveite toda a experiência do ingresso Biergarten e garanta antecipadamente a compra de sua caneca. Mergulhe na tradição da Oktoberfest de forma completa!<br>

                    Ingresso Biertent - Este ingresso inclui acesso à tenda principal de shows do line-up, com grandes artistas nacionais como Péricles, Maneva, bandas típicas alemãs nacionais e internacionais, além da banda residente Cheers for Bears. Aproveite restaurantes e bares internos. Áreas do Biergarten também inclusas.<br>

                    Ingresso Biertent + Combo Caneca - Aproveite todos os benefícios do ingresso Biertent e garanta antecipadamente a compra de sua caneca.<br>

                    Ingresso Biertent Open Bier - Desfrute de um espaço exclusivo com vista privilegiada do palco principal, serviço de open chopp oficial Eisenbahn, mesa de frios e uma caneca com tirante exclusiva como brinde. Aproveite a experiência ao máximo!<br>

                    Em 2024: uma edição histórica da São Paulo Oktoberfest<br>

                    A São Paulo Oktoberfest é um festival cultural que celebra a integração das tradições alemãs e brasileiras, oferecendo uma experiência rica em gastronomia, música e entretenimento para todas as idades. Em 2024, a festa ganha uma dimensão especial com a celebração dos 200 anos de imigração alemã no Brasil, destacando a parceria e sinergia com a Oktoberfest de Munique.<br>

                    A edição deste ano acontecerá de 10 a 20 de outubro em um novo cenário, seguindo o conceito original do festival de Munique, para garantir uma ampla programação para toda a família e visitantes de todas as idades. Ela acontecerá pela primeira vez no Parque Villa Lobos, um dos preferidos pela população paulistana, por oferecer uma das melhores infraestruturas e uma localização privilegiada e de fácil acesso para o público.<br>

                    Sobre a IMM<br>

                    No mercado há mais de 10 anos, a IMM, que atua nas áreas de Mídia, Esporte e Entretenimento, é referência em entretenimento ao vivo para o público e marcas, e seu portfólio é seu maior diferencial. Vai do Rio Open, o maior torneio de tênis da América do Sul, aos musicais da Broadway de primeira classe, passando pelo Cirque du Soleil, pelo maior festival de restaurantes do mundo, o Taste Festivals, pelo GO CUP, o maior torneio de futebol infantil do mundo e pelos consagrados São Paulo Fashion Week e São Paulo Oktoberfest.<br>

                    O Bradesco e a cultura<br>

                    Com centenas de projetos patrocinados anualmente, o Bradesco acredita que a cultura é um agente transformador da sociedade. Além do Teatro Bradesco, o banco apoia iniciativas que contribuem para a sustentabilidade de manifestações culturais que acontecem de norte a sul do País, reforçando o seu compromisso com a democratização da arte. São eventos regionais, feiras, exposições, centros culturais, orquestras, musicais e muitos outros. O banco também mantém o Bradesco Cultura, plataforma digital que reúne conteúdo relacionado às ações culturais que contam com o patrocínio da instituição. Visite em cultura.bradesco<br>

                    Parque Villa Lobos: o novo local da São Paulo Oktoberfest com novos horários<br>

                    O Parque Villa-Lobos, um dos preferidos pela população paulistana, foi escolhido como o novo espaço do festival por oferecer uma das melhores infraestruturas e uma localização privilegiada e de fácil acesso para o público. O festival já está todo planejado para garantir uma divertida programação para toda a família e visitantes de todas as idades.<br>

                    O horário do evento também foi ajustado para proporcionar mais entretenimento familiar, começando e terminando mais cedo para garantir muita diversão para crianças e jovens: às quintas e sextas das 16h às 23h, e aos sábados e domingos, das 12h às 23h, proporcionando uma variedade de atrações musicais, gastronômicas, artísticas e culturais.<br>

                    A São Paulo Oktoberfest oferecerá uma saborosa gastronomia típica alemã, com mais de 40 pratos típicos e mais de 50 outras opções gastronômicas. O festival será um grande encontro.<br>

                    Organizador: https://saopaulooktoberfest.com.br/ingressos/.</p>

            </div>
            

            <div class="borderMap">
        
            <img src="icons/alfinete" alt="" style="width: 25px; height: 25px; margin-right: 10px;">
            <p>Localização</p>
        
            </div>
            
            <div class="mapbox">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3075.515280355481!2d-46.648977612218964!3d-23.553187292370648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94ce59173f6167a1%3A0xd3f0b3f350565aa1!2sAv.%20Nove%20de%20Julho%2C%201100%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001312-000!3m2!1d-23.5531909!2d-46.6480736!5e0!3m2!1spt-BR!2sbr!4v1728648447799!5m2!1spt-BR!2sbr" width="1240px" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


    <?php
            break;
    }

    ?>

</body>

</html>