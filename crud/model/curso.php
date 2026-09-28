<?php

// inicia o php

class Curso
{
    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function listar()
    {
        $sql = "
            SELECT
                curso.id,
                curso.nome,
                curso.carga_horaria
            FROM curso
            ORDER BY curso.id ASC
        ";

        $resultado = $this->con->query($sql);

        $cursos = [];

        if (!$resultado) {
            return $cursos;
        }

        while ($linha = $resultado->fetch_assoc()) {
            $cursos[] = $linha;
        }

        return $cursos;
    }
}
?>
