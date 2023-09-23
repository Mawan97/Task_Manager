<html>
<head>
    <title>Ubah Task</title>
</head>
<body>
    <h3 align="center">Form Ubah Task</h3>

    <?php 
    include "config.php";

    $id = $_GET ['id'];
    $data = mysqli_query($config, "Select * From tasks Where ID ='$id'");
    while ($tampil = mysqli_fetch_array($data)) {
    ?>

<form action="update.php" method="post">
<table align="center" width=50%>
    <tr>
        <td>Title</td>
        <td>:</td>
        <td>
            <input type="text" name="title" size="20" value="<?php echo $tampil ['title']; ?>" />
            <input style="display:none" type="text" name="id" value="<?php echo $tampil ['id']; ?>" />
        </td>
    </tr>
    <tr>
        <td>Description</td>
        <td>:</td>
        <td>
            <textarea name="description" size="250"><?php echo $tampil ['description']; ?></textarea>
        </td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td>
            <select name="status">
                <option value="<?php echo $tampil ['status']; ?>"><?php echo $tampil ['status']; ?></option>
                <option value="in progress">in progress</option>
                <option value="completed">completed</option>
                <option value="pending">pending</option>
            </select>
        </td>
    </tr>
    <?php
    }
    ?>
    <tr>
        <td></td>
        <td></td>
        <td>
            <input type="submit" name="ubah" value="Ubah">
            <input type="reset" name="batal" value="Batal">
            <input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
        </td>
</table>
</form>
</body>
</html>