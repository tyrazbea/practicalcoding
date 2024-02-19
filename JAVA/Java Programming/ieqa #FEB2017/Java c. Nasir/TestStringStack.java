package teststringstack;

import java.util.*;
public class TestStringStack {

        public static void main(String[] args) {
            Deque<String> stack = new ArrayDeque<String>();
            stack.push("GB");
            stack.push("DE");
            stack.push("FR");
            stack.push("ES");
            System.out.println(stack);
            System.out.println("stack.peek() : " + stack.peek());
            System.out.println("stack.pop() : " + stack.pop());
            System.out.println(stack);
            System.out.println("stack.pop() : " + stack.pop());
            System.out.println(stack);
            System.out.println("stack.push(\"TE\") : ");
            stack.push ("TE");
            System.out.println(stack);
            
    }
}