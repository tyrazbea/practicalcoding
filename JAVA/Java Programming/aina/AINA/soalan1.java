//soalan1 array

public class soalan1 {

   public static void main(String args[]) {
   double [] numbers = {1.20, 0.80, 1.50, 3.50, 4.80};    

      for(int i = 0; i<5; i++) {
       
		System.out.print( "Price " + (i+1) + " = RM " + numbers[i]);
		System.out.print("\n" );
      
      }
   }
}