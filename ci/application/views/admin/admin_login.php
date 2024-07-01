<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
</head>
<body>
    <h2>Login Admin</h2>
    <?php if (isset($error)) { echo '<p>'.$error.'</p>'; } ?>
    <?php echo form_open('admin/login'); ?>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" name="submit" value="Login">
    <?php echo form_close(); ?>
</body>
</html>