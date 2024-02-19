//Aturcara ini adalah aturcara java
public class Pelajar
{
	String NamaPelajar;
	int Markah;
	int Gred;

//Aturcara ini adalah aturcara Java
public class Final
{
String NamaPel;
char Gred;
int MarkahPel;


//objek 1-3 telah dinamakan
void setData(String Nama,int Mark)
{
NamaPel=Nama;
MarkahPel=Mark;
}

//Mari dapatkan Gred
char getGrade()
{
	if (MarkahPel >0 && MarkahPel <39){
		Gred='F';
		}
	else if (MarkahPel >40 && MarkahPel <49){
		Gred='E';
		}	
	else if (MarkahPel >50 && MarkahPel <59){
		Gred='D';
		}	
	else if (MarkahPel >60 && MarkahPel <69){
		Gred='C';
		}	
	else if (MarkahPel >70 && MarkahPel <79){
		Gred='B';
		}	
	else{
		Gred='A';
		}
		}

//Display data 
void displayData()
{
System.out.println("Nama Pelajar : " +NamaPel);
System.out.println("Markah : " +MarkahPel);
System.out.println("Gred : " +Gred);

}

public static void main (String [] args)
{
Final P1 =new Final();
Final P2 =new Final();
Final P3=new Final();

P1.setData("Mohd Ashraf",75);
P1.getGrade();
P1.displayData ();

P2.setData("Ahmad Haikal",89);
P2.getGrade();
P2.displayData();

P3.setData("Amir Hamzah",35);
P3.getGrade();
P3.displayData();

}
}
