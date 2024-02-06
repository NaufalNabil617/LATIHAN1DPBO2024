#include <bits/stdc++.h>
#include "Dpr.cpp"

using namespace std;

int main(){
    list<Dpr> llist;
    int query = 0;

    while(query < 5){
        cout << "PILIH QUERY" << '\n';
        cout << "1. CREATE" << '\n';
        cout << "2. READ" << '\n';
        cout << "3. UPDATE" << '\n';
        cout << "4. DELETE" << '\n';
        cout << "5. EXIT" << '\n';

        int i;

        cin >> query;

        if(query == 1){
            int n = 0;
            int find = 0;
            string id;
            string nama;
            string namaBidang;
            string namaPartai;

            cin >> n;

            for(i = 0; i < n; i++){
                Dpr temp;
                cin >> id >> nama >> namaBidang >> namaPartai;
                for(list<Dpr>::iterator it = llist.begin(); it != llist.end(); it++){
                    if(id == it->get_id()){
                        find = 1;
                    }
                }
                if(find == 1){
                    cout << "ID sudah ada" << '\n';
                }
                else {
                    temp.set_id(id);
                    temp.set_nama(nama);
                    temp.set_namaBidang(namaBidang);
                    temp.set_namaPartai(namaPartai);
                    llist.push_back(temp);
                    cout<< "Berhasil Membuat data" << '\n';
                }
            }
        }
        else if(query == 2){
            cout<< "DAFTAR NAMA DEWAN PERWAKILAN RAKYA" << '\n';
            i = 0;
            for(list<Dpr>::iterator it = llist.begin(); it != llist.end(); it++){
                cout << (i+1) << ". " << it->get_nama() << '\n';
                cout << "   ID           : " << it->get_id() << '\n';
                cout << "   Nama Bidang : " << it->get_namaBidang() << '\n';
                cout << "   Nama Partai      : " << it->get_namaPartai() << '\n';
                i++;
            }
        }
        else if(query == 3){
            string ubah;
            int find = 0;
            string id;
            string nama;
            string namaBidang;
            string namaPartai;

            cout<< "Masukkan ID data yang akan diupdate" << '\n';
            cin  >> ubah;

            for(list<Dpr>::iterator it = llist.begin(); it != llist.end(); it++){
                if(ubah == it->get_id()){
                    cin >> nama >> namaBidang >> namaPartai;
                    it->set_nama(nama);
                    it->set_namaBidang(namaBidang);
                    it->set_namaPartai(namaPartai);
                    find = 1;
                    cout<< "Berhasil!" << '\n';
                } 
            }
            if(find == 0){
                cout<< "Data tidak ada" << '\n';
            }
        }
        else if(query == 4){
            string apus;
            int find = 0;
            cout<< "Masukkan ID data yang akan didelete" << '\n';
            cin  >> apus;
            for(list<Dpr>::iterator it = llist.begin(); it != llist.end(); it++){
                if(apus == it->get_id()){
                    llist.erase(it);
                    find = 1;
                    it = llist.end();
                    cout<< "Delete berhasil!" << '\n';
                } 
            }
            if(find == 0){
                cout<< "Data tidak ada!" << '\n';
            }
        }
    }

    return 0;
}