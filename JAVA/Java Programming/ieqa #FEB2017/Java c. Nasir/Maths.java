import java.util.Scanner;
class Maths{
int addv,subv,multiv,divv,a,b;

public void add(){

addv = a + b;

}
public void Subtract(){
subv = a-b;

}
public void Multiply(){

multiv=a*b;

}
public void Divide(){

divv=a/b;

}
public void display(){

System.out.println(addv);
System.out.println(subv);
System.out.println(multiv);
System.out.println(divv);

}
public static void main(String [] args){
Scanner input = new Scanner(System.in);
System.out.print("Sila masukkan No 1 :");
int a = input.nextInt();
System.out.print("Sila masukkan No 2 :");
int b = input.nextInt(); 

Maths math = new Maths();
math.add();
math.Subtract();
math.Multiply();
math.Divide();
math.display();

}


}