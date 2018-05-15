<div id="content">
    <div class="block">
        <div class="block-header group">
            <h2 class="block-title">Create emploee</h2>
        </div>
        <div class="form-block">
            <div class="form-header">
                <h4>Create random emploees</h4>
            </div>
            <div class="form-content">
                <form action="<?php echo URL; ?>emploees/createRandomEmploees" method="POST">
                    <div class="form-group">
                        <label>Count of records:</label>
                        <input type="text" name="count" placeholder="count">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Create">
                    </div>
                </form>
            </div>
        </div>
        <div class="form-block">
            <div class="form-header">
                <h4>Create</h4>
            </div>
            <div class="form-content">
                <form action="<?php echo URL; ?>emploees/createEmploee" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" name="first_name" placeholder="first name">
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" name="last_name" placeholder="last name">
                    </div>
                    <div class="form-group">
                        <label>Hire Date:</label>
                        <input type="text" name="hire_date" placeholder="hire date">
                    </div>
                    <div class="form-group">
                        <label>Salary:</label>
                        <input type="text" name="salary" placeholder="salary">
                    </div>
                    <div class="form-group">
                        <label>Position:</label>
                        <select name="position_id">
                            <option value="1">Director</option>
                            <option value="2">Developer</option>
                            <option value="3">Support engineer</option>
                            <option value="4">Designer</option>
                            <option value="5">Administrator</option>
                            <option value="6">Hire manager</option>
                            <option value="7">Sales Manager</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                        <input type="file" name="emploee_pic" size="30"></input>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Create">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>