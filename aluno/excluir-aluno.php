<?php
require_once('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM aluno WHERE id = :id";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        echo "<script>
                alert('Aluno excluído com sucesso!');
                window.location.href = 'listaalunos.php';
              </script>";
    } catch (PDOException $e) {
        echo "<script>
                alert('Ocorreu um erro ao excluir o aluno.');
                window.location.href = 'listaalunos.php';
              </script>";
    }
} else {
    // Se 'id' não estiver definido, redirecionar de volta para a página de lista de alunos
    echo "<script>
            window.location.href = 'listaalunos.php';
          </script>";
}
?>