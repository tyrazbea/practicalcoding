//Aturcara ini adalah aturcara aliah suruh
public class aliahsuh1
{
String nama;
int umur;
String dorm;
 void data (String name,int um,String d)
 {
 nama=name;
 umur=um;
 dorm=d;
 }
 void display ()
 {
 System.out.println("Nama Pelajar : "+nama);
 System.out.println("Umur Pelajar : "+umur);
 System.out.println("Dorm : "+dorm);
 System.out.println("\n");
 }
public static void main (String args[])
 {
aliahsuh1 a=new aliahsuh1();
aliahsuh1 b=new aliahsuh1();
a.data ("Raqiqah",18,"G5");
a.display();
b.data ("Hadirah",17,"G5");
b.display();
}
}