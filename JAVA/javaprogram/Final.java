//Aturcara ini adalah aturcaara java
class Final
{
	String NamaPel;
	int Markah;
	char Gred;
}
void setData(String n, int m)
{
	NamaPel=n;
	Markah=m;
}
void getGrade(int Markah)
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
	 System.out.prinln("Markah Pelajar: "+Markah);
	 System.out.println("Gred: "+Gred);
	 System.out.println("\n");
 }
 public static void main(String args[])
 {
	 final P1=new final();
	 P1.setData=("Fare",80);
	 P1.getGrade=(80);
	 P1.displayData();
	 
	 final P2=new final();
	 P2.setData=("Fare",20);
	 P2.getGrade=(20);
	 P2.displayData();
	 
	 final P3=new final();
	 P3.setData=("Fare",100);
	 P3.getGrade=(100);
	 P3.displayData();
 }
 }
 } 
 } 