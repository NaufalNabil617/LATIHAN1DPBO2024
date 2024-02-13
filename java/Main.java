//Import library
import java.util.Scanner;
import java.util.ArrayList;

public class Main{
    public static void main(String[] args){   
        //Deklarasi linked list library
        ArrayList<Dpr> list = new ArrayList<>();
        int query = 0;
        Scanner sc = new Scanner(System.in);

        //Loop untuk menjalankan CRUD
        while(query < 5){
            System.out.println();
            System.out.println("DATA DPR");
            System.out.println("PILIH QUERY");
            System.out.println("1. CREATE DATA");
            System.out.println("2. READ DATA");
            System.out.println("3. UPDATE DATA");
            System.out.println("4. DELETE DATA");
            System.out.println("5. EXIT");

            int i;
            //Menampung pilihan user
            query = sc.nextInt();

            // Menjalankan Create Data
            if(query == 1){
                int n = 0;
                int find = 0;
                String ID;
                String nama;
                String namaBidang;
                String namaPartai;

                //Menampung jumlah data yang akan ditambahkan
                System.out.print("Jumlah data yang akan dimasukkan:");
                n = sc.nextInt();
                System.out.println("Masukkan data anda dengan urutan sebagai berikut");
                System.out.println("ID - Nama - Bidang - Partai");
                
                //Menambahkan Data List
                for(i = 0; i < n; i++){
                    ID = sc.next();
                    nama = sc.next();
                    namaBidang = sc.next();
                    namaPartai = sc.next();

                    //Cek apakah ID tersedia
                    for(i = 0; i < list.size(); i++){
                        if(ID.compareTo(list.get(i).getID()) == 0){
                            find = 1;
                        }
                    }

                    //Gagal tambah data
                    if(find == 1){
                        System.out.println("data gagal ditambahkan!");
                    }
                    else{
                        //Set data ke list Dpr
                        Dpr temp = new Dpr();
                        temp.setID(ID); 
                        temp.setnama(nama); 
                        temp.setnamaBidang(namaBidang); 
                        temp.setnamaPartai(namaPartai);
                        list.add(temp);
                        System.out.println("Create data berhasil!");
                    }
                }
            }
    
            else if (query == 2) {
                System.out.println("DAFTAR NAMA DPR");

                // Print table header
                System.out.println("+-----+-----------------+--------------------+--------------------+---------------+");

                // Print column headers
                System.out.println("| No  |       ID        |        Nama        |       Bidang       |     Partai    |");
                System.out.println("+-----+-----------------+--------------------+--------------------+---------------+");

                // Print table data
                for (i = 0; i < list.size(); i++) {
                    Dpr dpr = list.get(i);
                    System.out.printf("| %-3d | %-15s | %-18s | %-18s | %-13s |\n", i + 1, dpr.getID(), dpr.getnama(), dpr.getnamaBidang(), dpr.getnamaPartai());
                }

                // Print table footer
                System.out.println("+-----+-----------------+--------------------+--------------------+---------------+");
            }
            //Menjalankan Update Data
            else if(query == 3){
                String ubah;
                int find = 0;
                String nama;
                String namaBidang;
                String namaPartai;

                //Tampung nama yang akan diupdate
                System.out.println("Masukkan id data yang akan di-update");
                ubah = sc.next();

                //Update list
                for(i = 0; i < list.size(); i++){
                    //Jika nama yg akan diupdate tersedia
                    if(ubah.compareTo(list.get(i).getID()) == 0){
                        System.out.println("Masukkan data update dengan urutan sebagai berikut");
                        System.out.println("NAMA - BIDANG - PARTAI");
                        //Tampung data baru lalu set kembali list yg akan diupdate
                        nama = sc.next();
                        namaBidang = sc.next();
                        namaPartai = sc.next();
                        Dpr temp = new Dpr();
                        temp.setID(ubah); 
                        temp.setnama(nama);
                        temp.setnamaBidang(namaBidang);
                        temp.setnamaPartai(namaPartai);
                        list.set(i, temp);
                        find = 1;
                        System.out.println("Update data berhasil!");
                    } 
                }
                if(find == 0){
                    System.out.println("Gagal, data yang anda masukkan tidak ada!");
                }
            }
            //Menjalankan Delete Data
            else if(query == 4){
                String apus;
                int find = 0;

                //Tampung nama yang akan didelete
                System.out.println("Masukkan ID data yang akan di-delete");
                apus = sc.next();

                //Delete List
                for(i = 0; i < list.size(); i++){
                    //Jika nama yg akan didelete tersedia
                    if(apus.compareTo(list.get(i).getID()) == 0){
                        //Delete list
                        list.remove(i);
                        find = 1;
                        i = list.size();
                        System.out.println("Delete data berhasil!");
                    } 
                }
                if(find == 0){
                    System.out.println("Gagal, data yang anda masukkan tidak ada!");
                }
            }
        }
        sc.close();
    }
}