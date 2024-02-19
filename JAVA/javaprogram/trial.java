//Aturcara ini adalah aturcara ulangkaji
public class trial {
	String NamaPelajar;
	String Kursus;
	int Markah; 
	String Gred; 	
void data (String Name,String Course,int Marks,String Grd)
	{
	NamaPelajar=Name;
	Kursus=Course;
	Markah=Marks;
	Gred=Grd;
	}
void display ()
	{
	System.out.println( "Nama Pelajar : "+NamaPelajar);
	System.out.println("Kursus : "+Kursus);
	System.out.println("Markah : "+Markah);	
		if (Markah>=0 && Markah<=39)
		System.out.println("Gred: E");
			else if (Markah>=40 && Markah<=59)
			System.out.println("Gred: D");
			else if (Markah>=60 && Markah<=69)
			System.out.println("Gred: C");
			else if (Markah>=70 && Markah<=79)
			System.out.println("Gred: B");
			else if (Markah>=80 && Markah<=100)
			System.out.print("Gred: A");
				else
				System.out.println("Masukkan markah dengan betullah!");
			System.out.println(" \n");			
	}
	public static void main(String args[])
	{
	trial a=new trial();
	trial b=new trial();
	a.data("Fazli","IPD",-7,"");
	a.display ();
	b.data("Timah","ISK",36,"");
	b.display();
	}
}