<section id='top-menu'>
    <div class='container container-big'>
        <div class='row'>
            <div class='col-12'>
                <div class='box'>

                    <a href='./' class='logo'>
                        <?php echo file_get_contents('assets/svg/logo.svg') ?>
                    </a>

                    <ul class='menu'>

                        <li class='has-sub'>
                            
                            <p class='hover-underline'>
                                Serviços
                            </p>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($importation); ?>' class='hover-underline'>
                                        Importação
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($exportation); ?>' class='hover-underline'>
                                        Exportação
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($transports); ?>' class='hover-underline'>
                                        Transportes e Cargas
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($courses); ?>' class='hover-underline'>
                                        Cursos e Treinamentos
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class='has-sub'>

                            <p class='hover-underline'>
                                Sobre Nós
                            </p>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($about); ?>' class='hover-underline'>
                                        Quem Somos
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($mission); ?>' class='hover-underline'>
                                        Valores
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($team); ?>' class='hover-underline'>
                                        Especialistas
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href='<?php echo($logistics); ?>' class='hover-underline'>
                                Comercialização e Logística
                            </a>
                        </li>

                        <li>
                            <a href='<?php echo($social); ?>' class='hover-underline'>
                                Projetos Sociais
                            </a>
                        </li>

                        <li class='has-sub'>

                            <p class='hover-underline'>
                                Contato
                            </p>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($contact); ?>' class='hover-underline'>
                                        Fale Conosco
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($work); ?>' class='hover-underline'>
                                        Trabalhe Conosco
                                    </a>
                                </li>

                            </ul>

                        </li>

                    </ul>

                    <div class='right'>
                    
                        <div class='language text-small'>

                            <a href='<?php echo($pt); ?>' class='active'>
                                PT
                            </a>

                            <a href='<?php echo($en); ?>'>
                                EN
                            </a>

                        </div>

                        <button class='open-fs'>
                            <?php echo file_get_contents('assets/svg/ux/menu.svg') ?>
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>