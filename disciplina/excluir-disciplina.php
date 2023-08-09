<?php
    require_once('../conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM disciplina WHERE id = :id";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        echo "<script>
                alert('Disciplina excluída com sucesso!');
                window.location.href = 'listadisciplina.php';
              </script>";
    } catch (PDOException $e) {
        echo "<script>
                alert('Ocorreu um erro ao excluir a disciplina.');
                window.location.href = 'listapdisciplina.php';
              </script>";
    }
} else {
    // Se 'id' não estiver definido, redirecionar de volta para a página de lista de disciplina
    echo "<script>
            window.location.href = 'listadisciplina.php';
          </script>";
}
?>