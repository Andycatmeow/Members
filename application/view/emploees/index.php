<div id="content">
    <div class="block">
        <div class="block-header group">
            <h2 class="block-title">Emploees</h2>
            <div class="create"><a class="btn primary" href="<?php echo URL; ?>emploees/create">Create emploee<a></div>
        </div>
        <div class="table-block">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Position</th>
                        <th>Hire Date</th>
                        <th>Salary</th>
                        <th class="action-h">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($emploees as $emploee) {
                        $html = '
                        <tr>
                            <td>'.$emploee->id.'</td>
                            <td>'.$emploee->first_name.'</td>
                            <td>'.$emploee->last_name.'</td>
                            <td>'.$emploee->position.'</td>
                            <td>'.$emploee->hire_date.'</td>
                            <td>'.$emploee->salary.'</td>
                            <td class="action"><a class="action-view" href="emploees/viewEmploee/'.$emploee->id.'">View</a><a class="action-delete" href="emploees/delete/'.$emploee->id.'">Delete</a></td>
                        </tr>
                        ';
                        echo $html;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>