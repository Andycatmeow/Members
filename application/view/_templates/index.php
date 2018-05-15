<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>E-MS</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="wrap">
            <div id="header" class="group">
                <div class="logo"><h2>E_MS</h2></div>
                <div class="nav group">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Emploees</a></li>
                        <li><a href="#">Members</a></li>
                        <li><a class="last" href="#">Login</a></li>
                    </ul>
                </div>
            </div>
            <div id="content">
                <h1 class="title">H1 title</h1>
                <div class="block">
                    <h2 class="block-title">H2 title</h2>
                    <h3>H3 title</h3>
                    <h4>H4 title</h4>

                    <p>
                        Etiam placerat orci a venenatis vulputate. Aliquam lobortis fermentum erat. Curabitur ac egestas sapien. Etiam at mi nec ex hendrerit dignissim. Integer eget luctus orci, nec vulputate odio. Nam at pulvinar nulla. Nunc malesuada felis id diam placerat suscipit. Curabitur in facilisis magna. Vivamus et mauris eu ante fringilla placerat. Morbi et enim urna. Proin aliquet blandit luctus. Suspendisse nec diam lacus. In vulputate velit vel dui placerat porttitor eu ut elit. Integer semper vehicula turpis vel auctor. 
                    </p>

                    <p>
                        Etiam placerat orci a venenatis vulputate. Aliquam lobortis fermentum erat. Curabitur ac egestas sapien. Etiam at mi nec ex hendrerit dignissim. Integer eget luctus orci, nec vulputate odio. Nam at pulvinar nulla. Nunc malesuada felis id diam placerat suscipit. Curabitur in facilisis magna. Vivamus et mauris eu ante fringilla placerat. Morbi et enim urna. Proin aliquet blandit luctus. Suspendisse nec diam lacus. In vulputate velit vel dui placerat porttitor eu ut elit. Integer semper vehicula turpis vel auctor. 
                    </p>

                    <div class="form-block">
                        <div class="form-header">
                            <h4>Form name</h4>
                        </div>
                        <div class="form-content">
                            <form action="process.php" method="POST">

                                <div class="form-group">
                                    <label>Text:</label>
                                    <input type="text" name="email" placeholder="Input email">
                                </div>
                                <div class="form-group">
                                    <label>Textarea:</label>
                                    <textarea name="text" placeholder="Text"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Select option:</label>
                                    <select name="selected-options">
                                        <option value="Value_1">Option_1</option>
                                        <option value="Value_2">Option_2</option>
                                        <option value="Value_3">Option_3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox">Checkbox:</label>
                                    <input name="checkbox" type="checkbox">
                                </div>
                                <div class="form-group">
                                    <label class="radio">Radio-1</label>
                                    <input name="radio" type="radio">
                                </div>
                                <div class="form-group">
                                    <label class="radio">Radio-2</label>
                                    <input name="radio" type="radio">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="table-block">
                        <table>
                            <thead>
                                <tr>
                                    <th>Column1</th>
                                    <th>Column2</th>
                                    <th>Column3</th>
                                    <th>Column4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>value</td>
                                    <td>value</td>
                                    <td>value</td>
                                    <td>value</td>
                                </tr>
                                <tr>
                                    <td>value</td>
                                    <td>value</td>
                                    <td>value</td>
                                    <td>value</td>
                                </tr>
                                <tr>
                                    <td>value</td>
                                    <td>value</td>
                                    <td>value</td>
                                    <td>value</td>
                                </tr>
                                <tr>
                                    <td>value</td>
                                    <td>value</td>
                                    <td>value</td>
                                    <td>value</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div id="footer">
                <div class="footer-author">
                    <p>© Emploees 2018 </p>
                </div>
            </div>
        </div>
    </body>
</html>