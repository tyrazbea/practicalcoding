import java.util.Scanner;
public class soalan44 {

    public static void main(String args[]){
	
	Scanner input = new Scanner(System.in);
	
	System.out.print("masukkan sifir anda");
	int sifir = input.nextInt();
	
	   for(int i=1; i<=12; i++){
	   
       System.out.println(i + " X " + sifir + " = " +(i * sifir));
    }
	}
}