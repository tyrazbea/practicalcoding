/*
--C--|--O--|--L--|--U--|--M--|--N--| [lajur]
--+--|----|----|----|----|
--R--|----|----|----|----|
--O--|----|----|----|----|
--W--|----|----|----|----|

*/


public class loopfor2
{
	 public static void main(String[] args) {
     
      
      for(int i = 8; i >= 1; i--)
      {
          for(int j = 2; j < i; j++)  //j utk tambah baris/rows
          {
             System.out.print("*");
          }
          System.out.println();
      }
   }
}