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
                            
                            <div class='flex hover-underline'>

                                <p>
                                    Serviços
                                </p>

                                <?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

                            </div>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($importation); ?>'>
                                        <span>Importação</span>
                                        <?php echo file_get_contents('assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($exportation); ?>'>
                                        <span>Exportação</span>
                                        <?php echo file_get_contents('assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($transports); ?>'>
                                        <span>Transportes e Cargas</span>
                                        <?php echo file_get_contents('assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($courses); ?>'>
                                        <span>Cursos e Treinamentos</span>
                                        <?php echo file_get_contents('assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($fuel); ?>'>
                                        <span>Combustíveis</span>
                                        <?php echo file_get_contents('assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class='has-sub'>

                            <div class='flex hover-underline'>

                                <p>
                                    Sobre Nós
                                </p>

                                <?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

                            </div>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($about); ?>'>
                                        <span>Quem Somos</span>
                                        <?php echo file_get_contents('assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($mission); ?>'>
                                        <span>Missão, Visão e Valores</span>
                                        <?php echo file_get_contents('assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($team); ?>'>
                                        <span>Especialistas</span>
                                        <?php echo file_get_contents('assets/svg/ux/long-arrow-right.svg'); ?>
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


                            <div class='flex hover-underline'>

                                <p>
                                    Contato
                                </p>

                                <?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

                            </div>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($contact); ?>'>
                                        <span>Fale Conosco</span>
                                        <?php echo file_get_contents('assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($work); ?>'>
                                        <span>Trabalhe Conosco</span>
                                        <?php echo file_get_contents('assets/svg/ux/long-arrow-right.svg'); ?>
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