$(document).ready(function () {

    $('#tabela-alunos').DataTable({
        ajax: "../controller/alunoController.php?acao=listar",

        columns: [
            { data: "id" },
            { data: "nome" },
            { data: "email" },
            { data: "curso" },
            { data: "carga_horaria" }
        ]
    });

});
