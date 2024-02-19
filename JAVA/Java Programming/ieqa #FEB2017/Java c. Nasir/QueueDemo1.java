import java.util.*;
public class QueueDemo1 {
	public static void main (String [] args) {
		System.out.println("Queue in Java");
		System.out.println("----------------------");
		System.out.println("Adding items to the Queue");
		
		Queue qw = new LinkedList();
		qw.add("CARROT");
		qw.add("ORANGES");
		qw.add("RAISIN");
		qw.remove();
		qw.remove();
		qw.add("PEACH");
		qw.add("BANANAS");
		qw.remove();
		qw.add("DURIAN");
		qw.add("GRAPES");
		qw.remove();
		qw.remove();
		System.out.println(qw.size());
		
		System.out.println("Items in the queue " + qw );
		System.out.println("First element now : " + qw.peek());
		
		}
	}