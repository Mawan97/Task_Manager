<html>
<head>
    <title>Tambah Task</title>
</head>
<body>
    <h3 align="center">Form Tambah Task</h3>

<form action="save.php" method="post">
<table align="center" width=50%>
    <tr>
        <td>Title</td>
        <td>:</td>
        <td>
            <input type="text" name="title" size="20" />
        </td>
    </tr>
    <tr>
        <td>Description</td>
        <td>:</td>
        <td>
            <textarea name="description" size="250"></textarea>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <input type="submit" name="simpan" value="Simpan">
            <input type="reset" name="batal" value="Batal">
            <input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
        </td>
    <tr style="display:none">
        <td>
            <input type="text" name="status" value="pending" />
        </td>
    </tr>
</table>
</form>
</body>
</html>