<section id='fs-menu'>
	
    <div class='bg'>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class='container container-big'>
        <div class='row'>
            <div class='col-12'>

                <button class='close-fs'>
                    <?php echo file_get_contents('assets/svg/ux/close.svg'); ?>
                </button>

                <div class='cf'></div>

                <ul class='menu text-bigger'>

                    <li>
                        <a href='<?php echo($pt); ?>' class='hover-underline'>
                            Home
                        </a>
                    </li>

                    <li class='has-sub'>
                            
                        <p class='hover-underline'>
                            Serviços
                        </p>

                        <?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

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

                        <?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

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

                    <li>
                        <a href='<?php echo($contact); ?>' class='hover-underline'>
                            Contato
                        </a>
                    </li>

                    <li>
                        <a href='<?php echo($work); ?>' class='hover-underline'>
                            Trabalhe Conosco
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</section>