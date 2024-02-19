import matawang.dinar;
import matawang.rupiah;
import matawang.dollar;
import matawang.usdollar;

import java.util.*;

class MyException extends Exception {
	MyException (String message)
	{
		System.out.println(message);
	}
}
class tukar {
public static void main (String[] args) {
	
	try {
	double RM; 
	
	Scanner input = new Scanner (System.in);
	System.out.print ("Masukkan Nilai : ");
	RM = input.nextDouble();
 
	dinar d = new dinar();
	rupiah r = new rupiah();
	dollar dl = new dollar();
	usdollar us = new usdollar();
	
	d.getdata(RM);
	r.getdata(RM);
	dl.getdata(RM);
	us.getdata(RM);
	}

	catch (Exception e) {
		System.out.println("Please Try Again");
	}
}
}
