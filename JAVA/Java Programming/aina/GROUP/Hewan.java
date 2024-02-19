
public abstract  Hewan {
  // Deklarasi method
  abstract void setName();
  abstract void setMakanan();
}

 public class Kelinci extends Hewan {
    public void setName(){
      System.out.println("Nama hewan adalah \"KELINCI\"");
    }
     
    public void setMakanan(){
      System.out.println("Makanan kelinci adalah \"WORTEL\"");
    }
     
     public void setWarna(){
      System.out.println("Warna kelinci \"PUTIH\"");
    }
     
    public static void main(String[] args){
      Kelinci k = new Kelinci();
      k.setName();
      k.setMakanan();
      k.setWarna();
    }
 }