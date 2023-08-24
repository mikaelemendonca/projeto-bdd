<?php

return [
    '/login' => \Alura\Armazenamento\Controller\FormularioLogin::class,
    '/fazer-login' => \Alura\Armazenamento\Controller\Login::class,
    '/logout' => \Alura\Armazenamento\Controller\Logout::class,
    '/novo-curso' => \Alura\Armazenamento\Controller\FormularioInsercaoCurso::class,
    '/nova-formacao' => \Alura\Armazenamento\Controller\FormularioInsercaoFormacao::class,
    '/salvar-curso' => \Alura\Armazenamento\Controller\PersistenciaCurso::class,
    '/salvar-formacao' => \Alura\Armazenamento\Controller\PersistenciaFormacao::class,
    '/listar-cursos' => \Alura\Armazenamento\Controller\ListaDeCursos::class,
    '/listar-formacoes' => \Alura\Armazenamento\Controller\ListaDeFormacoes::class,
    '/editar-curso' => \Alura\Armazenamento\Controller\FormularioEdicaoCurso::class,
    '/excluir-curso' => \Alura\Armazenamento\Controller\ExclusaoDeCurso::class,
];
