# Gatus

O **Gerador Automatizado de Testes Unificados de Segurança** é uma ferramenta para análise de vulnerabilidades de artefatos de software usando LLM.

## :package: Requisitos

* Python 3.13 ou superior
* Gerenciador de dependências *UV*
* Git (*opcional*)

---
O interpretador Python pode ser obtido [aqui](https://python.org/).

--- 

Para instalar o UV no Windows, pode usar o seguinte comando:

```
powershell -ExecutionPolicy ByPass -c "irm https://astral.sh/uv/install.ps1 | iex"
```

Para instalar o UV no Mac ou Linux, pode usar o seguinte comando:
```
curl -LsSf https://astral.sh/uv/install.sh | less
```

Em caso de dúvidas, a documentação do UV está disponível [aqui](https://docs.astral.sh/uv/).

## :books: Documentação

* <a href="1-funcionalidades.md">1. Funcionalidades </a>
* <a href="2-modelos.md">2. Modelos </a>

## :gear: Preparação

Caso tiver o git instalado, pode baixar a ferramenta utilizando o comando: 

```
git clone git@github.com:adrianogomes/gatus.git
```

Após isso é necessário criar o ambiente virtual com as dependências no diretório que foi baixado a ferramenta, utilizando o seguinte comando:

```
uv sync
```

A ferramenta disponibiliza o acesso através de CLI e de aplicação interativa.

## :computer: Execução

### CLI

A ferramenta pode ser executada via CLI no terminal usando o seguinte comando:

```
uv run python src/cli.py [OPCOES] COMANDOS [ARGUMENTOS]
```

<br>

> [!TIP]
> Para exibir os comandos disponíveis usar a opção --help, conforme o seguinte comando:

```
uv run python src/cli.py --help
```

A documentação dos comandos disponíveis pode ser acessada em <a href="docs/1-funcionalidades.md">Funcionalidades </a>.

