<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Consulta de Peças</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/pecas.css">
   <link rel="shortcut icon" href="img/icone_do_site-removebg-preview.png" type="image/x-icon">

</head>
<body>
<div class="sidebar">
        <div class="logo-details">
            <i class="img"><img src="img/icone_do_site-removebg-preview.png" alt=""></i>
            <span class="logo_name">
               <img src="img/logotipo1.png" alt="">
            </span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dashboard.php">
                    <i class="bi bi-house"></i>
                    <span class="link_name">Página Inicial</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php">Página Inicial</a></li>
                 </ul>
            </li>

            <li>
                <div class="iocn-link">
                    <a href="">
                        <i class="bi bi-card-checklist"></i>
                        <span class="link_name">Cadastro e Consulta</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="">Cadastro e Consulta</a></li>
                    <li><a href="pecas.php">Peças</a></li>
                    <li><a href="fornecedores.php">Fornecedores</a></li>
                 </ul>
            </li>

            <li>
                <a href="movimentacoes.php"> 
                    <i class='bx bx-log-in-circle'></i>
                    <span class="link_name">Movimentações</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="movimentacoes.php">Movimentações</a></li>
                 </ul>
            </li>
            
            <li>
                <div class="iocn-link">
                    <a href="relatorios.php">
                        <i class='bx bxs-report'></i>
                        <span class="link_name">Relatórios</span>
                    </a>
                </div>
                 <ul class="sub-menu">
                    <li><a class="link_name" href="relatorios.php">Relatórios</a></li>
                 </ul>
            </li>
        </ul>
    </div>

    
    <section class="content-section">
    <div class="header-content">
            <div class="nome_pagina">
                <i class='bx bx-menu'></i>
                <span class="text">Cadastro e Consulta de Peças</span>
            </div>
            <div class="usuario">
                <div class="foto_usuario">
                <img src="img/icone_usuario.png" alt="">
                </div>
                <div class="nome_usuario">
                    <span>ADM</span>
                </div>
            </div>
        </div>

        
    <main>
        <div class="funcoes">
            <section class="pecas">
                <p>TOTAL</p>
                <div class="numero">10536</div>
                <p class="pecas_registradas">PEÇAS CADASTRADAS</p>
            </section>
           
        </div>

        <div class="container-grafico">
            <p>% de Crescimento da Empresa</p>
            <div class="grafico">
                
            </div>
        </div>
    </main>


    <div class="section-demandas">
        <div class="demanda-pecas">
            
            <div class="botoes">
                <div class="adicionar"><button type="button"><a href="<?php echo "cadastro_pecas.php"; ?>">Adicionar Peça</a></button></div>
                <div class="consultar"><button type="button"><a href="<?php echo "consulta_pecas.php"; ?>">Consultar Peça</a></button></div>

            </div>
            
            <div class="pecas">
                <div class="foto-pecas">
                    <div class="bg-foto"><img src="img/icone_do_site-removebg-preview.png" alt=""></div>
                </div>
                
                <div class="nome-pecas">
                    <p>logo</p>
                    <label>Nome</label>
                </div>
                
                <div class="valor-unitario">
                    <p>15,00</p>
                    <label>Valor Unitário</label>
                </div>

                <div class="quantidade-pecas">
                    <p>10</p>
                    <label>Quantidade</label>
                </div>

                <div class="valor-total">
                    <p>150,00</p>
                    <label>Valor Total</label>
                </div>
            </div>

            <div class="pecas">
                <div class="foto-pecas">
                    <div class="bg-foto"><img src="img/icone_do_site-removebg-preview.png" alt=""></div>
                </div>
                
                <div class="nome-pecas">
                    <p>logo</p>
                    <label>Nome</label>
                </div>
                
                <div class="valor-unitario">
                    <p>15,00</p>
                    <label>Valor Unitário</label>
                </div>

                <div class="quantidade-pecas">
                    <p>10</p>
                    <label>Quantidade</label>
                </div>

                <div class="valor-total">
                    <p>150,00</p>
                    <label>Valor Total</label>
                </div>
            </div>
        </div>

        
    </div>

</section>



    <script src="js/pecas.js"></script>

</body>
</html>