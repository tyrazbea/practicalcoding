/*
class math
num1,
num2,
addv, subv, multiv, div_v

------------------------------------

void add (int a, int b)
void subtract (int a, int b)
void multiply (int a, int b)
void divide (int a, int b)
void display();
*/

public class Maths {
	
	int num1, num2;
	float addv, subv, multiv, div_v;
	String name;
	

	public Maths(String name) {
	this.name = name;	
	}
	
	void add(int a, int b) {
	addv = a + b ;
	}
	
	void subtract(int a, int b) {
	subv = a - b ;
	}
	
	void multiply(int a, int b) {
	multiv = a * b ;
	}
	
	void divide(int a, int b) {
	div_v = a / b ;
	}
	
	void display() {
	
	System.out.println("\nCalculate Fruits Price: " +name);
	System.out.println("Addition : " +addv );
	System.out.println("Subtract : " +subv );
	System.out.println("Multiply : " +multiv);
	System.out.println("Divition : " +div_v);
	}
	
		
	public static void main (String [] args) {

	Maths v1 = new Maths("Kedai Pak Mat");	
	v1.subtract(10,44);
	v1.multiply(20,30);
	v1.divide(30,40);	
	v1.display();
	
	Maths v2 = new Maths("AEON Jusco Ayer Keroh");
	v2.add(16,61);
	v2.subtract(14,41);
	v2.multiply(22,31);
	v2.divide(33,41);	
	v2.display();
	}
}
	