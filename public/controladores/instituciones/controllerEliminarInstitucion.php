<?php

include ('../../configuracion.php');

$pk_id_institucion = $_GET['pk_id_institucion'];

try {
    $sql_institucion = "DELETE FROM tbl_institucion WHERE pk_id_institucion= :pk_id_institucion";
    $query_institucion = $pdo->prepare($sql_institucion);
    $query_institucion->bindParam(':pk_id_institucion', $pk_id_institucion, PDO::PARAM_INT);

    if ($query_institucion->execute()) {
        session_start();
        $_SESSION['mensaje'] = "La institución ha sido eliminada correctamente.";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/interfaces/instituciones/index.php');
    } else {
        session_start();
        $_SESSION['mensaje'] = "Ha habido un error al eliminar la institución.";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/interfaces/instituciones/index.php');
    }
} catch (PDOException $e) {
    if ($e->getCode() == '23000') {
        // Código de error para violación de integridad referencial
        session_start();
        $_SESSION['mensaje'] = "Error: No se puede eliminar la institución debido a relaciones dependientes en otras tablas.";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/interfaces/instituciones/index.php');
    } else {
        // Manejar otras excepciones PDO aquí si es necesario
        throw $e;
    }
}

header('Location: '.$URL.'/interfaces/instituciones/index.php');