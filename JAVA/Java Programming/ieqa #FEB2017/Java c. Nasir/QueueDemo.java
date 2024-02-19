import java.util.*;
public class QueueDemo {
	public static void main (String [] args) {
		System.out.println("Queue in Java");
		System.out.println("----------------------");
		System.out.println("Adding items to the Queue");
		
		Queue qw = new LinkedList();
		qw.add("JAVA");
		qw.add(".NET");
		qw.add("JAVASCRIPT");
		qw.add("HTML5");
		qw.add("HADOOP");
		
		System.out.println("Items in the queue " + qw );
		System.out.println("remove element : " + qw.remove());
		System.out.println("First element now : " + qw.peek());
		
		}
	}