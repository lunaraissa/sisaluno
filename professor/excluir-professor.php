<?php
require_once('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM professor WHERE id = :id";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        echo "<script>
                alert('professor excluído com sucesso!');
                window.location.href = 'listaprofessores.php';
              </script>";
    } catch (PDOException $e) {
        echo "<script>
                alert('Ocorreu um erro ao excluir o professor.');
                window.location.href = 'listaprofessores.php';
              </script>";
    }
} else {
    // Se 'id' não estiver definido, redirecionar de volta para a página de lista de professors
    echo "<script>
            window.location.href = 'listaprofessores.php';
          </script>";
}
?>