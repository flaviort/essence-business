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

                <div class="scroll-wrapper">

                    <ul class='menu'>

                        <li>
                            <a href='<?php echo($pt); ?>'>
                                Home
                            </a>
                        </li>

                        <li class='has-sub'>
                                
                            <p>
                                Serviços
                            </p>

                            <?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($importation); ?>'>
                                        Importação
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($exportation); ?>'>
                                        Exportação
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($transports); ?>'>
                                        Transportes e Cargas
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($courses); ?>'>
                                        Cursos e Treinamentos
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($fuel); ?>'>
                                        Combustíveis
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class='has-sub'>
                                
                            <p>
                                Sobre Nós
                            </p>

                            <?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($about); ?>'>
                                        Quem Somos
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($mission); ?>'>
                                        Missão, Visão e Valores
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($team); ?>'>
                                        Especialistas
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li>
                            <a href='<?php echo($logistics); ?>'>
                                Comercialização e Logística
                            </a>
                        </li>

                        <li>
                            <a href='<?php echo($social); ?>'>
                                Projetos Sociais
                            </a>
                        </li>

                        <li>
                            <a href='<?php echo($contact); ?>'>
                                Contato
                            </a>
                        </li>

                        <li>
                            <a href='<?php echo($work); ?>'>
                                Trabalhe Conosco
                            </a>
                        </li>

                    </ul>

                    <ul class='social'>

                        <li>
                            <a href='<?php echo($instagram); ?>' target='_blank'>
                                <?php echo file_get_contents('assets/svg/social/instagram.svg'); ?>
                            </a>
                        </li>

                        <li>
                            <a href='<?php echo($facebook); ?>' target='_blank'>
                                <?php echo file_get_contents('assets/svg/social/facebook.svg'); ?>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>
    </div>
</section>