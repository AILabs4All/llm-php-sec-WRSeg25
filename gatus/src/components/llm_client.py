import os
from google import genai
from google.genai import types
from openai import OpenAI

class LLMClient():
    def enviar_llm(self, modelo, conteudo):
        if modelo in ["gpt-5-nano", "gpt-4.1-mini", "gpt-4.1-nano"]:
            return self.response_client_openai(modelo, conteudo)
        elif modelo in ["deepseek-chat"]:
            return self.response_client_deepseek(modelo, conteudo)
        elif modelo in ["gemini-2.5-flash", "gemini-2.0-flash"]:
            return self.response_client_gemini(modelo, conteudo)
        else:
            return None
    
    def response_client_openai(self, model, content):
        print(f'OpenAI LLM Client: {model}')
        client = OpenAI()

        response = client.chat.completions.create(
            model=model,
            messages= [
                {"role": "user", "content": content}
            ]
        )
        return response.choices[0].message.content
    
    def response_client_deepseek(self, model, content):
        print(f'Deepseek LLM Client: {model}')
        client = OpenAI(api_key=os.getenv("DEEPSEEK_API_KEY"), base_url="https://api.deepseek.com")

        response = client.chat.completions.create(
            model=model,
            messages= [
                {"role": "user", "content": content}
            ]
        )
        return response.choices[0].message.content
    
    def response_client_gemini(self, model, content):
        print(f'Gemini LLM Client: {model}')
        client = genai.Client()
        response = client.models.generate_content(
            model = model,
            contents = content,
            config=types.GenerateContentConfig(
                thinking_config=types.ThinkingConfig(thinking_budget=0)
            )
        )
        return response.text
