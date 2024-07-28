<header>
    <section>
        <div>
            <nav class="navcolor">
                <div class="nav-wrapper container">
                    <a href="/" class="brand-logo left">
                        <img src="/images/logo.png" alt="" style="height:128px; padding-top: 10px">
                    </a>

                    <!-- TODO - Ajustar o menu lateral fora do logo -->
					<?php if(isset($_SESSION['logado'])) {?>
                        <a href="#" data-target="sidenav" class="sidenav-trigger">
                            <i class="material-icons">menu</i>
                        </a>
					<?php } ?>
                    <ul class="right hide-on-med-and-down">
                        <?php if(isset($_SESSION['logado'])) { ?>
                            <li class="">
                                <a href="/" class="">Home</a>
                            </li>
                            <li class="">
                                <a class="dropdown-trigger" href="#!" data-target="dropdownlogado">
                                    <div class="chip">
                                        <img src="/images/users/default.png">
                                        {{$_SESSION['name']}}
                                    </div>
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a class="waves-effect waves-light btn modal-trigger white black-text" href="#modallogin">Login</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
            <ul id="sidenav" class="sidenav">
                <li class="">
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/logout" class="waves-effect waves-green btn-flat">Sair</a>
                </li>
            </ul>
            <div class="modal" id="modallogin">
                <div class="modal-content">
                    <div class="container">
                        <div class="row">
                            <div class="col s12 ">
                                <div class="col s2"></div>
                                <form class="col s8" action="login" method="post">
                                    <p><h4 class="center">Dados de acesso:</h4></p>
                                    <div class="divider"></div>
                                    <br>
                                    <i class="material-icons left">account_circle</i>
                                    <i>CPF <img id="valida_cpf"></i>
                                    <div class="input-field">
                                        <input id="cpftext" type="text" name="user" oninput="mascaraCPF(this)">
                                    </div>
                                    <i class="material-icons left">security</i>
                                    <i>Senha</i>
                                    <div class="input-field">
                                        <input type="password" name="pass">
                                    </div>
                                    <div class="row right">
                                        <button class="btn waves-effect waves-light green" type="submit">Acessar
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </form>
                                <div class="col s2"></div>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
            <div class="modal" id="modallogout">
                <div class="modal-content">
                    <p>Tem certeza que deseja sair?</p>
                </div>
                <div class="modal-footer">
                    <a href="" class="modal-close waves-effect waves-green btn-flat">Não</a>
                    <a href="/logout" class="modal-close waves-effect waves-green btn-flat">Sim</a>
                </div>
            </div>
            <ul id="dropdownlogado" class="dropdown-content">
                <li>
                    <a class="modal-trigger black-text" href="#modallogout">Sair</a>
                </li>
            </ul>
        </div>
    </section>
</header>