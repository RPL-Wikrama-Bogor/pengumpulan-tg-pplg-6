lanjut = True
while(lanjut):
    option = input("lanjut atau tidak? (y/n) ")
    if(option == 'n'):
        lanjut = False
        print("program berhenti!")
    else:
        lanjut = True
        print("program berlanjut!")