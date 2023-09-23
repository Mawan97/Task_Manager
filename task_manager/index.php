<!DOCTYPE html>
<html>
<head>
    <title> Task Manager </title>
</head>
<body>
<h3 align="center"> Task Manager </h3>

<a href="new.php">Tambah Task</a>
<p>
<form method="GET" action="index.php" style="text-align:center">
    <label>Pencarian : </label>
    <input type="text" name="cari" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari']; } ?>">
    <button type="submit">Cari</button>
</form>
<p>
<table border="1" align="center" width="100%">
    <tr bgcolor="lightgrey">
        <td>Title</td>
        <td>Status</td>
        <td></td>
    </tr>

    <?php
        include "config.php";
        if(isset($_GET['cari'])) {
            $pencarian = $_GET['cari'];
            $query = "Select * From tasks Where title like '%$pencarian%' or status like '%$pencarian%'";
        } else {
            $query = "Select * From tasks";
        }
        
        $tampil = mysqli_query($config, $query);
        while ($data = mysqli_fetch_array($tampil)) {
    ?>

    <tr>        
        <td><?php echo $data['title']; ?></td>
        <td><?php echo $data['status']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $data['id']; ?>">Ubah task</a> 
        </td>    
    </tr>
    <?php
        }
    ?> 
    
</table>
</body>
</html>