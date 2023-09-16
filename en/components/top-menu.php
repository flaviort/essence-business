<section id='top-menu'>
    <div class='container container-big'>
        <div class='row'>
            <div class='col-12'>
                <div class='box'>

                    <a href='./' class='logo'>
                        <?php echo file_get_contents('../assets/svg/logo-en.svg') ?>
                    </a>

                    <ul class='menu'>

                        <li class='has-sub'>
                            
                            <div class='flex hover-underline'>

                                <p>
                                    Services
                                </p>

                                <?php echo file_get_contents('../assets/svg/ux/angle-down.svg'); ?>

                            </div>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($importation); ?>'>
                                        <span>Importation</span>
                                        <?php echo file_get_contents('../assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($exportation); ?>'>
                                        <span>Exportation</span>
                                        <?php echo file_get_contents('../assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($transports); ?>'>
                                        <span>Transport and Cargo</span>
                                        <?php echo file_get_contents('../assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($courses); ?>'>
                                        <span>Courses and Training</span>
                                        <?php echo file_get_contents('../assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($fuel); ?>'>
                                        <span>Fuels</span>
                                        <?php echo file_get_contents('../assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class='has-sub'>

                            <div class='flex hover-underline'>

                                <p>
                                    About Us
                                </p>

                                <?php echo file_get_contents('../assets/svg/ux/angle-down.svg'); ?>

                            </div>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($about); ?>'>
                                        <span>Who We Are</span>
                                        <?php echo file_get_contents('../assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($mission); ?>'>
                                        <span>Mission, Vision and Values</span>
                                        <?php echo file_get_contents('../assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($team); ?>'>
                                        <span>Experts</span>
                                        <?php echo file_get_contents('../assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href='<?php echo($logistics); ?>' class='hover-underline'>
                                Commercialization and Logistics
                            </a>
                        </li>

                        <li>
                            <a href='<?php echo($social); ?>' class='hover-underline'>
                                Social Projects
                            </a>
                        </li>

                        <li class='has-sub'>


                            <div class='flex hover-underline'>

                                <p>
                                    Contact
                                </p>

                                <?php echo file_get_contents('../assets/svg/ux/angle-down.svg'); ?>

                            </div>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($contact); ?>'>
                                        <span>Contact Us</span>
                                        <?php echo file_get_contents('../assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($work); ?>'>
                                        <span>Work with Us</span>
                                        <?php echo file_get_contents('../assets/svg/ux/long-arrow-right.svg'); ?>
                                    </a>
                                </li>

                            </ul>

                        </li>

                    </ul>

                    <div class='right'>
                    
                        <div class='language text-small'>

                            <a href='<?php echo($pt); ?>'>
                                PT
                            </a>

                            <a href='<?php echo($en); ?>' class='active'>
                                EN
                            </a>

                        </div>

                        <button class='open-fs'>
                            <?php echo file_get_contents('../assets/svg/ux/menu.svg') ?>
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>