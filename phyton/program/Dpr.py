class Dpr:
    
    # Attributes dari class Dpr
    __id = ""
    __nama = ""
    __bidang = ""
    __partai = ""
    
    # Constructors
    # methods dari class Dpr
    def __init__(self, id = "", nama ="", bidang = "", partai = ""):
        # Set attributes pada class Dpr
        self.__id = id
        self.__nama = nama
        self.__bidang = bidang
        self.__partai = partai


    # Getter dan Setter

    # Getter dan setter untuk id Dpr
    def get_id(self):
        return self.__id
    def set_id(self, id):
        self.__id = id
        
    # Getter dan setter untuk nama Dpr
    def get_nama(self):
        return self.__nama
    def set_nama(self, nama):
        self.__nama = nama
        
    # Getter dan setter untuk bidang Dpr
    def get_bidang(self):
        return self.__bidang
    def set_bidang(self, bidang):
        self.__bidang = bidang
        
    # Getter dan setter untuk partai Dpr
    def get_partai(self):
        return self.__partai
    def set_partai(self, partai):
        self.__partai = partai