<div id="content">
    <div class="block">
        <div class="block-header group">
            <h2 class="block-title">id: <?php echo $emploee->id; ?></h2>
            <div class="edit"><a class="btn primary" href="<?php echo URL.'emploees/'.$emploee->id; ?>/edit">Edit emploee<a></div>
        </div>
        <div class="emploee-block">

            <div class="emploe-name">
                <h3><?php echo $emploee->first_name.' '.$emploee->last_name ?></h3>
            </div>

            <div class="emploee-photo">
                <img src="<?php echo URL.'uploads/profiles/'.$emploee->id.'/'.$emploee->photo; ?>" alt="emploee-photo">
            </div>

            <?php
            
            $html = '<div class="emploee-information">
                <ul>
                    <li>'.$emploee->position.'</li>
                    <li>'.$emploee->hire_date.'</li>
                    <li>'.$emploee->salary.'</li>
                    <li>'.$emploee->email.'</li>
                    <li>'.$emploee->phone.'</li>
                    <li>'.$emploee->address.'</li>
                    <li>'.$emploee->about.'</li>
                    <li>'.$emploee->nicname.'</li>
                </ul>
            </div>';
            
            echo $html;

            ?>
            
        </div>
    </div>
</div>