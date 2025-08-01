<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro Cs</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php 
    include_once("carrega_Imagens.php")
    ?>

      <header>
    <nav class="Nav-bar">
        <div class="logo">
            <img src="/pages/imagens/logoProjectZ.png" alt="Logo Project Z">
        </div>

        <div class="Nav-list">
            <ul>
                <li class="Nav-item"><a href="#" class="Nav-link">HOME</a></li>
                <li class="Nav-item"><a href="#" class="Nav-link">SOBRE</a></li>
                <li class="Nav-item"><a href="#" class="Nav-link">REGRAS</a></li>
            </ul>
        </div>

        <div class="Nav-button">
            <button><a href="#">Já tem sua conta?</a></button>
        </div>

        <i class="fa-solid fa-bars" id="menu_icon" onclick="MenuShow()"></i>
    </nav>

    <div class="Mobile-Menu">
        <ul>
            <li class="Nav-item"><a href="#" class="Nav-link">HOME</a></li>
            <li class="Nav-item"><a href="#" class="Nav-link">SOBRE</a></li>
            <li class="Nav-item"><a href="#" class="Nav-link">REGRAS</a></li>
        </ul>

        <div class="Nav-button">
            <button><a href="#">Já tem sua conta?</a></button>
        </div>
    </div>
</header>

        <div class="container" style="z-index:8888;">
            <section id="home_section">
                <div class="home_content">
                    <h1><span>CS:GO</span> PROJECT CTRL-Z</h1>
                    <span class="subtitle">
                        O maior campeonato de Couter-Strike do Project Ctrl-Z
                    </span>



                    <div class="countdown">
                        <h2>CONTAGEM REGRESSIVA
                        </h2>
                        <div class="box">
                            <span class="value" data-dias>00</span>
                            <span class="name">DIAS</span>
                        </div>
                        <div class="box">
                            <span class="value" data-hora>00</span>
                            <span class="name">HORAS</span>
                        </div>
                        <div class="box">
                            <span class="value" data-minutos>00</span>
                            <span class="name">MINUTOS</span>
                        </div>
                        <div class="box">
                            <span class="value" data-segundos>00</span>
                            <span class="name">SEGUNDOS</span>


                        </div>
                    </div>

                    <div class="home_buttons">
                        <button class="btn_home_Se_Increver">Se Increver</button>
                        <button class="btn_home_Ver_Regras">Ver Regras</button>
                    </div>
                </div>
            </section>

            <section class="home02">
                <div class="home02_content">

                    <h2><span style="font-size:40px;color : #d946ef;"> SOBRE </span> O CAMPEONATO</h2>

                    <span style="text-align: justify; color: #6d6d6d;">
                        <b>CS:GO PROJECT CTRL - Z a</b> é um campeonato de Counter-Strike: Global Offensive organizado
                        por uma
                        turma de estudantes de Tecnologia da Informação. O projeto tem como objetivo aplicar
                        conhecimentos de TI
                        na prática promovendo integração entre os alunos desenvolvimento de habilidades de organização
                        de
                        eventos e, claro, muita diversão e competição saudável.
                    </span>

                </div>

            </section>
            <!-------------------------------Contador ------------------------------------------------------>


            <!-- ------------------------------------------------------------------------- FORMS ------------------------------------------------- -->
            <div class="row">
                <div class="col-sm-12">
                    <form action="cadastrar.php" method="post" class="" enctype="multipart/form-data ">
                        <h1 class="text-center">SE INSCREVER</h1>


                        <div>
                            <label for="nome_equipe">Nome Equipe</label>
                            <input type="text" name="nome_equipe" class="" id="nome_equipe" placeholder="Digite Aqui..."
                                required />

                        </div>
                        <div class="row">
                            <div class="col-sm-4">


                                <input type="text" name="campo_img" id="campo_img" style="display:none;">

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label for="nome_usuario01">Integrante 01</label>
                                <input type="text" name="nome_usuario01" class="" id="nome_usuario01"
                                    placeholder="Digite Aqui..." required />
                            </div>

                            <div class="col-sm-4">
                                <input type="text" name="celular_usuario01" class="" id="celular_usuario01"
                                    placeholder="(99) 99999-9999" required />
                            </div>
                        </div>

                        <!-- Repetição para os outros usuários -->
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label for="nome_usuario02">Integrante 02
                                </label>
                                <input type="text" name="nome_usuario02" class="" id="nome_usuario02"
                                    placeholder="Digite Aqui..." required />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="celular_usuario02" class="" id="celular_usuario02"
                                    placeholder="(99) 99999-9999" required />
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label for="nome_usuario03">Integrante 03</label>
                                <input type="text" name="nome_usuario03" class="" id="nome_usuario03"
                                    placeholder="Digite Aqui..." required />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="celular_usuario03" class="" id="celular_usuario03"
                                    placeholder="(99) 99999-9999" required />
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label for="nome_usuario04">Integrante 04</label>
                                <input type="text" name="nome_usuario04" class="" id="nome_usuario04"
                                    placeholder="Digite Aqui..." required />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="celular_usuario04" class="" id="celular_usuario04"
                                    placeholder="(99) 99999-9999" required />
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label for="nome_usuario05">Integrante 05</label>
                                <input type="text" name="nome_usuario05" class="" id="nome_usuario05"
                                    placeholder="Digite Aqui..." required />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="celular_usuario05" class="" id="celular_usuario05"
                                    placeholder="(99) 99999-9999" required />
                            </div>
                        </div>

                        <div class="mt-4 d-flex gap-2">

                            <button class="" id="buttonEscolher" onclick="EscolherImg()">Escolher
                                Logo</button>
                            <input type="hidden" name="txtAcao" value="Cadastrar" />

                            <button type="reset" class="btn_cancel">Cancelar</button>
                            <button class=" btn_cadastra" onclick="Enviar('cadastra')">
                                Se Inscrever</button>


                        </div>
                    </form>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------- FIM---------------FORMS ------------------------------------------------- -->
            <!-- FIM CONTAINER ----------------------- -->
        </div>

        <footer>
            <div class="footer_bar">
            
            </div>
        </footer>

        <script src="main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
            crossorigin="anonymous"></script>
        <!-- 
         -->
</body>

</html>