//Aturcara ini adalah latihan amali
public class aturcara
	{
	String Nama;
	int Umur;
	String Jabatan;
void getData (String name,int old,String department)
	{
	Nama=name;
	Umur=old;
	Jabatan=department;
	}
void getDisplay()
	{
	System.out.println("Nama Pelajar : "+Nama);
	System.out.println("Umur Pelajar : "+Umur);
	System.out.println("Jabatan : " +Jabatan);
	System.out.println("\n");
	}
public static void main(String args[])
	{
	aturcara a=new aturcara();
	aturcara b=new aturcara();
	aturcara c=new aturcara();
	
	a.getData("Aiman",20,"Teknologi Maklumat");
	a.getDisplay();
	
	b.getData("Ahmad",20,"Teknologi Pembinaan");
	b.getDisplay();
	
	c.getData("Aman",18,"Teknologi Kimpalan");
	c.getDisplay();
	}
}