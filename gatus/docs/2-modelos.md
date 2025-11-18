# Modelos

Esta aplicação permite definir qual modelo de LLM (*Language Large Model*) será utilizado para execução e/ou análise a ser realizada.

Caso não seja especificado, será adotado como modelo o **gemini-2.0-flash** por padrão.

## Modelos disponíveis

- gpt-5-nano
- gpt-4.1-mini
- gpt-4.1-nano
- deepseek-chat
- gemini-2.5-flash
- gemini-2.0-flash

## Comando

Para definir um modelo específico, usar exatamente o nome como está na lista **Modelos disponíveis** no parâmetro [MODELO], como no exemplo abaixo:

```
uv run python src/cli.py analyze [CAMINHO DO ARQUIVO] deepseek-chat
```