class Helper:
    @classmethod
    def mensagem(self, msg, quiet):
        if not quiet:
            print(msg)
            