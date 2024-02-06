#include <iostream> 
#include <string>

using namespace std;

class Dpr{
    private:
        string id;
        string nama;
        string namaBidang;
        string namaPartai;

    public:
        Dpr(){
            this->id = "";
            this->nama = "";
            this->namaBidang = "";
            this->namaPartai = "";
        }

        Dpr(string id, string nama, string namaBidang, string namaPartai){
            this->id = id;
            this->nama = nama;
            this->namaBidang = namaBidang;
            this->namaPartai = namaPartai;
        }

        string get_id(){
            return this->id;
        }
        void set_id(string id){
            this->id = id;
        }

        string get_nama(){
            return this->nama;
        }
        void set_nama(string nama){
            this->nama = nama;
        }

        string get_namaBidang(){
            return this->namaBidang;
        }
        void set_namaBidang(string namaBidang){
            this->namaBidang = namaBidang;
        }

        string get_namaPartai(){
            return this->namaPartai;
        }
        void set_namaPartai(string namaPartai){
            this->namaPartai = namaPartai;
        }

        ~Dpr(){
        }
};