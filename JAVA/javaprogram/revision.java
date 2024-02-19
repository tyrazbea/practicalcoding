//Aturcara ini adalah ulangkaji
public class revision
{
String nama;
int suhu;

void data (String name,int suhuu)
	{
	nama=name;
	suhu=suhuu;
	}

void display ()
	{
	System.out.println ("Nama Penduduk : "+nama);
	System.out.println ("Suhu Tempat Tinggal : "+suhu);
		if (suhu <30)
		System.out.println("Suhu Sejuk");
		else 
		System.out.println("Suhu Panas");
	}
public static void main (String args[])
	{	
	revision a= new revision ();
	revision b= new revision();
	a.data ("Raju",-3);
	a.display ();
	b.data ("Siti",100);
	b.display();
	}
}