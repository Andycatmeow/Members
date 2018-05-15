<div id="content">
    <div class="block">
        <div class="block-header group">
            <h2 class="block-title">Create member</h2>
        </div>
        <div class="form-block">
            <div class="form-header">
                <h4>Create</h4>
            </div>
            <div class="form-content">
                <form action="<?php echo URL; ?>members/createMember" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" name="first_name" placeholder="first name">
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" name="last_name" placeholder="last name">
                    </div>
                    <div class="form-group">
                        <label>Date of birth:</label>
                        <input type="text" name="date_of_birth" placeholder="date of birth">
                    </div>
                    <div class="form-group">
                        <label>Phone:</label>
                        <input type="text" name="phone" placeholder="phone">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" name="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="text" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label>Groups:</label>
                        <select name="group_id">
                            <option value="1">Admins</option>
                            <option value="2">Users</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Avatar:</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                        <input type="file" name="member_pic" size="30"></input>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Create">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>