//Aturcara ini adalah aturcara method class
import java.util.Scanner;
public class ulangkaji
{
	public static void main(String args [])
{
	Scanner input= new Scanner (System.in);
	int markah;
	
	System.out.print("Masukkan markah =");
	markah=input.nextInt();

	 if (markah >=0 && <=39)
	System.out.println("Gred anda ialah: E");
	else if (markah >=50 && <=59)
	System.out.println("Gred anda ialah: D");
	else if (markah >=60 && <=69)
	System.out.println("Gred anda ialah: C");
	else if (markah >=70 && <=79)
	System.out.println("Gred anda ialah: B");
    else if (markah >=80 && <=100)
	System.out.println("Gred anda ialah: A");
	else 
	System.out.println("Masukkan markah 0-100 sahaja");
}
}