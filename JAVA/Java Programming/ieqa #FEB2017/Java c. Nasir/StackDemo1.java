import java.util.*;
public class StackDemo1 {
	static void showpush(Stack st, String a) {
		st.push(new String(a));
		System.out.println("push(" + a + ")");
		System.out.println("stack: " + st);
		}
	
	static void showpop(Stack st) {
		System.out.print("pop -> ");
		String a = (String) st.pop();
		System.out.println(a);
		System.out.println("stack: " + st);
		}
		
		
	public static void main(String args[]) {
		Stack st = new Stack();
		st.push("JAVA");
		st.push("MATHEMATICS");
		st.push("PHP");
		st.push("SCIENCE");
		st.push("MYSQL");
		System.out.println("Saiz stack sekarang ialah " + st.size());
		st.pop();
		st.pop();
		st.pop();
		System.out.println("Saiz stack sekarang ialah " + st.size());
		st.push("ECOMMERCE");
		st.push("MOBILE APPS");
		System.out.println(st.size());
		
		try {
			showpop(st);
			}
		catch (EmptyStackException e) {
		System.out.println("empty stack");
		}
	}
}