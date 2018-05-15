<div id="content">
    <div class="block">
        <div class="block-header group">
            <h2 class="block-title">Members</h2>
            <div class="create"><a class="btn primary" href="<?php echo URL; ?>members/create">Create member</a></div>
        </div>
        <div class="table-block">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of birth</th>
                        <th class="action-h">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($members as $member) {

                        $birth = date("d-m-Y", strtotime($member->date_of_birth));
                        
                        $html = '
                        <tr>
                            <td>'.$member->id.'</td>
                            <td>'.$member->firstname.'</td>
                            <td>'.$member->lastname.'</td>
                            <td>'.$member->email.'</td>
                            <td>'.$member->phone.'</td>
                            <td>'.$birth.'</td>
                            <td class="action"><a class="action-view" href="members/viewmember'.$member->id.'">View</a><a class="action-delete" href="members/delete/'.$member->id.'">Delete</a></td>
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