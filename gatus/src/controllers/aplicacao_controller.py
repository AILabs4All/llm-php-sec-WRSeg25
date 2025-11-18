from components.helper import Helper
from models.analise import Analise
from views import aplicacao_view
from tabulate import tabulate

class AplicacaoController:
    path = None
    analise = None
    quiet = False

    def __init__(self):
        self.path = ""
        self.analise = Analise()

    # def entrada(self):
    #     aplicacao_view.inicio()

    #     opcao = -1
    #     while opcao != 0:
    #         aplicacao_view.menu()
    #         opcao = int(input("Digite a opção desejada: "))

    #         if opcao == 1:
    #             self.path = input("Digite o local do arquivo a ser analisado: ").strip()
    #             print("***** Local do arquivo indicado *****")
    #             print("")
            
    #         if opcao == 2:
    #             self.ler_para_analise_llm()

    #         if opcao == 3:
    #             self.ver_retorno_llm()
            
    def ler_para_analise_llm(self, model, test = False):
        if self.analise.enviar_analise_llm(self.path, model, test):
            Helper.mensagem("Análise do arquivo realizada com sucesso", self.quiet)
        #else:
        #    Helper.mensagem("Não foi possível analisar o arquivo", self.quiet)

        Helper.mensagem("", self.quiet)

    def ver_retorno_llm(self):
            retorno_json = self.analise.obter_resposta_json()
            Helper.mensagem(retorno_json, self.quiet)

    def ver_relatorio(self):
        resposta = self.analise.obter_resposta_dict()

        if (self.quiet == False) and (resposta != None):
            print(tabulate(resposta , headers="keys", tablefmt="simple_grid"))
