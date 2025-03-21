<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimentação de Peças</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/movimentacoes.css">
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
                <span class="text">Movimentação de Peças</span>
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
        <div class="info" id="conteudoOpcao1">
            <div class="coluna">
                <label>Movimentação Desejada</label>
                <br><br>
                <div class="select">
                    <select id="movimentacao">
                    <option value="">Selecione uma opção</option>
                    <option value="opcao1">Entrada de Peças</option>
                    <option value="opcao2">Saída de Peças</option>
                  </select>
                </div>
                <br><br><br>
               
                <label>Nome da Peça</label>
               <br><br>
               <div class="input"><input type="text"></div>
                <br><br><br>
               
                <label>Fornecedor</label>
                <br><br>
               <div class="input"><input type="text" name="" id=""></div>
               <br><br><br>

               <label>Observações</label>
                <br><br>
               <div class="textarea"><textarea name="" id="" cols="30" rows="5"></textarea></div>
               <br><br><br>
            </div>
            <div class="coluna">
                <label>Código de Barras</label>
                <br><br>
                <div class="input"><input type="text"> </div>
                <br><br><br>
            
                <label>Quantidade</label>
                <br><br>
               <div class="input"><input type="number"></div>
               <br><br><br>

               <label>Horário de Entrada</label>
               <br><br>
               <div class="input"><input type="time" name="" id=""></div>
                 <br><br><br>
            </div>
            <div class="coluna">
                <label>Foto da Peça</label>
                <br><br>
                
                <div class="foto">

                </div>
                
                <br><br><br>

                <label>Data de Entrada</label>
                <br><br>
                <div class="input"><input type="date" name="" id=""></div>
            </div>

        </div>






        <div class="info" id="conteudoOpcao2">

        <div class="coluna">
                <label>Movimentação Desejada</label>
                <br><br>
                <div class="select">
                    <select id="movimentacao">
                    <option value="">Selecione uma opção</option>
                    <option value="opcao1">Entrada de Peças</option>
                    <option value="opcao2">Saída de Peças</option>
                  </select>
                </div>
                <br><br><br>
               
                <label>Nome da Peça</label>
               <br><br>
               <div class="input"><input type="text"></div>
                <br><br><br>
               
                <label>Fornecedor</label>
                <br><br>
               <div class="input"><input type="text" name="" id=""></div>
               <br><br><br>

               <label>Observações</label>
                <br><br>
               <div class="textarea"><textarea name="" id="" cols="30" rows="5"></textarea></div>
               <br><br><br>
            </div>
            <div class="coluna">
                <label>Código de Barras</label>
                <br><br>
                <div class="input"><input type="text"> </div>
                <br><br><br>
            
                <label>Quantidade</label>
                <br><br>
               <div class="input"><input type="number"></div>
               <br><br><br>

               <label>Horário de Entrada</label>
               <br><br>
               <div class="input"><input type="time" name="" id=""></div>
                 <br><br><br>
            </div>
            <div class="coluna">
                <label>Foto da Peça</label>
                <br><br>
                
                <div class="foto">

                </div>
                
                <br><br><br>

                <label>Data de Entrada</label>
                <br><br>
                <div class="input"><input type="date" name="" id=""></div>
            </div>
       

        <div class="botao"><button type="button">Registrar</button></div>

    </main>


    


    <script src="js/movimentacoes.js"></script>

</body>
</html>