//Aturcara Sabrina Suh
public class penjara
{
String nama;
int markah;
char gred;
 void setdata (String name,int marks)
 {
 nama=name;
 markah=marks;
 }
 char getgrade (int markah)
 {
 if (markah>=90 && markah<=100)
{	gred='A';	}
else if (markah >=80 && markah<=89)
{	gred='B';	}
else if (markah>=70 && markah <=79)
{	gred='C';	}
else if (markah>=60 && markah <=69)
{	gred='D';	}
else if (markah>=50 && markah<=59)
{	gred='E';	}
else if (markah>=40 && markah<=49)
{	gred='F';	}
else if (markah>=0 && markah<=39)
{	gred='G';	}
return gred;
}
void display ()
{
System.out.println("Nama Pelajar : "+nama);
System.out.println("Markah : "+markah );
System.out.println("Gred : "+gred);
System.out.println("\n");
}
public static void main (String args[])
{
penjara p1=new penjara();
p1.setdata ("Irfan",90);
p1.getgrade (90);
p1.display ();

penjara p2=new penjara();
p2.setdata ("Fadhilah",100);
p2.getgrade (100);
p2.display ();

penjara p3=new penjara();
p3.setdata ("Ismail",75);
p3.getgrade (75);
p3.display ();
}
}