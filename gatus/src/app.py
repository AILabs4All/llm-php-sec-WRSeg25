from controllers.aplicacao_controller import AplicacaoController
from views import aplicacao_view
from dotenv import load_dotenv

load_dotenv(".env")

if __name__ == "__main__":
    app = AplicacaoController()
    app.entrada()
