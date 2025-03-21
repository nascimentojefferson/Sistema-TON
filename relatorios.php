<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Peças</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/relatorios.css">
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
                <span class="text">Consulta de Relatórios</span>
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
            <div class="alinhar-barra">
                <div class="barra-pesquisa">
                    <img src="img/Captura_da_Web_14-10-2023_10343_www.figma.com-removebg-preview.png" alt="">
                    <input type="text">
                </div>
            </div>
    
            <div class="alinhar_botao">
                <div class="botoes">
                    <button id="entrada" class="entrada" onclick="entrada()">Entrada de Peças</button>
                    <button id="saida" class="saida" onclick="saida()">Saída de Peças</button>
                </div>
            </div>
    
            <div class="relatorios">
                <div class="rel_entrada" id="rel_entrada">
                    <div class="container_pecas">
                        <div class="perfil">
                            <div class="foto-pecas">
                                <div class="bg-foto"><img src="img/icone_usuario.png" alt=""></div>
                            </div>
                    
                            <div class="nome-pecas">
                                <p>Cartucho de Tinta</p>
                                <label>Nome</label>
                            </div>
                    
                            <div class="qtd_estoque">
                                <p>20</p>
                                <label>Quantidade</label>
                            </div>
                    
                            <div class="fornecedor">
                                <p>29/09/23</p>
                                <label>Data de Entrada</label>
                            </div>
                            <div class="info">
                                <button>Visualizar</button>
                            </div>
                        </div>
                    </div>
                </div>
    
    
                <div class="rel_saida" id="rel_saida">
                    <div class="container_pecas">
                       
                        <div class="perfil">
                            <div class="foto-pecas">
                                <div class="bg-foto"><img src="img/icone_usuario.png" alt=""></div>
                            </div>
                            
                            <div class="nome-pecas">
                                <p>Cartucho de Tinta</p>
                                <label>Nome</label>
                            </div>
                            
                            <div class="qtd_estoque">
                                <p>10</p>
                                <label>Quantidade</label>
                            </div>
            
                            
                            <div class="fornecedor">
                                <p>29/09/23</p>
                                <label>Data de Entrada</label>
                            </div>
            
                            <div class="info">
                                <button>Visualizar</button>
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>
        </main>
    

    


    <script src="js/relatorios.js"></script>

</body>
</html>