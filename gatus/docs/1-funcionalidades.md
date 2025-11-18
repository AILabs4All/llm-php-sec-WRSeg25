# Funcionalidades

## Análise de vulnerabilidades de código fonte PHP

Para identificação de vulnerabilidades existentes em código-fonte PHP deve ser passado como parâmetro o subcomando *analyze* e a localização do código-fonte a ser analizado conforme o comando abaixo:

```
uv run python src/cli.py analyze [CAMINHO DO ARQUIVO] [MODELO]
```

A saída padrão será apresentada em formato de tabela com a identificação da vulnerabilidade, a linha que ocorreu e o grau de risco classificado pela LLM.

Caso queira obter o formato json retornado pela LLM, ao invés da tabela, adicionar o opção *--json** no comando.

Caso queira definir um modelo específico via parâmetro, mais informações disponíveis em <a href="2-modelos.md">Modelos</a>.
