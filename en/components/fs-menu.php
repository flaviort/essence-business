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
                                Services
                            </p>

                            <?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($importation); ?>'>
                                        Import
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($exportation); ?>'>
                                        Export
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($transports); ?>'>
                                        Transport and Cargo
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($courses); ?>'>
                                        Courses and Training
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($fuel); ?>'>
                                        Fuels
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class='has-sub'>
                                
                            <p>
                                About Us
                            </p>

                            <?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

                            <ul class='sub'>

                                <li>
                                    <a href='<?php echo($about); ?>'>
                                        Who We Are
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($mission); ?>'>
                                        Mission, Vision and Values
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo($team); ?>'>
                                        Experts
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li>
                            <a href='<?php echo($logistics); ?>'>
                                Commercialization and Logistics
                            </a>
                        </li>

                        <li>
                            <a href='<?php echo($social); ?>'>
                                Social Projects
                            </a>
                        </li>

                        <li>
                            <a href='<?php echo($contact); ?>'>
                                Contact
                            </a>
                        </li>

                        <li>
                            <a href='<?php echo($work); ?>'>
                                Work with Us
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