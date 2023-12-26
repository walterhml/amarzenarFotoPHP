<?php
$titulo = $_POST['titulo'];
$cor = $_POST['cor'];
$fonte = $_POST['fonte'];
$foto = $_FILES['foto']['tmp_name'];

echo "<html><body style='color: $cor; font-family: $fonte;'>";
echo "<h1>$titulo</h1>";
echo "<img src='" . $foto . "' />";
echo "</body></html>";
?>

<form method="post" enctype="multipart/form-data">
    <label for="titulo">Título:</label><br>
    <input type="text" id="titulo" name="titulo"><br>
    <label for="cor">Cor:</label><br>
    <input type="color" id="cor" name="cor" value="#000000"><br>
    <label for="fonte">Fonte:</label><br>
    <select id="fonte" name="fonte">
        <option value="Arial">Arial</option>
        <option value="Verdana">Verdana</option>
        <option value="Courier New">Courier New</option>
    </select><br>
    <label for="foto">Foto:</label><br>
    <input type="file" id="foto" name="foto"><br>
    <input type="submit" value="Enviar">
</form>
