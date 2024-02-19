// Aturcara ini ialah latihanif
import java.util.Scanner;
public class latihanif
{
public static void main (String[]args)
	{
	Scanner input = new Scanner (System.in);
	double a;
	System.out.print("Masukkan nombor a:");
	a=input.nextDouble();
	if (a>0)
	System.out.println("Positif");
	else
	System.out.println("Negatif");
	}
}