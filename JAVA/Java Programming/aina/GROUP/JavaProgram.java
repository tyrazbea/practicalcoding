/* Java Program Example - Java nested loops */

public class JavaProgram
{ 
   public static void main(String args[])
   {
       
      int i, j, k, space=10;
      
      for(i=0; i<10; i++)
      {
          for(k=0; k<space; k++)
          {
              System.out.print(" ");
          }
          
          for(j=0; j<i; j++)
          {
              System.out.print("* ");
          }
          System.out.println();
          
          space--;
      }
      
   }
}