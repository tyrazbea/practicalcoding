public class LatStack {
	
	int stackSize;
	int top;
	String stackArr[];
	
	//constructor untuk class
	
	public LatStack(int n){
		stackSize = n;
		top = 0;
		stackArr = new String[stackSize];
		
	}
	
	//push method
	
	public void push(String txt){
		if(isFull()){
			System.out.println("Stack is full - cannot add element");
		}
		
		//assigning value to stack yang paling tinggi
		else{
			stackArr[top] = txt;
			System.out.println("Adding "+top + " " + txt);
			top++;
		}
	}
	public String pop(){
		if(isEmpty()){
			System.out.println("Stack is empty - no element");
			return null;
		}
		else{
			top--;
			String temp = stackArr[top];
			System.out.println("Deleting" + top + "  " + temp);
			return temp;
		}
	}
	public String peek(){
		String peekCheck = stackArr[top-1];
		System.out.println("The top entity in the stack is " + top + "  " + peekCheck);
		return peekCheck;
	}
	
	//Check for overflow
	public boolean isFull(){
		if(top == stackSize){
			return true;
		}
		else{
			return false;
		}
	}
	
	public boolean isEmpty(){
		if(top == 0){
			return true;
		}
		else{
			return false;
	}
}

	public static void main (String [] args) {
		LatStack abc = new LatStack(4);
		
		abc.push("Selamat");
		abc.push("Hari");
		abc.push("Raya");
		abc.push("Aidilfitri");
		abc.pop();
		abc.pop();
		abc.peek();
		}
}