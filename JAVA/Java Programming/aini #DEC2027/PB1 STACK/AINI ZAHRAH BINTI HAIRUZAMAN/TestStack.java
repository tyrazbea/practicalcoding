//NOR AEIN BINTI MOHAMAD YUSUF
//980704045300

public class TestStack {

//arraysize = 4
//indexsize = 3

int stacksize;
int top;
String stackArr[];

	//constructor untuk LatStack
	public TestStack(int ss){
	
		stacksize = ss;
		top = 0;
		stackArr = new String[stacksize];
		}
	
	//push untuk memasukkan nilai dalam array
	public void push(String txt) {
		
		if(isFull()) {  // panggil function
		System.out.println("Stack Full - cannot add to element");
		}
	
		else {    	
		stackArr[top] = txt;
		System.out.println("Adding " + top + "" + txt);
		top++;
		}
	}	
	
	//pop untuk membuang objek
	public String pop() {
		
		if(isEmpty()) {  // panggil function
		System.out.println("Stack Empty - cannot add to element");	
		return null;
		}
	
		else {
		top--;
		String temp = stackArr[top];  
		System.out.println("Delecting " + top + "" + temp);
		return temp;
		}
	}	
	
	//peek	
	public String peek() {
		
		String peekCheck = stackArr[top-1] ;  // panggil function
		System.out.println("The top entity in the Stack is " + top + " " + peekCheck);	
		return peekCheck;
	}
	
	
	//if stack size isFull
	public boolean isFull(){
		
		if(top == stacksize) {
		return true;	
		}	
		
		else {
		return false;	
		}
	}
	
	
	public boolean isEmpty(){
		
		if(top == 0) {
		return true;	
		}	
		
		else {
		return false;	
		}
	}
	
	//main for declare output/data yang diminta
	public static void main (String [] args) {
	TestStack tsk = new TestStack(4);

	tsk.push(" Monday ");
	tsk.push(" Tuesday ");
	tsk.push(" Wednesday ");
	tsk.pop();
	tsk.pop();
        tsk.push(" Thursday ");
        tsk.push(" Friday ");
        tsk.pop();
        tsk.push(" Saturday ");
        tsk.push(" Sunday ");
        tsk.pop();
        tsk.pop();
	tsk.peek();
	}
	
}