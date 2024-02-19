//Aturcara ini adalah aturcaara java
class fare
{
	String NamaPel;
	int MarkahPel;
	char Gred;

void setData(String n, int m)
{
	NamaPel=n;
	MarkahPel=m;
}
char getGrade(int Markah)
{
	if (MarkahPel >=0 && MarkahPel <=39)
	{
		Gred='F';
	}
	else if (MarkahPel >=40 && MarkahPel <=49)
	{
		Gred='E';
	}	
	else if (MarkahPel >=50 && MarkahPel <=59)
	{
		Gred='D';
	}	
	else if (MarkahPel >=60 && MarkahPel <=69)
	{
		Gred='C';
	}	
	else if (MarkahPel >=70 && MarkahPel <=79)
	{
		Gred='B';
	}	
	else if(MarkahPel >=80 && MarkahPel <=100 )
	{
		Gred='A';
	}
	else{
		Gred='-';
	}
}
	void displayData()
 {
	 System.out.println("Nama Pelajar: "+NamaPel);
	 System.out.println("Markah Pelajar: "+Markah);
	 System.out.println("Gred: "+Gred);
	 System.out.println("\n");
 }
 public static void main(String args[])
 {
	 fare P1=new fare();
	 P1.setData("Fare",80);
	 P1.getGrade(80);
	 P1.displayData();
	 
	 fare P2=new fare();
	 P2.setData("Far",20);
	 P2.getGrade(20);
	 P2.displayData();
	 
	 fare P3=new fare();
	 P3.setData("Fa",100);
	 P3.getGrade(100);
	 P3.displayData();
 }
 }
 