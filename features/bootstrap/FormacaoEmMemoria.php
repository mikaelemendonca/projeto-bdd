<?php

use Behat\Behat\Tester\Exception\PendingException;
use Alura\Armazenamento\Entity\Formacao;
use Behat\Behat\Context\Context;
use Doctrine\ORM\EntityManagerInterface;

class FormacaoEmMemoria implements Context
{
    private string $mensagemDeErro = '';
    private Formacao $formacao;

    /**
     * @When eu criar uma formação com a descrição :arg1
     */
    public function euCriarUmaFormacaoComADescricao(string $descricaoFormacao)
    {
        $this->formacao = new Formacao();
        try {
            $this->formacao->setDescricao($descricaoFormacao);
        } catch (\InvalidArgumentException $e) {
            $this->mensagemDeErro = $e->getMessage();
        }
    }

    /**
     * @Then eu vou ver a seguinte mensagem de erro :arg1
     */
    public function euVouVerASeguinteMensagemDeErro($mensagemDeErro)
    {
        assert($this->mensagemDeErro === $mensagemDeErro);
    }

    /**
     * @Then eu devo ter uma formação criada com a descrição :arg1
     */
    public function euDevoTerUmaFormacaoCriadaComADescricao($descricao)
    {
        assert($this->formacao->getDescricao() === $descricao);
    }
}
