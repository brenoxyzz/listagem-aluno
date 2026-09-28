<?php

// inicia o php

class Aluno
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
                aluno.id,
                aluno.nome,
                aluno.email,
                curso.nome AS curso,
                curso.carga_horaria AS carga_horaria
            FROM aluno
            LEFT JOIN curso
                ON aluno.id_curso = curso.id
            ORDER BY aluno.id ASC
        ";

        $resultado = $this->con->query($sql);

        $alunos = [];

        if (!$resultado) {
            return $alunos;
        }

        while ($linha = $resultado->fetch_assoc()) {
            $alunos[] = $linha;
        }

        return $alunos;
    }
}
?>
