//Aturcara ini adalah aturcara aliah suruh
public class aliahsuh
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
 }
public static void main (String args[])
aliahsuh a=new aliahsuh;
aliahsuh b=new aliahsuh;
a.data ("Raqiqah",18,"G5");
a.display();
b.data ("Hadirah",17,"G5");
b.display();
}
}