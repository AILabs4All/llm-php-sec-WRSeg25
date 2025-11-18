from components.llm_client import LLMClient
from httpx import ConnectError
import json

from dotenv import load_dotenv

load_dotenv(".env")

class Analise:
    retorno = None

    def enviar_analise_llm(self, path, model, test = False):
        if test == True:
            response = open("saida.exemplo.txt", "r")
            self.retorno = response.read()
        else:
            prompt = open("prompt.txt", "r")

            try:
                arquivo = open(path, "r")

                llm_client = LLMClient()
                self.retorno = llm_client.enviar_llm(model, prompt.read() + arquivo.read())

            except FileNotFoundError:
                print("Erro: Arquivo não encontrado")
                return False
            except ConnectError:
                print("Erro: Verifica sua conexão, não foi possível comunicar com a LLM.")
                return False
            except Exception as e:
                print("Erro: Não foi possível enviar para LLM")
                print(e)
                return False
            
        return True
    
    def obter_resposta_json(self):
        return self.retorno
    
    def obter_resposta_dict(self):
        if self.retorno == None:
            return None
        
        return json.loads(self.retorno.strip().replace("```json", "").replace("```", ""))

