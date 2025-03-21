<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cadastro_usuario.css">
    <link rel="shortcut icon" href="img/icone_do_site-removebg-preview.png" type="image/x-icon">
</head>
<body id="teste">
    <h2>Cadastre-se Aqui</h2>
    <div class="pessoa_fisica_juridica">
        
        <div class="pessoa">
            <div onclick="fisica()" class="circulo">
            <div id="opcao1" class="opcao1"></div>
            </div>
            <div class="fisica">
                <span>Pessoa Física</span>
            </div>
        </div>

        <div class="pessoa">
            <div onclick="juridica()" class="circulo">
            <div id="opcao2" class="opcao2"></div>
            </div>
            <div class="juridica">
                <span>Pessoa Jurídica</span>
            </div>
        </div>
    </div>

    <div class="container_formulario">
        <form>
            <div class="alinhamento">
                <div class="info">
                    <label>Nome</label><br>
                    <input type="text">
                </div>
                <div class="info">
                    <label>Digite um Email</label><br>
                    <input type="email">
                </div>
                <div class="info">
                    <label>Escolha uma Foto</label><br>
                    <div class="foto">
                        <p>Selecione um Arquivo</p>
                    </div>
                </div>
            </div>
            <div class="alinhamento">
                <div class="info">
                    <label>CPF</label><br>
                    <input type="number" name="" id="">
                </div>
                <div class="info">
                    <label>Digite uma Senha</label><br>
                    <input type="email">
                </div>
            </div>
        </form>
    </div>

    <script src="js/cadastro_usuario.js"></script>
</body>
</html>