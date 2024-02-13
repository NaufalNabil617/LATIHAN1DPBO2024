#Import file
from Dpr import Dpr

# Deklarasi linked list library
Dprs = []

query = int(0)

#Loop untuk menjalankan CRUD
while (query < 5):
    print()
    print("DATA DPR")
    print("PILIH QUERY")
    print("1. CREATE DATA")
    print("2. READ DATA")
    print("3. UPDATE DATA")
    print("4. DELETE DATA")
    print("5. EXIT")

    # Menampung pilihan user
    query = int(input())
    find = int(0)

    # Menjalankan Create Data
    if (query == 1):
        
        # Menampung jumlah data yang akan ditambahkan
        print("Jumlah data yang akan dimasukkan:")
        n = int(input())
        
        print("Masukkan data anda dengan urutan sebagai berikut")
        print("id - nama - bidang - partai")

        find = int(0)
        # Menambahkan Data List
        for i in range (n):
            
            id = str(input())
            nama = str(input())
            bidang = str(input())
            partai = str(input())

            # Set data ke list Dpr
            Dprs.append(Dpr(id, nama, bidang, partai))
            print("Create data berhasil!")

    # Menjalankan Read Data List
    elif query == 2:
        print("+-----+-----------------+--------------------+--------------------+---------------+")
        print("| {:<3} | {:<15} | {:<18} | {:<18} | {:<13} |".format("No", "ID", "Nama", "Bidang", "Partai"))
        print("+-----+-----------------+--------------------+--------------------+---------------+")
        for i, dpr in enumerate(Dprs, 1):
            print("| {:<3} | {:<15} | {:<18} | {:<18} | {:<13} |".format(i, dpr.get_id(), dpr.get_nama(), dpr.get_bidang(), dpr.get_partai()))
            print("+-----+-----------------+--------------------+--------------------+---------------+")

            
    # Menjalankan Update Data
    elif(query == 3):
        find = int(0)
        # Tampung nama yang akan diupdate
        print("Masukkan id data yang akan di-update")
        ubah = str(input())
        for Dpr in Dprs:  
            # Jika nama yg akan diupdate tersedia  
            if ubah == Dpr.get_id():
                # Tampung data baru lalu set kembali list yg akan diupdate
                print("Masukkan data update dengan urutan sebagai berikut")
                print("nama - bidang - partai")
                nama = str(input())
                bidang = str(input())
                partai = str(input())
                    
                Dpr.set_id(id)
                Dpr.set_nama(Dpr.get_nama())
                Dpr.set_bidang(bidang)
                Dpr.set_partai(partai)
                find = 1
                print("Update data berhasil!")

        if(find == 0):
            print("Gagal, data yang anda masukkan tidak ada!")
            
    # Menjalankan Delete Data
    elif(query == 4):
        find = int(0)
        
        # Tampung nama yang akan didelete
        print("Masukkan id data yang akan di-delete")
        apus =str(input())
        
        # Delete List
        for Dpr in Dprs:
            # Jika nama yg akan didelete tersedia
            if apus == Dpr.get_id():
                # Delete list
                Dprs.remove(Dpr)
                find = 1
                print("Delete data berhasil!")

        if(find == 0):
            print("Gagal, data yang anda masukkan tidak ada!")