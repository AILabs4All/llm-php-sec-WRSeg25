import typer
from typing_extensions import Annotated
from components.helper import Helper
from controllers.aplicacao_controller import AplicacaoController
from dotenv import load_dotenv

load_dotenv(".env")
nome_aplicacao = "gatus - version 0.1"

app = typer.Typer()

# @app.command()
# def interative():
#     """
#     Starts the interative mode with options menu of tool
#     """
#     app_controller = AplicacaoController()
#     app_controller.entrada()

@app.command()
def analyze(
        filename: Annotated[str, typer.Argument(help="Source-code file in PHP format that it will be analysed by LLM")],
        model: Annotated[str, typer.Argument(help="Set LLM model")] = "gemini-2.0-flash",
        json:  Annotated[bool, typer.Option(help="Returns json response by LLM")] = False,
        quiet: Annotated[bool, typer.Option(help="Enable quiet mode, do not show prints in prompt")] = False,
        test: Annotated[bool, typer.Option(help="Enable test mode, do not use LLM")] = False
    ):
    """
    Read a PHP file and it generate the JSON with report vulnerabilities by LLM
    """
    app_controller = AplicacaoController()
    app_controller.quiet = quiet
    app_controller.path = filename

    Helper.mensagem(nome_aplicacao, quiet)

    if test == True:
        app_controller.ler_para_analise_llm(model=model, test=True)
    else:
        app_controller.ler_para_analise_llm(model=model)
    
    if json == True:
        app_controller.ver_retorno_llm()
    else:
        app_controller.ver_relatorio()

@app.command()
def about():
    """
    Show informations about this tool
    """
    print("gatus - Gerador Automatizado de Testes Unificados de Segurança")
    print("version 0.1 - Outubro/2025 - Adriano Gebert Gomes")

@app.command()
def version():
    """
    Show version this tool
    """
    print(nome_aplicacao)

if __name__ == "__main__":
    app()